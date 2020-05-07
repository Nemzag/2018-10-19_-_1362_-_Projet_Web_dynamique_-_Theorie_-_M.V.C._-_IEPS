<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-30
 * Time: 10:06
 */

// PHASE 06-SEARCH

class Page extends MainController
{
	private $tableCategory = 'category';
	private $tableLevels = 'user_level';

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	// Pour éviter la répetition de la meme commande on crée une méthode.
	private function template($view, $data = null) {

		$this->load->view('public/inc/head');        // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');      // HTML <header>
		$this->load->view('public/inc/main_header'); // HTML <main> begin

		// Catégories Aside Visible
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);
		// Nom Objet, invoque méthode, qui appelle ceci avec la valeur variable definie precedemment;

		// On lance dynamiquement les views :
		$this->load->view($view, $data);

		// View ≡ Include…
		// Charger la vue aside.
		$this->load->view('public/inc/aside', $data);       // HTML <aside>
		$this->load->view('public/inc/main_footer'); // HTML <main> begin
		$this->load->view('public/inc/footer');      // HTML <footer>

	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/page/quality
	public function quality() {

		$this->template('public/quality');
	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/page/partenariat
	public function partenariat() {

		$this->template('public/partenariat');
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 09-LEVEL
	// 2018-12-20 11H35
	// https://toolheap.com/test-mail-server-tool/
	// localhost/projets/ieps/page/contact
	public function contact() {

		$levels = $this->load->model("UsersLevelModel");

		$data['levels'] = $levels->levels($this->tableLevels);

		$this->template('public/form/contact', $data);

	}

	// ────────────────────────────────────────────────────────────────────────
}