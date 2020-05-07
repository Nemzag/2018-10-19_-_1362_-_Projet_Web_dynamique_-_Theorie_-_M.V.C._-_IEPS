<?php

/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 14:53
 */

// LE CODE DE STYLISATION ANTÉRIEUR, EST DANS « MAIN_HEADER.PHP »

/*
dump($data);

C:\Users\nemza\Google Drive\www\projets\ieps\library\utils.php:14:
array (size=1)
  'catbyid' =>
    array (size=1)
      0 =>
        array (size=3)
          'id' => string '11' (length=2)
          'name' => string 'Machinerie' (length=10)
          'image' => string 'Machinerie.png' (length=14)
 */
?>



<!-- Begin /.row -->
<div class="row">

	<!-- Begin /.col-lg-12 -->
	<div class="col-lg-12">

		<!-- Begin /.panel-default -->
		<div class="panel panel-default">

			<!-- Begin /.panel-heading -->
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Mise à jour de une catégorie

			</div>
			<!-- End /.panel-default -->

			<!-- Begin /.panel-body -->
			<div class="panel-body">

				<!-- Begin /.morris-area-chart -->
				<div id="morris-area-chart">

					<?php
					if (isset($val) && $val == true) {
						echo '<div class="alert.alert-success" role="alert">Catégorie modifié</div>';
					} elseif (isset($vale)) {
						echo '<div class="alert.alert-warning" role="alert">Problème lors de la modification de la catégorie</div>';
					}
					?>

					<form action="<?= BASE_URL ?>Admin/updateCategory" method="post" enctype="multipart/form-data">

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="name"><b>Nom :</b></label>


							<input class="form-control" type="text" id="name" name="name" value="<?= $catbyid[0]["name"]; ?>" required>

						</div>
						<!-- End /.form-group -->

						<div class="form-group">

							<label for="image">Image :</label>

							<br>

							<img src="<?= BASE_URL ?>/asset/public/img/categories/<?= $catbyid[0]["image"]; ?>" alt="<?= $catbyid[0]["image"]; ?>" title="<?= $catbyid[0]["image"]; ?>" style="border: #ddd 1px solid">

							<br><br>

							<input class="form-control" type="file" id="image" name="image" value="<?= $catbyid[0]["image"]; ?>">

							<input type="hidden" value="<?= $catbyid[0]["image"] ?>" name="imagename">

							<input type="hidden" value="<?= $catbyid[0]["id"] ?>" name="id">

						</div>
						<!-- End /.form-group -->

						<button type="submit" class="btn btn-raised btn-secondary">Modi‑fier</button>

					</form>

				</div>
				<!-- End /.morris-area-chart -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- End /.panel-default -->

	</div>
	<!-- /.col-lg-12 -->

</div>
<!-- /.row -->

<!-- LE CODE DE STYLISATION POSTÉRIEUR, EST DANS « MAIN_HEADER.PHP » -->