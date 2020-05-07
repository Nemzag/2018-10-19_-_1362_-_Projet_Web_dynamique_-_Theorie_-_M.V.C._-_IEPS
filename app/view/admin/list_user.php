<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-20
 * Time: 09:45
 */

// PHASE 08-SECTION
?>

<!-- LE CODE PRECEDENT EST DANS « MAIN_HEADER.PHP » -->
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="h2"><i class="fa fa-table fa-fw"></i> Liste des utilisateurs</h2>

			</div>

			<!-- /.panel-body -->
			<div class="panel-body">

				<!-- /.morris-area-chart -->
				<div id="morris-area-chart">
					<?php
					if (isset($val) && $val == true) {
						echo '<div class="alert.alert-success" role="alert">Utilisateur, ajoutée</div>';
					} elseif (isset($vale)) {
						echo '<div class="alert.alert-warning" role="alert">Pro‑blème lors de l\'ajout de l\'utilisateur</div>';
					}
					?>

					<!-- PHASE 08-ADMIN -->
					<!-- 2018-12-14 11:00 DataTable (id="sections" class="display" -->
					<table id="users" class="table table-hover table-primary display">
						<thead>
						<tr>

							<th scope="col">Nom</th>

							<th scope="col">Prénom</th>

							<th scope="col">Login</th>

							<th scope="col">E‑mail</th>

							<th scope="col">Niveau</th>

							<?php if(/*isset($_SESSION['login']) && */$_SESSION['level'] == 4) : ?>

							<th scope="col">Modifier</th>

							<th scope="col">Effacer</th>

							<?php endif ?>


						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $key => $value): ?>

							<tr>
								<td><?= $value['last_name']; ?></td>

								<td><?= $value['first_name']; ?></td>

								<td><?= $value['login']; ?></td>

								<td><?= $value['mail']; ?></td>

								<td><?= $value['level']; ?></td>

								<?php if(/*isset($_SESSION['login']) && */$_SESSION['level'] == 4) : ?>

									<td>
										<a href="<?= BASE_URL ?>User/editUser/<?= $value['id']; ?>"><i class="fas fa-edit"></i></a>
									</td>
									<td>
										<a href="<?= BASE_URL ?>User/deleteUser/<?= $value['id']; ?>"><i class="fas fa-trash-alt"></i></a>
									</td>

								<?php endif ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					<!-- PHASE 08-ADMIN -->
					<!-- 2018-12-14 11:00 DataTable -->
					<script>
						$(document).ready(

						    function() {

						    $('#users').DataTable(

									{
										// La colonne trier par défaut.
										"order": [
											[2, 'asc'], // 3ème colonne.
											/*
											[1, 'asc'], // 2ème colonne.
											*/
										]
									}
								);
							}
						);
					</script>

				</div>
				<!-- /.morris-area-chart -->

			</div>
			<!-- /.panel-heading -->
		</div>
		<!-- /.panel -->

	</div>
	<!-- /.col-lg-8 -->

</div>
<!-- /.row -->
