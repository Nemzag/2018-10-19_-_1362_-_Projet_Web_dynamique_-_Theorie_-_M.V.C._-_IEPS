<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-29
 * Time: 13:36
 */

// PHASE 05-SECTIONS
?>

<h2 class="h2">Détail de la formation</h2>

<?php
// dump($data);

foreach ($sectionbyid as $key => $value): ?>
	<!-- CASE SENSITIVE -->

	<!-- Begin h3 -->
	<h3><?= $value['name']; ?></h3>
	<!-- End h3 -->

	<!-- Begin h4 -->
	<!-- Il faut allez chercher la méthode de l'index avec le parametre de l'ID. -->
	<h4>
		<a href="<?= BASE_URL ?>index/sectionsbycat/<?= $value['cat_id']; ?>"><?= $value['namecat'] ?></a>
	</h4>
	<!-- End h4 -->

	<!-- Begin /.media -->
	<div class="media">

		<!-- Begin /.mr-3 -->
		<img class="mr-3" src="<?= BASE_URL ?>/asset/public/img/sections/<?= $value['image']; ?>" alt="">
		<!-- End /.mr-3 -->

		<!-- Begin /.media-body -->
		<div class="media-body">

			<!-- Begin /.mt-0 -->
			<h5 class="mt-0">Durée: <?= $value['duration']; ?></h5>
			<!-- Begin /.mt-0 -->

			<p><?= $value['description']; ?></p>

			<hr>
		</div>
		<!-- End /.media-body -->

	</div>

<?php endforeach; ?>
</div>
<!-- End /.col-md-8 -->

