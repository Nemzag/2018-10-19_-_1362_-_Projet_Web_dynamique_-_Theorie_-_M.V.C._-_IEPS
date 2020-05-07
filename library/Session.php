<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-06
 * Time: 13:30
 */

class Session
{
	// Elle ne depend de rien, pas de extends donc pas de __construct()…
	/*
	public function __construct()
	{

	}
	*/

	// Init()
	// ->start
	public static function init() {

		session_start();
	}

	// destroy()
	// ->détruit
	public static function destroy() {

		self::init(); // C'est le session_start() dans la function init(), que l'on appelle en objet.

		$_SESSION = array();
		// Nous savons que session_destroy() suffirait, mais le prof veut detruire le cookie, car session_destroy ne le fait pas automatiquement, par le detruire on met une valeur temps negative.
		session_destroy();

		if (ini_get("session.use_cookies")) {

			$params = session_get_cookie_params();

			setcookie(session_name(), '', time() - 42000,
				$params['path'],
				$params['domain'],
				$params['secure'],
				$params['httponly']
			);
		}
		// Finalement on detruit la session.
		session_destroy();
	}

	// get()
	// ->afficher les sessions
	public static function get($key) { // dans un tableau.

		if(isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} else {
			return false;
		}
		// On peut utiliser le ternaire dans ce cas, le prof ne l'a pas fait par simplicité de comprehension.
		// Le typage peut être ajouté à l'entrée et la sortie.
	}

	// set()
	// ->affecter les sessions.
	public static function set($key, $val) { // dans un tableau.

		$_SESSION[$key] = $val;
	}

	// verifLevel()
	// ->vérifie l'existence et ou le niveau.
	public static function verifLevel() {

		self::init(); // Propager les sessions.

		if(self::get('level') == false) {

			self::destroy(); // car il a peut etre tenté de voler une session ou elle est incomplete.
			header('location:' . BASE_URL . 'Index/home');
			// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
			// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
		}
	}

}