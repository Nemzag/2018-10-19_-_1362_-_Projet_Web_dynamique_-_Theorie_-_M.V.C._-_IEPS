<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 10:20
 */

// PHASE 08-ADMIN
?>

<!-- Begin /.navbar-default -->
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">

		<ul class="nav" id="side-menu">

			<li>
				<a href="<?= BASE_URL ?>admin/index" class="active"><i class="fas fa-tachometer-alt"></i> Tableau‑de-bord</a>
			</li>

			<li>
				<a href="<?= BASE_URL ?>Admin/listCategory"><!--<i class="fa fa-bar-chart-o fa-fw"></i>--><i class="fas fa-chart-bar fa-fw"></i> Catégories<span class="fas arrow"></span></a>

				<ul class="nav nav-second-level">
					<li>
						<a href="<?= BASE_URL ?>Admin/addCategory">Ajouté</a>
					</li>
					<li>
						<a href="<?= BASE_URL ?>Admin/listCategory">Gestions</a>
					</li>
				</ul>
				<!-- /.nav-second-level -->

			</li>

			<li>
				<a href="#"><!--<i class="fa fa-file-text-o fa-fw"></i>--><i class="fas fa-file-alt fa-fw"></i> Séctions<span class="fas arrow"></span></a>

				<ul class="nav nav-second-level">

					<li>
						<a href="<?= BASE_URL ?>admin/addsection">Ajouté</a>
					</li>

					<li>
						<a href="<?= BASE_URL ?>admin/sectionlist">Gestions</a>
					</li>

				</ul>
				<!-- /.nav-second-level -->

			</li>

			<?php if(/*isset($_SESSION['login']) && */$_SESSION['level'] == 4) : ?>
			<li>
				<a href="#"><i class="fa fa-table fa-fw"></i> Utilisateurs</a>

				<ul class="nav nav-second-level">

					<li>
						<a href="<?= BASE_URL ?>user/adduser">Ajouté</a>
					</li>

					<li>
						<a href="<?= BASE_URL ?>user/userlist">Gestions</a>
					</li>

				</ul>
				<!-- /.nav-second-level -->

			</li>
		<?php endif ?>

		</ul>
	</div>
</div>
<!-- End /.navbar-default -->
</nav>

// PROF



			</li>





		</ul>
	</div>
</div>
</nav>