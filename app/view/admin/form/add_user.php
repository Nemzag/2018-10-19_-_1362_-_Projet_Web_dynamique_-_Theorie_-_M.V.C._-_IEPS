<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-20
 * Time: 09:56
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
				<i class="fa fa-bar-chart-o fa-fw"></i> Ajouter un utilisateur
			</div>
			<!-- End /.panel-heading -->

			<!-- Begin /.panel-body -->
			<div class="panel-body">

				<!-- Begin /.morris-area-chart -->
				<div id="morris-area-chart">

						<?php /* if (isset($val) && $val == true) {

							echo '<div class="alert alert-success" role="alert">Catégorie section.</div>';

						} elseif (isset($val)) {

							echo '<div class="alert alert-warning" role="alert">Problème lors de l\'ajout de l\'utilisateur.</div>';
						} */ ?>

					<!-- Begin /form -->
					<form action="<?= BASE_URL ?>user/insertUser" method="post">
					<!-- ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »… -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="lastName">Nom</label> <input type="text" id="lastName" name="last_name" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="firstName">Prénom</label> <input type="text" id="firstName" name="first_name" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="login">Log‑in</label> <input type="text" id="login" name="login" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="password">Mot de passe</label> <input type="password" id="password" name="password" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="mail">E‑mail</label> <input type="text" id="mail" name="mail" class="form-control">

						</div>
						<!-- End /.form-group -->

						<!-- Begin /.form-group -->
						<div class="form-group">

							<label for="level">Niveau</label>
							<select id="level" name="level" class="form-control">

								<option value="">Séléctionnez…</option>

								<?php foreach ($levels as $key => $value): ?>

									<option value="<?= $value['id'] ?>"><?= $value['level_name'] ?></option>

								<?php endforeach; ?>
							</select>

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