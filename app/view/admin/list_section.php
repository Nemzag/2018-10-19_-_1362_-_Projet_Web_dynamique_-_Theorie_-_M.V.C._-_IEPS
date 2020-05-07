<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-13
 * Time: 13:26
 */

// PHASE 08-SECTION
?>

<!-- LE CODE PRECEDENT EST DANS « MAIN_HEADER.PHP » -->
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="h2"><i class="fas fa-file-alt fa-fw"></i> Liste des sections</h2>

			</div>

			<!-- /.panel-body -->
			<div class="panel-body">

				<!-- /.morris-area-chart -->
				<div id="morris-area-chart">
					<?php
					if (isset($val) && $val == true) {
						echo '<div class="alert.alert-success" role="alert">Section, ajoutée</div>';
					} elseif (isset($vale)) {
						echo '<div class="alert.alert-warning" role="alert">Pro‑blème lors de l\'ajout de la catégorie</div>';
					}
					?>

					<!-- PHASE 08-ADMIN -->
					<!-- 2018-12-14 11:00 DataTable (id="sections" class="display" -->
					<table id="sections" class="table table-hover table-primary display">
						<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Image</th>
							<th scope="col">Catégorie</th>
							<th scope="col">Modifier</th>
							<th scope="col">Effacer</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($sections as $key => $value): ?>

							<tr>
								<td><?= $value['id']; ?></td>
								<td>
									<img src="<?= BASE_URL ?>/asset/public/img/sections/<?= $value['image']; ?>" alt="<?= $value['image']; ?>" style="width: 100px;">
								</td>
								<td><?= $value['name']; ?></td>
								<td>
									<a href="<?= BASE_URL ?>Admin/editSection/<?= $value['id']; ?>"><i class="fas fa-edit"></i></a>
								</td>
								<td>
									<a href="<?= BASE_URL ?>Admin/deleteSection/<?= $value['id']; ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					<!-- PHASE 08-ADMIN -->
					<!-- 2018-12-14 11:00 DataTable -->
					<script>
						$(document).ready(

						    function() {

						    $('#sections').DataTable(

									{
										// La colonne trier par défaut.
										"order": [
											[2, 'asc'], // 3ème colonne.
											/* // ⚠ tableau à partir de 0 / 1ere colonne.
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
