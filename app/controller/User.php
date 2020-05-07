<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-14
 * Time: 14:17
 */

// PHASE 09-LEVEL
class User extends MainController
{
	private $tableUser = 'users';
	private $tableLevels = 'user_level';

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct();
		Session::verifLevel();
	}

	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-20 - 09H37
	// PHASE 09-LEVEL
	// localhost/projets/ieps/user/userlist
	public function userList()
	{
		{
			// View ≡ Include…
			$this->load->view('admin/inc/head');        // HTML <head>
			$this->load->view('admin/inc/header');      // HTML <header>
			$this->load->view('admin/inc/aside');       // HTML <aside>
			$this->load->view('admin/inc/main_header'); // HTML <main> begin

			// Logique principale…
			$userModel = $this->load->model('UsersModel');

			$data['users'] = $userModel->users($this->tableUser, $this->tableLevels);

			$this->load->view('admin/list_user', $data);

			// View ≡ Include…
			$this->load->view('admin/inc/main_footer'); // HTML <main> end
			$this->load->view('admin/inc/footer');      // HTML <footer>
		}
	}
	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-20 - 10H02
	// PHASE 09-LEVEL
	// localhost/projets/ieps/user/adduser
	public function addUser()
	{
		{
			// View ≡ Include…
			$this->load->view('admin/inc/head');        // HTML <head>
			$this->load->view('admin/inc/header');      // HTML <header>
			$this->load->view('admin/inc/aside');       // HTML <aside>
			$this->load->view('admin/inc/main_header'); // HTML <main> begin

			// Logique principale…
			// On doit charger le model. Mais pour cela il nous font un model et controleur « level »…

			// Ce dont à besoin pour alimetner la table déroulabte.
			$levelsModel = $this->load->model('UsersLevelModel');

			$data['levels'] = $levelsModel->levels($this->tableLevels);

			$this->load->view('admin/form/add_user', $data);

			// View ≡ Include…
			$this->load->view('admin/inc/main_footer'); // HTML <main> end
			$this->load->view('admin/inc/footer');      // HTML <footer>
		}
	}

	// ────────────────────────────────────────────────────────────────────────

	// 2018-12-20 - 10H52
	// PHASE 09-LEVEL
	// localhost/projets/ieps/user/insertuser
	public function insertUser() {

		$data = [
			'last_name' => $_POST['last_name'],
			'first_name' => $_POST['first_name'],
			'login' => $_POST['login'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'mail' => $_POST['mail'],
			'level' => $_POST['level'],
		];

		$userModel = $this->load->model('UsersModel');

		$result = $userModel->insertUser($this->tableUser, $data);

		message($result, 'L\'utilisateur a été correctement ajouté', "L'utilisateur n'a pas été ajouté");

		header('location:' . BASE_URL . 'User/userList');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
	}

	// A FAIQE
	// PHASE 09-ADMIN
	// 2018-12-21 - 10H14
	public function editUser() {

		echo "edit"; // À completer.
	}

	// A FAIQE
	// PHASE 09-ADMIN
	// 2018-12-21 - 10H12
	public function deleteUser() {

		echo "delete"; // À completer.
	}
}