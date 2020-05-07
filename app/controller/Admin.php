<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-06
 * Time: 11:41
 */

// PHASE 07-LOGIN

class Admin extends MainController
{
	private $tableCategory = 'category';
	private $tableSections = 'sections';

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct();
		Session::verifLevel();
	}

	// ────────────────────────────────────────────────────────────────────────

	public function index()
	{
		$this->home();
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/home
	public function home()
	{
		// View ≡ Include…
		$this->load->view('admin/inc/head');        // HTML <head>
		$this->load->view('admin/inc/header');      // HTML <header>
		$this->load->view('admin/inc/aside');       // HTML <aside>
		$this->load->view('admin/inc/main_header'); // HTML <main> begin

		// Logique principale…
		$this->load->view('admin/home');

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer'); // HTML <main> end
		$this->load->view('admin/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────
	// CATEGORIES
	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/addcategory
	// addCategory() est la page de formulaire, ce n'est pas la logique / application de process : insertCategory().
	public function addCategory()
	{
		// View ≡ Include…
		$this->load->view('admin/inc/head');        // HTML <head>
		$this->load->view('admin/inc/header');      // HTML <header>
		$this->load->view('admin/inc/aside');       // HTML <aside>
		$this->load->view('admin/inc/main_header'); // HTML <main> begin

		// Logique principale…
		$this->load->view('admin/form/add_category');

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer'); // HTML <main> end
		$this->load->view('admin/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/Admin/listCategory
	public function listCategory()
	{

		// View ≡ Include…
		$this->load->view('admin/inc/head');        // HTML <head>
		$this->load->view('admin/inc/header');      // HTML <header>
		$this->load->view('admin/inc/aside');       // HTML <aside>
		$this->load->view('admin/inc/main_header'); // HTML <main> begin

		// Il charge le model
		$categoriesModel = $this->load->model('CategoriesModel');

		// Pour utiliser l'attribut on utilise l'objet.
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		// Il passe le résultat du tableau dans la vue (avec paramètre).
		$this->load->view('admin/list_category', $data);

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer'); // HTML <main> end
		$this->load->view('admin/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/?url=index/catbyid
	public function catById($id)
	{
		// View ≡ Include…
		$this->load->view('admin/head');            // HTML <head>
		$this->load->view('admin/header');          // HTML <header>
		$this->load->view('admin/aside');           // HTML <aside>
		$this->load->view('admin/main_header');     // HTML <main> begin

		// que doit faire cette méthode quand elle est invoqué. Elle doit récupérer « select() ».

		// $id = 2; // $id = $_GET['id'];
		$categoriesModel = $this->load->model('CategoriesModel');
		// Il charge le model

		$data['catbyid'] = $categoriesModel->catById($this->tableCategory, $id);

		// dump($data);
		// Envoyé à la vue, dans le fichier, en passant un en‑registre‑mênt.
		$this->load->view('public/catbyid', $data);

		// View ≡ Include…
		$this->load->view('admin/main_footer');     // HTML <main> end
		$this->load->view('admin/footer');          // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/insert_category
	// insertCategory est la logique / application de process, ce n'est pas la page de formulaire : addCategory().
	public function insertCategory()
	{
		/*
		// View ≡ Include…
		$this->load->view('admin/head');            // HTML <head>
		$this->load->view('admin/header');          // HTML <header>
		$this->load->view('admin/aside');           // HTML <aside>
		$this->load->view('admin/main_header');     // HTML <main> begin
		*/

		// Up‑load…
		if (!empty($_FILES['image']['name'])) {

			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'asset/public/img/categories/' . $image);
		} else {
			$image = 'default.jpg';
		}

		$data = [ // Donnée que l'on récupère du formulaire.
			'name' => $_POST['name'],
			'image' => $image
			// 'image' => $_FILES['image']['name']
			// 'description' => $_POST['description']
		];

		// On doit loader le model.
		$categoriesModel = $this->load->model('categoriesModel');

		// Il faut invoqué la méthode sur le model.
		$result = $categoriesModel->insertCat($this->tableCategory, $data);
		// (nom de la $table mais en objet, $data : les informations).

		$message['val'] = $result == 1;
		/*
		message($result, 'La catégorie a été ajoutée correctement', 'La catégorie n\'a pas été ajoutée');
		*/

		// $this->load->view('admin/addcategory', $message);

		header('location:' . BASE_URL . 'Admin/listCategory');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

		/*
		// View ≡ Include…
		$this->load->view('admin/main_footer');     // HTML <main> end
		$this->load->view('admin/footer');          // HTML <footer>
		*/
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	public function deleteCategory($id) {

		// View ≡ Include…
		$this->load->view('admin/head');            // HTML <head>
		$this->load->view('admin/header');          // HTML <header>
		$this->load->view('admin/aside');           // HTML <aside>
		$this->load->view('admin/main_header');     // HTML <main> begin

		$condition = "id = $id";

		$categoriesModel = $this->load->model('CategoriesModel');

		// Supprimez la image
		// On doit utiliser la méthode catbyid
		$data = $categoriesModel->catById($this->tableCategory, $id);

		// dump($data[0]['image']);

		if($data[0]['image'] != 'default.jpg') {

			unlink('asset/public/img/categories/' . $data[0]['image']);
		}

		// Suppression de l'enregistrmeent dans la DataBase.
		$result = $categoriesModel->delCat($this->tableCategory, $condition);
		// $categoriesModel->delCat($this->tableCategory, $condition);
		message($result, 'La catégorie a été sup‑primée cor‑recte‑mênt', 'La catégorie n\'a pas été sup‑primée');

		header('location:' . BASE_URL . 'Admin/listCategory');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

		// View ≡ Include…
		$this->load->view('admin/main_footer');     // HTML <main> end
		$this->load->view('admin/footer');          // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/editcategory/{id}
	// editCategory($id) est la page de formulaire, ce n'est pas la logique / application de process : updateCategory().
	public function editCategory($id)
	{
		// View ≡ Include…
		$this->load->view('admin/inc/head');            // HTML <head>
		$this->load->view('admin/inc/header');          // HTML <header>
		$this->load->view('admin/inc/aside');           // HTML <aside>
		$this->load->view('admin/inc/main_header');     // HTML <main> begin

		// Charge‑mênt du modêl
		$categoriesModel = $this->load->model('CategoriesModel');

		// Créatiôn du para‑mètre.
		$data['catbyid'] = $categoriesModel->catById($this->tableCategory, $id);

		$this->load->view('admin/form/update_category', $data);

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer');     // HTML <main> end
		$this->load->view('admin/inc/footer');          // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// updateCategory() est la logique / application de process, ce n'est pas la page de formulaire : editCategory($id).
	public function updateCategory()
	{
		if(!empty($_FILES['image']['name'])) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'asset/public/img/categories/' / $image);
		} else {
			$image = $_POST['imagename'];
		}

		$condition = "id = {$_POST['id']}";

		$data = [
			'name' => $_POST['name'],
			'image' => $image,
		];

		$categoriesModel = $this->load->model('CategoriesModel');
		// Il charge le model.

		$result = $categoriesModel->catUpdate($this->tableCategory, $data, $condition);
		// catUpdate est une fonction S.Q.L. situé dans "model/CategoriesModel.php".

		message($result, 'La catégorie a été modifié correctement', 'La catégorie n\'a pas été modifié');

		header('location:' . BASE_URL . 'admin/listCategory');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

		// $data['catbyid'] = $categoriesModel->catById($this->tableCategory, $id);

		// dump($data);
		// Envoyé à la vue, dans le fichier, en passant un erngistremênt.

		header('location:' . BASE_URL . 'Admin/listCategory');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

	}

	// ────────────────────────────────────────────────────────────────────────
	// SECTIONS
	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// addSection() est la page de formulaire, ce n'est pas la logique / application de process.
	// localhost/projets/ieps/admin/addsection
	public function addSection() {

		// View ≡ Include…
		$this->load->view('admin/inc/head');            // HTML <head>
		$this->load->view('admin/inc/header');          // HTML <header>
		$this->load->view('admin/inc/aside');           // HTML <aside>
		$this->load->view('admin/inc/main_header');     // HTML <main> begin

		// On crée cette variable pour afficher la liste de selection.
		// Ce n'est pas une erreur, c'est norm‑al.
		$categoriesModel = $this->load->model('CategoriesModel');

		// $data['categories'] = $categoriesModel->getSections($this->tableSections, $this->tableCategory); // Ma note.
		$data['categories'] = $categoriesModel->categories($this->tableCategory); // Prof.

		$this->load->view('admin/form/add_section', $data);

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer');     // HTML <main> end
		$this->load->view('admin/inc/footer');          // HTML <footer>

	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/insertsection
	public function insertSection() {

		/*
		// View ≡ Include…
		$this->load->view('admin/inc/head');            // HTML <head>
		$this->load->view('admin/inc/header');          // HTML <header>
		$this->load->view('admin/inc/aside');           // HTML <aside>
		$this->load->view('admin/inc/main_header');     // HTML <main> begin
		*/

		if (!empty($_FILES['image']['name'])) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'asset/public/img/sections/' . $image);
		} else {
			$image = 'default.jpg';
		}
		$data = [
			'name' => $_POST['name'],
			'image' => $image,
			'duration' => $_POST['duration'],
			'cat_id' => $_POST['cat'],
			'description' => $_POST['description'],
		];
		$sectionsModel = $this->load->model('sectionsModel');

		// $data['sections'] = $SectionsModel->getSections($this->tableSection, $this->tableCategory);
		$result = $sectionsModel->setSections($this->tableSections, $data);

		message($result, 'La section a été ajoutée correctement', 'La section n\'a pas été ajoutée');

		// $this->load->view('admin/list_section', $data);
		header('location:' . BASE_URL . 'Admin/sectionList');
		// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
		// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…

		/*
		// View ≡ Include…
		$this->load->view('admin/inc/main_footer');     // HTML <main> end
		$this->load->view('admin/inc/footer');          // HTML <footer>
		*/
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 08-ADMIN
	// localhost/projets/ieps/admin/sectionlist
	public function sectionList()
	{
		// View ≡ Include…
		$this->load->view('admin/inc/head');        // HTML <head>
		$this->load->view('admin/inc/header');      // HTML <header>
		$this->load->view('admin/inc/aside');       // HTML <aside>
		$this->load->view('admin/inc/main_header'); // HTML <main> begin

		$sectionsModel = $this->load->model('SectionsModel');
		// Il charge le model

		// Pour utiliser l'attribut on utilise l'objet.
		// $data['sections'] = $SectionsModel->sections($this->tableSections);
		$data['sections'] = $sectionsModel->getSections($this->tableSections, $this->tableCategory);

		// Il passe le résultat du tableau dans la vue.
		$this->load->view('admin/list_section', $data);

		// View ≡ Include…
		$this->load->view('admin/inc/main_footer'); // HTML <main> end
		$this->load->view('admin/inc/footer');      // HTML <footer>
	}

	// A FAIQE
	// PHASE 09-ADMIN
	// 2018-12-21 - 10H11
	public function editSection($id) {

		echo "edit"; // À completer.
	}

	// A FAIQE
	// PHASE 09-ADMIN
	// 2018-12-21 - 10H11
	public function deleteSection() {

		echo "delete"; // À completer.
	}
}