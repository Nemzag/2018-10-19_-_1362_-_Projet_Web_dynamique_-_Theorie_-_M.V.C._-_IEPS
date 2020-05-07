<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-20
 * Time: 10:06
 */

// PHASE 09-LEVEL
class UsersLevelModel extends MainModel
{
	public function __construct()
	{
		parent:: __construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-20 - 10H07
	// PHASE 09-LEVEL
	public function levels($tableLevels) {

		$sql = "SELECT *
				FROM $tableLevels;";

		return $this->db->select($sql);
	}
}