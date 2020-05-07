<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 10:18
 */

// PHASE 08-ADMIN
?>

<div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= BASE_URL ?>admin/home">I.E.P.S.C.F.</a>
		</div>

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<ul class="nav navbar-nav navbar-left navbar-top-links">
			<li><a href="<?= BASE_URL ?>"><i class="fa fa-home fa-fw"></i> Site‑web</a></li>
		</ul>

		<ul class="nav navbar-right navbar-top-links">

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i> <!-- Log‑in --> <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
					</li>
					<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
					</li>
					<li class="divider"></li>
					<li><a href="<?= BASE_URL ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- /.navbar-top-links -->

	<!-- /#wrapper (dans le FOOTER.PHP) -->