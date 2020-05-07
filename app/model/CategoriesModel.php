<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-09
 * Time: 11:49
 */

// PHASE ".\03-DATABASE"

class CategoriesModel extends MainModel {

	public function __construct()
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	public function categories($table) {
		// On utilise pro nom celui utilisé dans « index.php », precedênt.

		// On veux récupéré les données.
		// On fait une requete.

		$sql = "SELECT *
				FROM 2018_mvc.$table
				ORDER BY 2018_mvc.$table.name ASC;"; // Ascendant Ordering.
		/*
		$dbh = $this->db->prepare($sql);
		$dbh->execute();

		// $result = $dbh->fetch(PDO::FETCH_ASSOC); // pas fetchAll car on va utiliser un attribut.
		$result = $dbh->fetchAll(PDO::FETCH_ASSOC); // pas fetchAll car on va utiliser un attribut.
		// dump($result);
		*/
		return $this->db->select($sql);
		// On utilise la méthode select dans Database.php, avec le parametre category sous forme de variable et pas en « dur ».
	}

	// ────────────────────────────────────────────────────────────────────────

	public function catById($table, $id) {

		$sql = "SELECT *
				FROM 2018_mvc.$table
				WHERE id = :id";

		/*
		$result = $this->db->prepare($sql);

		$result->bindValue(':id', $id);

		$result->execute();

		return $result->fetchAll(PDO::FETCH_ASSOC); // Association pour tableau associatif.
		*/

		$condition = [':id' => $id];

		return $this->db->select($sql, $condition); // ( , paramètre)
	}

	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-14 09:59:00
	// PHASE 08-ADMIN
	public function insertCat($table, $data)
	{
		return $this->db->insert($table, $data); // Function insert() est dans Database.php…
	}

// ────────────────────────────────────────────────────────────────────────

	public function catUpdate($table, $data, $condition) {

		return $this->db->update($table, $data, $condition);
	}

	// ────────────────────────────────────────────────────────────────────────

	public function delcat($table, $condition) {

		return $this->db->delete($table, $condition);
	}

	// ────────────────────────────────────────────────────────────────────────
}