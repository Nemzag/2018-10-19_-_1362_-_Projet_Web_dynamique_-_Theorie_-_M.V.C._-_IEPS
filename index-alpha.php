<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-08
 * Time: 11:42
 */

require 'library/utils.php';
require 'app/view/public/inc/header.php';
require 'library/MainController.php'; // On requiere le main controleur.

// On l'instance pro pouvoir l'utiliser
$main = new MainController(); // Constructeur.

// $main->viewAll();
// $main->viewOne();

// L'Étape suivante est la creation d'un routeur.

// http://localhost:63342/01-structure/index01.php?url=posts/viewOne=1

// http://localhost:63342/01-structure/index01.php?url=post/viewone/12345679/
echo $_GET['url'];
// il faut écrire dans la bar d'adresse pour afficher :
echo '<br>';

// Version mutliple
$path = $_GET['url']; // demonstration, car le prof dit on ne met pas le $_GET dans une variable.
$path = filter_var($path, FILTER_SANITIZE_URL); // Filtre pro URL
$path = rtrim($path, '/');
$path = explode('/',$path);
dump($path);

// Commênt récuperer les composants.
echo $path[0].'<br>';
echo $path[1].'<br>';
echo $path[2].'<br>';

// Version unique du routeur (function multiple).
$url = explode('/', rtrim(filter_var($_GET['url'], FILTER_SANITIZE_URL), '/'));

dump($url);

require 'app/view/footer.php';