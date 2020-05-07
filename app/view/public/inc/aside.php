<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-29
 * Time: 10:56
 */

// PHASE 05-SECTIONS
?>

					<!-- Aside Begin-->
					<aside class="col-md-4">

						<!-- Begin /.card -->
						<div class="card">

							<!-- Begin /.card-header -->
							<div class="card-header">
								<b>Nos catégories</b>
							</div>
							<!-- Begin /.card-header -->

							<!-- Begin /.list-group-flush -->
							<ul class="list-group list-group-flush">

							<?php foreach($categories as $key => $value): ?>

								<!-- php dump($categories); ?> -->

								<!-- Begin /.list-group-item -->
								<li class="list-group-item">

									<!-- Dans ce cas si, le chemin « sectionbycat » n'est pas le fichier « section_by_cat.php », mais le chemin par fonction : BASE_URL/Classe/function/para‑mètre. At‑tention de ne pas les confondre. -->
									<a href="<?= BASE_URL ?>index/sectionsbycat/<?= $value['id']; ?>"><?= $value['name']; ?></a>
								</li>
								<!-- End /.list-group-item -->
							<?php endforeach; ?>

							</ul>
							<!-- End /. list-group-flush -->

						</div>
						<!-- end /.card -->

					</aside>
					<!-- End Aside -->
