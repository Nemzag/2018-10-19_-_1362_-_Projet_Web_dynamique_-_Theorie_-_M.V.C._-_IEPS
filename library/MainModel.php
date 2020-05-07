<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-09
 * Time: 11:34
 */

// PHASE ".\03-DATA‑BASE"
class MainModel
{
	protected $db;

	// Je fais mon constrcuteur.
	public function __construct() {

		try {
			$this->db = new Database();
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {
			// Invoque la classe. $e = exception.

			die ('Error message : ' . $e->getMessage());
		}
		// Maintenant on à une connection nickel.
	}
}