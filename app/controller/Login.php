<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-06
 * Time: 10:18
 */

// PHASE 07-LOGIN

class Login extends MainController
{
	private $tableSections = 'sections';
	private $tableCategory = 'category';
	private $tableUsers = 'users';
	// Obligatoire sinon il ne sait pas quel table utilisé.
	// Voir fonction « loginAuth() {} » plus bas.

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct(); // herite du parents.
	}

	// ────────────────────────────────────────────────────────────────────────

	public function index() {

		$this->login();
	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/login/login
	public function login() {

		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		$this->load->view('public/form/login');
		// pas besoin de mettre le php car elle est concatener dans une function main precedente.


		// Récupérer mes catégories dans le aside.
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		$this->load->view('public/inc/main_footer');    // HTML <main> end
		$this->load->view('public/inc/aside', $data);   // HTML <aside>
		$this->load->view('public/inc/footer');         // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	public function loginAuth() {

		$loginModel = $this->load->model("LoginModel");

		$result = $loginModel->userVerif($this->tableUsers, $_POST['login'], $_POST['password']);

		if($result) {
			Session::init();

			Session::set('firstname', $result[0]['first_name']);
			Session::set('lastname', $result[0]['last_name']);
			Session::set('level', $result[0]['level']);

			header('location:' . BASE_URL . 'Admin/home');
			// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
			// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

		} else {
			header('location:' . BASE_URL . 'public/form/login');
			// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
			// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
		}
	}

	public function logout() {

		Session::destroy();

		header('location:' . BASE_URL . 'Index/home');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
	}
}