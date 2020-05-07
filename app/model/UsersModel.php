<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-14
 * Time: 14:12
 */

// PHASE 09-LEVEL
class UsersModel extends MainModel
{
	public function __construct()
	{
		parent:: __construct();
	}

	// 2018-12-20 - 09H43
	// PHASE 09-LEVEL
	public function users($tableUsers, $tableLevels)
	{

		$sql = "SELECT $tableUsers.*, $tableLevels.level_name
				FROM $tableUsers
				LEFT JOIN $tableLevels
				ON $tableUsers.level = $tableLevels.id;";

		return $this->db->select($sql);
	}

	public function insertUser($table, $data) {

		return $this->db->insert($table, $data);
	}

	// Il faut créer l'update & le delete.
}