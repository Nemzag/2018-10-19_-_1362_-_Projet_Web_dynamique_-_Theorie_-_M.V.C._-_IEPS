<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2018-10-19
 * Time: 15:13
 * Update: 17:12
 */

// L'ordre de require à de l'importance.
require 'library/utils.php';
require 'app/config/config.php';



//  require 'library/Load.php';
//  require 'library/MainController.php';   // On requière le main contrôleur.
//  require 'library/MainModel.php';
//  require 'library/Database.php';         // Connection à la Base de donnée.
spl_autoload_register(function($class) {
	require 'library/' . $class .'.php';
});

$main = new Main();

/*
On l'instance pro pouvoir l'utiliser
*/
// $main = new MainController();            // Constructeur.

// index-alpha.php?url=post/viewone/12345679/
/*
if (isset($_GET['url'])) {
	$url = explode('/', rtrim(filter_var($_GET['url'], FILTER_SANITIZE_URL), '/'));
	// dump($url); // On teste si la variable existe.

	require 'app/controller/' . $url[0] . '.php';

	// J'ai mon contrôleur.
	// C'est un objet
	$controller = new $url[0]();

	// Tester l'existence. Je teste d'abord le param.
	if (isset($url[2])) { // http://localhost:63342/01-structure/index02.php?url=Sections/viewOne/2

		$method = $url[1];
		$controller->$method($url[2]);

	} elseif (isset($url[1])) { // http://localhost/01-structure/index02.php?url=Sections/view

		$method = $url[1];
		$controller->$method();
	}

} else {
	// Normalemênt il doit aller chercher un contrôleur.
	// On doit appeller la méthode, dans un contrôleur.
	require 'app/controller/Index.php';
	// Je dois l'instancier.
	$index = new Index();
	// Une fois que j'ai instancé, j'invoque la méthode.
	$index->home();
}
*/