<?php
// PHASE ONE ".\01-STRUCTURE"
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2018-11-08
 * Time: 11:39
 */

class MainController
{
	// On a besoin d'un attribut
	protected $load;

    public function __construct()
    {
    	// echo '<h2>Message From MainController</h2>'; // Renvoie un simple message.
	    $this->load = new Load(); // je renvoie une instance de la classe Load dans tout mes controlleurs.
		// Comme on veut utilisé $load, mais qu'on est en objet on fait $this->load.
	    // load : Nom de l'attribut.
    }

	/*
	public function viewAll {
		echo "<h2>Message From MainController</h2>"
	}

	public function viewOne {
		echo "<h2>Message From viewAll Method param : '.$id.'</h2>"
	}
	 */
}