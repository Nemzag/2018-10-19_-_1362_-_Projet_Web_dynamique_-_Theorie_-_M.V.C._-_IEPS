<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-30
 * Time: 13:45
 */

// PHASE 06-SEARCH
?>

<h3 class="h3">Résultat</h3>

<table>

	<thead>
	<tr>
		<th>Image</th>
		<th>Nom de section</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>

	<?php foreach($sectionbysearch as $key => $value): ?>

	<tr>
		<td><img class="mr-3" src="<?= BASE_URL ?>/asset/public/img/sections/<?= $value['image']; ?>" alt=""></td>
		<td><?= $value['name'] ?></td>
		<td><?= $value['description'] ?></td>
	</tr>
	</tbody>

	<?php endforeach; ?>
</table>

</div>
<!-- End /.col-md-8 -->