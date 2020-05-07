<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 22/11/2018
 * Time: 11:24
 */

class Category extends MainController
{
	// on va utiliser un attribut de classe pro chercher la table.
	private $table = 'category';
	private $name = 'name';

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	// PHASE ".\03-DATABASE"

	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/category/categorylist
	// Car le premier et le contrôleur et le second la méthode de appel.
	public function categoryList()
	{
		$categoriesModel = $this->load->model('CategoriesModel');
		// Il charge le model

		$data['categories'] = $categoriesModel->categories($this->table); // Pour utiliser l'attribut on utilise l'objet.

		// Il passe le résultat du tableau dans la vue.
		$this->load->view('public/categories', $data);
	}

	// ────────────────────────────────────────────────────────────────────────

	/*
	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/?url=index/catbyid
	public function catById()
	{
		// que doit faire cette méthode quand elle est invoqué. Elle doit récupérer « select() ».

		$id = 2; // $id = $_GET['id'];
		$categoriesModel = $this->load->model('CategoriesModel');
		// Il charge le model

		$data['catbyid'] = $categoriesModel->catById($this->table, $id);

		// dump($data);
		// Envoyé à la vue, dans le fichier, en passant un erngistremênt.
		$this->load->view('public/catbyid', $data);
	}
	*/

	// PHASE 04-C.R.U.D.

	/* Ne peut plus etre dans la parti publique.
	// PHASE 08-ADMIN

	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/category/insertcategory
	public function insertCategory()
	{
		// Up‑load…
		if (!empty($_FILES['image']['name'])) {

			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'asset/public/img/categories/' . $image);
		} else {
			$image = 'default.png';
		}

		$data = [ // Donnée que l'on récupère du formulaire.
			'name' => $_POST['name'],
			'image' => $image
			// 'image' => $_FILES['image']['name']
			// 'description' => $_POST['description']
		];

		// On doit loader le modele.
		$categoriesModel = $this->load->model('categoriesModel');

		// Il faut invoqué la méthode sur le model.
		$result = $categoriesModel->insertCat($this->table, $data);  // (nom de la $table mais en objet, $data : les informations).

		// $result envoie un 0 ou 1.
		/*
		if ($result) {
			$message['val'] = true; // J'ai une fonction extract, je dois passé par un tableau nommé.
		} else {
			$message['val'] = false;
		}

		$message['val'] = $result == 1;

		$this->load->view('public/form/add_category', $message);
	}
	*/


	/*
	// localhost/projets/ieps/category/addcategory
	public function addCategory()
	{
		$this->load->view('public/form/add_category');
		// Donc on droit dès lors créé la view\addcategory.php…
	}

	// localhost/projets/ieps/category/updatecat
	public function updateCat()
	{
		// $condition = "id = 11"; // On récupére l'I.D.
		$condition = "id = {$_POST['id']}";

		// Up‑load…
		if (!empty($_FILES['image']['name'])) {

			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'asset/public/img/categories/' . $image);
		} else {
			$image = $_POST['imagename']; // Le champ caché du formulaire.
		}

		/*
		$data = [
			'name' => 'Machinerie',
			'image' => 'Machinerie.png'
		];
		*/

		/*
		$data = [
			'name' => $_POST['name'],
			'image' => $_FILES['image']['name']
		];

			// Charger le modele.
		$categoriesModel = $this->load->model('CategoriesModel');

		$categoriesModel->catUpdate($this->table, $data, $condition); // -> méthode.
		// Il faut maintenat créé catUpdate
	}
	*/

	/*
	public function UpdateCategory()
	{
		$id = 11;// $id = $_GET['id'];
		$categoriesModel = $this->load->model('CategoriesModel');
		// Il charge le model.

		$data['catbyid'] = $categoriesModel->catById($this->table, $id);

		// dump($data);
		// Envoyé à la vue, dans le fichier, en passant un erngistremênt.

		$this->load->view('public/updatecategory', $data); // On doit recuperer les valeurs.
	}
	*/

	/*
	public function deleteCategory() {

		$id = 14;

		$condition = "id = 14";

		$categoriesModel = $this->load->model('CategoriesModel');

		// Supprimez la image
		// On doit utilsier la methode catbyid
		$data = $categoriesModel->catById($this->table, $id);

		// dump($data[0]['image']);

		if($data[0]['image'] != 'default.jpg') {

			unlink('asset/img/categories/' . $data[0]['image']);
		}

		// Suppression de l'enregistrmeent dans la DataBase.
		$categoriesModel->delCat($this->table, $condition);
	}
	*/
}