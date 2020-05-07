<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-29
 * Time: 15:07
 */
?>

<?php
		// dump($data);

		// localhost/projets/ieps/index/sectionsbycat/6
		foreach ($sectionbycat as $key => $value): ?>

			<!-- CASE SENSITIVE -->

			<!-- h3 -->
			<h3 class="h3"><?= $value['name']; ?></h3>

				<!-- h4 -->
				<!-- Il faut allez chercher la méthode de l'index avec le parametre de l'ID. -->
				<h4 class="h4">
					<a href="<?= BASE_URL ?>index/sectionsbycat/<?= $value['cat_id']; ?>"><?= $value['namecat'] ?></a>
				</h4>

				<!-- /.media -->
				<div class="media">

					<img class="mr-3" src="<?= BASE_URL ?>/asset/public/img/sections/<?= $value['image']; ?>" alt="">

					<!-- Begin /.media-body -->
					<div class="media-body">

						<!-- h5 -->
						<h5 class="mt-0">Durée: <?= $value['duration']; ?></h5>

						<p><?= $value['description']; ?></p>

						<hr>

					</div>
					<!-- End /.media-body -->

				</div>
				<!-- End /.media -->

		<?php endforeach; ?>
	</div>
	<!-- End /.col-md-8 -->