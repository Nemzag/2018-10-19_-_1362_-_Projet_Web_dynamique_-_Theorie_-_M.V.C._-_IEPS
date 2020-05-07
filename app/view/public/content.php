<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-29
 * Time: 10:55
 */

// PHASE 05-SECTIONS
?>
			<!-- Adresse : localhost/projets/ieps/index/home# -->

			<!-- Begin h2 -->
			<h2 class="h2">Dernière's section's</h2>
			<!-- End h2 -->

			<?php foreach ($lastsections as $key => $value): ?>

				<!-- Begin h3 -->
				<h3 class="h3">
					<a href="<?= BASE_URL ?>index/detail/<?= $value['id'] ?>"><?= $value['name']; ?></a>
				</h3>
				<!-- End h3 -->

				<!-- Begin media -->
				<div class="media">

					<!-- Begin mr-3 -->
					<img class="mr-3" src="<?= BASE_URL ?>asset/public/img/sections/<?= $value['image']; ?>" alt="Generic placeholder image">
					<!-- End mr-3 -->

					<!-- Begin media-body -->
					<div class="media-body">

						<!-- Begin mt-0 -->
						<h5 class="mt-0">Durée: <?= $value['duration']; ?></h5>
						<!-- End mt-0 -->

						<p><?= cutString($value['description']); ?></p>

						<hr>

					</div>
					<!-- End media-body -->

				</div>
				<!-- End media -->
<?php endforeach; ?>

			</div>
			<!-- End /.col-md-8 -->
