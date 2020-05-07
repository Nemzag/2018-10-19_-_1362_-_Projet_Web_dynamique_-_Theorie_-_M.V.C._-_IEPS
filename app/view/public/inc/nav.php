<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-14
 * Time: 13:34
 */

session_start();

// Opérateur de nullité.
$_SESSION['level'] = $_SESSION['level'] ?? null;
?>

<!--Begin NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">I.E.P.S.C.F.</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?= BASE_URL ?>index/home">Accueil <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= BASE_URL ?>page/quality">Qualité</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
				   aria-haspopup="true" aria-expanded="false">
					Nos section's
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Artisanat</a>
					<a class="dropdown-item" href="#">Informatique</a>
					<a class="dropdown-item" href="#">Économique</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= BASE_URL ?>page/partenariat">Partenariat</a>
			</li><li class="nav-item">
				<a class="nav-link" href="<?= BASE_URL ?>page/contact">Contact</a>
			</li>

			<?php if(isset($_SESSION['level']) && $_SESSION['level'] >= 2) : ?>

				<li class="nav-item">
					<a class="nav-link" href="<?= BASE_URL ?>admin/home">Administration</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= BASE_URL ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>

			<?php else : ?>

				<li class="nav-item">
					<a class="nav-link" href="<?= BASE_URL ?>login/login">Log‑in</a>
				</li>

			<?php endif ?>

		</ul>
		<form class="form-inline my-2 my-lg-0" method="post" action="<?= BASE_URL ?>index/search">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
		</form>
	</div>
</nav>
<!--End NavBar-->
