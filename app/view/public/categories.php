<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-09
 * Time: 14:37
 */

// PHASE ".\03-DATABASE"?>

<h2>Nos catégories :</h2>

<?php

foreach ($categories as $key => $value) { // Chaque tableau « &value » du tableau principale « &key ».
	echo '<p><img src="' . BASE_URL . '/asset/public/img/categories/' . $value['image'] . '" alt=""> : ' . $value['name'] . '.</p>';
}