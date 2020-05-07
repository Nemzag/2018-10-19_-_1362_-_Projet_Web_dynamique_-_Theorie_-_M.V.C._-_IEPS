<?php
// PHASE ONE ".\01-STRUCTURE"

/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-08
 * Time: 14:52
 */

class Load
{
	public function view($viewName, $data = null) // (url{method}, url{param}).
	{
		// PHASE 2.0 « 02-MODELES ».

		// Ici on met le extract don't on parle dans « sections.php ».
		if(!is_null($data)) {
			extract($data);
			// récupère le nom du tableau sous la forme de une variable di‑recte‑mênt ex‑ploitable.
			// Grace à ça je vais pouvoir utilisé dans ma vue « sections.php »
		}
		require 'app/view/' . $viewName . '.php';
		// Il est appelé dans index donc on ne descend pas d'un chemin.
	}

	// PHASE 2.0 « 02-MODELES ».

	// On refait une méthode.
	public function model($modelName) { // variable, quel model on va requerir.

		require 'app/model/' . $modelName . '.php';
		return new $modelName;
	}
}