<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 13:10
 */

?>
<!-- LE CODE PRECEDENT EST DANS « MAIN_HEADER.PHP » -->
<!-- /.row -->
<div class="row">

	<!-- /.panel-lg-12 -->
	<div class="col-lg-12">

		<!-- /.panel-default -->
		<div class="panel panel-default">

			<!-- /.panel-heading -->
			<div class="panel-heading">
				<h2 class="h2"><i class="fas fa-chart-bar fa-fw"></i> Liste des catégories</h2>
			</div>

			<!-- /.panel-body -->
			<div class="panel-body">

				<!-- /.morris-area-chart -->
				<div id="morris-area-chart">
					<?php
					if (isset($val) && $val == true) {
						echo '<div class="alert.alert-success" role="alert">Catégorie ajoutée</div>';
					} elseif (isset($vale)) {
						echo '<div class="alert.alert-warning" role="alert">Probleme lors de l\'ajout de la catégorie</div>';
					}
					?>
					<table id="categories" class="table table-hover table-primary display">
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
						<?php foreach ($categories as $key => $value): ?>

							<tr>
								<td><?= $value['id']; ?></td>
								<td>
									<img src="<?= BASE_URL ?>/asset/public/img/categories/<?= $value['image']; ?>" alt="<?= $value['image']; ?>" style="width: 100px;">
								</td>
								<td><?= $value['name']; ?></td>
								<td>
									<a href="<?= BASE_URL ?>Admin/editCategory/<?= $value['id']; ?>"><i class="fas fa-edit"></i></a>
								</td>
								<td>
									<a href="<?= BASE_URL ?>Admin/deleteCategory/<?= $value['id']; ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>

					</table>
					<script>
                        $(document).ready(

                            function() {

                                $('#categories').DataTable({
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
			<!-- /.panel-body -->

		</div>
		<!-- /.panel-heading -->

	</div>
	<!-- /.panel-lg-12 -->

</div>
<!-- /.row -->

