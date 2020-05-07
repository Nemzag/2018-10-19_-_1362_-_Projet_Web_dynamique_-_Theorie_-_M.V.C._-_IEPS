<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-09
 * Time: 09:42
 */

// PHASE 2.0 « 02-MODELES ».

class SectionsModel extends MainModel
{
	public function __construct()
	{
		// PHASE 05-SECTIONS
		parent::__construct();
	}


	// ────────────────────────────────────────────────────────────────────────
	/* REMPLACER PAR LA PHASE 05-SECTIONS
	// On doit créé le sectionsList();
	public function sectionsList() {

		/*
		$data = [ // Un modele envoie les données.
			'Bac info' => '4 ans',
			'WebDev' => '2 ans',
			'Broderie machine' => '6mois'
		]; // tableau associatif.
		*/

		// Le soucie c'est que quand on va récupérer les donnes de la base de donnée,
		// on va pas récupérer sur la forme d'un tableau associatif mais multidimensional.
		// J'imagine la base de donnée.

		/*
		$data = [
			['Bac info', '4ans', 'Supérieur'], // Je peux passé plusieurs données comme une table de database.
			['WebDev', '2 ans', 'Supérieur'],
			['Broderie machine', '6mois', 'Supérieur'],
			['Bac compta', '4ans', 'Supérieur']
		];
		// On fait un return.
		// Tout les tableaux que je renverrais sont des $data.
		return $data;
	}
	*/

	// ────────────────────────────────────────────────────────────────────────
	// PHASE 05-SECTIONS
	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/index »
	public function getAllSections($table)
	{
		$sql = "SELECT *
				FROM 2018_mvc.$table
				ORDER BY name ASC;";

		return $this->db->select($sql);
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 05-SECTIONS
	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/index »
	public function getLastSections($table)
	{

		$sql = "SELECT *
				FROM 2018_mvc.$table
				ORDER BY id DESC
				LIMIT 20;";

		return $this->db->select($sql);
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 05-SECTIONS
	public function getSectionsById($tableSections, $tableCategory, $id)
	{

		$sql = "SELECT $tableSections.*, $tableCategory.name AS namecat
				FROM $tableSections
				LEFT JOIN $tableCategory
				ON $tableSections.cat_id = $tableCategory.id
				WHERE $tableSections.id = $id";

		return $this->db->select($sql);
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 05-SECTIONS
	public function getSectionByCat($tableSections, $tableCategory, $id)
	{

		$sql = "SELECT $tableSections.*, $tableCategory.name AS namecat
				FROM $tableSections
				LEFT JOIN $tableCategory
				ON $tableSections.cat_id = $tableCategory.id
				WHERE $tableCategory.id = $id
				ORDER BY name ASC;";

		return $this->db->select($sql);
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 06-SEARCH
	function getSectionBySearch($table, $search)
	{

		if (isset($search) && !empty($search)) {

			$sql = "SELECT *
					FROM 2018_mvc.$table
					WHERE 2018_mvc.sections.name LIKE '%$search%'
					OR 2018_mvc.sections.description LIKE '%$search%';";

			return $this->db->select($sql);
		}
	}

	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-14 09:55:00
	// PHASE 08-ADMIN
	public function getSections($tableSections, $tableCategory) {

		$sql = "SELECT $tableSections.*, $tableCategory.name AS namecat
				FROM $tableSections
				LEFT JOIN $tableCategory
				ON $tableSections.cat_id = $tableCategory.id;";

		return $this->db->select($sql);
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	public function setSections($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	// ────────────────────────────────────────────────────────────────────────

	// Il faut créé l'update & le delete.
}