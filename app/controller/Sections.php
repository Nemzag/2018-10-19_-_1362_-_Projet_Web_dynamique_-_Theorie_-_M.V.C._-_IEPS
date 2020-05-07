<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-08
 * Time: 14:02
 */

class Sections extends MainController
{

	private $table = 'sections';
	private $name = 'name';

	public function __construct()
	{
		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/sections/view
	public function view()
	{
		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/aside');          // HTML <aside>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		echo '<h2>Message from sections contrôleurs and method view.</h2>';

		// View ≡ Include…
		$this->load->view('public/inc/aside');       // HTML <aside>
		$this->load->view('public/inc/main_header'); // HTML <main> begin
		$this->load->view('public/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────

	// URL : « http://localhost/2018-2019_-_I.E.P.S.C.F.N/2019-10-19_-_Projet_Web_dynamique_-_M.V.C._-_IEPS/sections/viewone/id
	// Ce n'est plus comme en HTML avec des « ? » ou « & » mais des « Classe/Méthode/Paramètre »…
	public function viewOne($id)
	{
		// View ≡ Include…
		$this->load->view('public/inc/head');           // HTML <head>
		$this->load->view('public/inc/nav');            // HTML <nav>
		$this->load->view('public/inc/header');         // HTML <header>
		$this->load->view('public/inc/aside');          // HTML <aside>
		$this->load->view('public/inc/main_header');    // HTML <main> begin

		echo '<h2>Message from sections contrôleurs and method view and param: '.$id.'.</h2>';

		// View ≡ Include…
		$this->load->view('public/inc/aside');       // HTML <aside>
		$this->load->view('public/inc/main_header'); // HTML <main> begin
		$this->load->view('public/inc/footer');      // HTML <footer>
	}

	// ────────────────────────────────────────────────────────────────────────
}