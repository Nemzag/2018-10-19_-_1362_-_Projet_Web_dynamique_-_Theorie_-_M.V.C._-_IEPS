<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 11:45
 */

?>
<!-- LE CODE PRECEDENT EST DANS « MAIN_HEADER.PHP » -->

<!-- Begin /.row -->
<div class="row">

	<!-- Begin /.col-lg-12 -->
	<div class="col-lg-12">

		<!-- Begin /.panel-default -->
		<div class="panel panel-default">

			<!-- Begin /.panel-heading -->
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Ajouter une catégorie
			</div>
			<!-- End /.panel-heading -->

			<!-- Begin /.panel-body -->
			<div class="panel-body">

				<!-- Begin /.morris-area-chart -->
				<div id="morris-area-chart">
					<?php
					if (isset($val) && $val == true) {

						echo '<div class="alert.alert-success" role="alert">Catégorie ajoutée.</div>';

					} elseif (isset($vale)) {

						echo '<div class="alert.alert-warning" role="alert">Problème lors de l\'ajout de la catégorie.</div>';
					}
					?>

					<!-- Begin /form -->
					<form action="<?= BASE_URL ?>admin/insertcategory" method="post" enctype="multipart/form-data">
					<!-- ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »… -->

						<!-- Begin /.form-group -->
						<div class="form-group">
							<label for="name">Nom</label>
							<input class="form-control" type="text" id="name" name="name">
						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">
							<label for="image">Image</label>
							<input class="form-control" type="file" id="image" name="image">
						</div>
						<!-- End /.form-group -->

						<button type="submit" class="btn btn-raised btn-secondary">Ajouter</button>

					</form>
					<!-- End /.form-group -->

				</div>
				<!-- End /.morris-area-chart -->

			</div>
			<!-- End /.panel-body -->

		</div>
		<!-- /.panel -->

	</div>
	<!-- End /.col-lg-12 -->

</div>
<!-- /.row -->