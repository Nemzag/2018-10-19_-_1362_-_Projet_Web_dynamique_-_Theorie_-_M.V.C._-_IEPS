<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-06
 * Time: 11:15
 */

// PHASE 07-LOGIN

class LoginModel extends MainModel
{
	public function __construct() // Récupérer le constructeur du MainModel
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	public function userVerif($table, $login, $password) {

		$sql = "SELECT *
				FROM $table
				WHERE login = :login;";

		return $this->db->affectedRows($sql, $login, $password);
	}

	// ────────────────────────────────────────────────────────────────────────
}