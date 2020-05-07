<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-15
 * Time: 11:10
 */?>

<h2 class="h2">Catégorie souhaitée :</h2>
<?php
// Comme on en a que un on fait pas un foreach() {}.

// dump($catbyid);
/*
foreach($catbyid as $key => $value) {
	echo '<p><img src="../asset/public/img/categories/' . $value['image'] . '"> : ' . $value['name'] . '</p>';
}
*/
	echo '<p><img src="' . BASE_URL . '/asset/img/categories/' . $catbyid[0]['image'] . '"> : ' . $catbyid[0][
'name'] . '</p>'; // Le $catbyid vient de ou ? De le nom de $data, par l'action de l'extract.