<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-13
 * Time: 11:24
 */

?>

<script src=../asset_admin/js/ckeditor/ckeditor.js"?></script>
<!--<script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>-->
<!-- CKFinder permet aussi de uploade des fichiers c'est un bon complement. -->

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

						<?php if (isset($val) && $val == true) {

							echo '<div class="alert alert-success" role="alert">Catégorie section.</div>';

						} elseif (isset($val)) {

							echo '<div class="alert alert-warning" role="alert">Problème lors de l\'ajout de la section.</div>';
						} ?>

					<!-- Begin /form -->
					<form action="<?= BASE_URL ?>admin/insertSection" method="post" enctype="multipart/form-data">
						<!-- ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »… -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="name">Nom</label> <input type="text" id="name" name="name" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="image">Image</label>
							<input type="file" id="image" name="image" class="form-control form-control-file">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="duration">Durée</label>
							<input type="text" id="duration" name="duration" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="cat">Catégorie</label>
							<select id="cat" name="cat" class="form-control">

								<option value="">Séléctionnez…</option>

								<?php foreach ($categories as $key => $value): ?>

									<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>

								<?php endforeach; ?>
							</select>

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="description">Description</label>
							<textarea name="description" id="description" class="form-control"></textarea>
							<script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace('editor1');
							</script>

						</div>
						<!-- End /.form-group -->

						<button type="submit" class="btn-info form-control">Ajouter</button>
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