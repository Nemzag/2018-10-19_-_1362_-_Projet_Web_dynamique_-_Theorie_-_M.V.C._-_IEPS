<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-15
 * Time: 14:45
 */

// Il faut afficher un message de erreur ou pas.
if(isset($val) && $val ==1) {

	echo '<div class="alert alert-success" role="alert">Catégorie ajoutée</div>';

} elseif(isset($val)) {
	echo '<div class="alert alert-warning" role="alert">Problème lors de l\'ajout de la catégorie</div>';
}
?>
<h2 class="h2">Ajoutez une catégorie</h2>

<!-- BASE_URL/Classe/Function/Paramètre -->
<form action="<?= BASE_URL ?>category/insertcategory" method="post" enctype="multipart/form-data">

	<div class="form-group">

		<label for="name">Nom :</label>

		<input class="form-control" type="text" id="name" name="name" required>

	</div>

	<div class="form-group">

		<label for="image">Image :

		<input class="form-control" type="file" id="image" name="image">

	</div>

	<button type="submit" class="btn btn-raised btn-secondary">AJOUTER</button>

</form>