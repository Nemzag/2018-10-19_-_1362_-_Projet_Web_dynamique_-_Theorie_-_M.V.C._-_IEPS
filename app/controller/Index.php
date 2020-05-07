<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-08
 * Time: 14:40
 */

// Contrôleur pro la page d'accueil. Qui contiênt un side avec differênte box.
class Index extends MainController // elle hérite de MainController
{
	private $tableSections = 'sections';
	private $tableCategory = 'category';

	// ────────────────────────────────────────────────────────────────────────

	public function __construct()
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	public function index() {

		$this->home();
	}

	// ────────────────────────────────────────────────────────────────────────

	/*
	// Méthode pro afficher l'accueil.

	// localhost/projets/ieps/index/home
	public function home()
	{
		// $this->load->view('public/home');

		// PHASE 05-SECTIONS

		// echo '<h2>Message From Home Page</h2>';

		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		// Récuperer dernieres sections
		$sectionsModel = $this->load->model('SectionsModel'); // Charge la Classe.

		$data['lastsections'] = $sectionsModel->getLastSections($this->tableSections);

		$this->load->view('public/content', $data);

		// Récupérer les catégories dans le aside.
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		// View ≡ Include…
		$this->load->view('public/inc/aside', $data);       // HTML <aside>
		$this->load->view('public/inc/main_footer'); // HTML <main> end
		$this->load->view('public/inc/footer');      // HTML <footer>
	}
	 */

	// Méthode pro afficher l'accueil.

	// localhost/projets/ieps/index/home
	public function home()
	{
		// $this->load->view('public/home');

		// PHASE 05-SECTIONS

		// echo '<h2>Message From Home Page</h2>';

		// Modifier le 2019‑11‑03
		// Récuperer dernieres sections
		$sectionsModel = $this->load->model('SectionsModel'); // Charge la Classe.

		// $data['sections'] = $sectionsModel->getAllSections($this->tableSections);

		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		$data['lastsections'] = $sectionsModel->getLastSections($this->tableSections);

		$this->load->view('public/content', $data);

		// Récupérer les catégories dans le aside.
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		// View ≡ Include…
		$this->load->view('public/inc/aside', $data);       // HTML <aside>
		$this->load->view('public/inc/main_footer'); // HTML <main> end
		$this->load->view('public/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	/*
	// PHASE 2.0 « 02-MODELES ».
	// Méthode pro les sections.

    // localhost/projets/ieps/index/sections
	public function sections()
	{
		$sectionsModel = $this->load->model('SectionsModel');
		// On charge le model qui est sections.

		$data['sections'] = $sectionsModel->sectionsList(); // Maintenant il faut pour invoquer le ? model.
		// $data dans Index.php n'est pas lié à $data dans SectionsModel.php.

		// On fait un dump pour voir ce que il récupere.
		// dump($data);

		// Je charge le modele et je lui charge le array
		$this->load->view('public/sections', $data);
	}
	*/

	// ────────────────────────────────────────────────────────────────────────

	// PHASE 05-SECTIONS

	// localhost/projets/ieps/index/detail/1
	public function detail($id) {

		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/header');             // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		// On a besoin du model.
		$sectionModel = $this->load->model('SectionsModel');
		$data['sectionbyid'] = $sectionModel->getSectionsById($this->tableSections, $this->tableCategory, $id); // -> invoquer.
		// On doit créé l'attribut tableCategory... Plus haut.

		// On va chercehr la vue. Que l'on a pas encore créé.
		$this->load->view('public/detail', $data);

		// Catégories Aside Visible
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		// View ≡ Include…
		$this->load->view('public/inc/aside', $data);   // HTML <aside>
		$this->load->view('public/inc/main_footer');    // HTML <main> end
		$this->load->view('public/inc/footer');         // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/index/sectionbycat/1
	public function sectionsByCat($id) {

		//Sections
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');           // HTML <head>
		$this->load->view('public/inc/header');             // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		$sectionsModel = $this->load->model('SectionsModel');

		$data['sectionbycat'] = $sectionsModel->getSectionByCat($this->tableSections, $this->tableCategory, $id);

		$this->load->view('public/sections_by_cat', $data);

		// Catégories Aside Visible
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		$this->load->view('public/inc/aside', $data);   // HTML <aside>
		$this->load->view('public/inc/main_footer');    // HTML <main> end
		$this->load->view('public/inc/footer');         // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/index/search
	public function search() {

		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/NAV');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		$sections = $this->load->model('SectionsModel');

		$data['sectionbysearch'] = $sections->getSectionBySearch($this->tableSections, $_POST['search']);

		$this->load->view('public/search', $data);

		// dump($data);

		// Catégories Aside Visible
		$categoriesModel = $this->load->model('CategoriesModel');
		$data['categories'] = $categoriesModel->categories($this->tableCategory);

		// View = Include
		$this->load->view('public/inc/aside', $data);   // HTML <aside>
		$this->load->view('public/inc/main_footer');    // HTML <main> end
		$this->load->view('public/inc/footer');         // HTML <footer>

	}

}