<?php

/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-09
 * Time: 11:27
 */

// PHASE ".\03-DATABASE"

class Database extends PDO
// On herite de la classe PDO.
// On besoin du system, database, path, charset, user, password.
{
	// Cette classe va renvoyé via un constrcuteur l'objet de connection.'
	// D'habitude on fait $dbh new PDO, objet de connection.

	private $dsn = 'mysql:dbname=2018_mvc; host=localhost; charset=utf8';
	private $user = 'root';
	private $password = '';

	// Faire le constructeur.
	public function __construct()
	{
		// Il représênte le parênt.
		parent::__construct($this->dsn, $this->user, $this->password);
	}

	public function select($sql, $condition = null) // $condition : array[].
	{

		/*
		$sql = "SELECT *
				FROM $table"; // On doit récupérer la table. L'idée et d'utiliser un variable. D'ou vient t'êllë. De la CategoriesModel.php.
		*/

		$dbh = $this->prepare($sql); // db : objet de connection, vient de class MainModel.php;

		//dump($condition);

		if ($condition != null) {

			foreach ($condition as $key => $value) { // Je prepare pour plus tard.

				$dbh->bindValue($key, $value);
			}
		}
		$dbh->execute();
		return $dbh->fetchAll(PDO::FETCH_ASSOC);

	}

	public function insert($table, $data)       // Invoqué chez « CategoriesModel.php »…
	{
		// dump($data);

		// $key = array_keys($data); // function que ne donne que les clés de un tableau.
		// dump($key);

		// Transformation en chaine et ajouter une virgule pour les séparere.
		$keys = implode(', ', array_keys($data));
		// dump($keys);

		$values = ':' . implode(', :', array_keys($data));
		// dump($values);

		// $values & $keys pro la requête SQL unique‑mênt.
		$sql = "INSERT INTO $table ($keys) VALUES ($values)";

		/*
		dump($data);
		C:\Users\nemza\Google Drive\www\projets\ieps\library\utils.php:14:
		array (size=2)
		  'name' => string 'Education' (length=9)
		  'image' => string 'default.png' (length=11)
		*/

		$dbh = $this->prepare($sql);

		foreach($data as $key => $value) {

			$dbh->bindValue($key, $value);

		}

		return $dbh->execute();

	}

	public function update($table, $data, $condition) // Trois paramètre, la table, les données et la condition.
	{
		// On va rendre la méthode update dynamique.
		// dump($data);
		// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/category/updateCat »
		$upKeys = "";

		foreach($data as $key => $value) {

			$upKeys .= "$key = :$key, "; // UpdateKey
		}

		$upKeys = rtrim($upKeys, ', ');
		// Dump($upKeys);

		$sql = "UPDATE $table
				SET $upKeys
				-- SET name = :name,
				-- image = :image
				WHERE $condition;"; // Il colorie le nom du champ car c'est aussi un classe SQL.

		// dump($sql);

		$dbh = $this->prepare($sql);

		foreach($data as $key => $value) {
			$dbh->bindValue($key, $value);
		}

		return $dbh->execute();
	}

	public function delete($table, $condition) {

		// Requete SQL
		$sql = "DELETE FROM $table WHERE $condition;";

		// Preparation et protection
		$dbh = $this->prepare($sql);

		// Execution
		return $dbh->execute();
	}

	public function affectedRows($sql, $login, $password) {

		$dbh = $this->prepare($sql);

		$dbh->bindValue(':login', $login);

		$dbh->execute();

		// dump($dbh);

		$result = $dbh->fetchAll(PDO::FETCH_ASSOC);

		if($result) {

			if(password_verify($password, $result[0]['password'])) {

				return $result;
			}
		}
	}
}