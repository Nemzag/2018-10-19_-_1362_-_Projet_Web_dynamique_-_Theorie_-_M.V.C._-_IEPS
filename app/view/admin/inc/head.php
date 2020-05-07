<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-13
 * Time: 13:33
 */

// PHASE 08-ADMIN

// Set Variables -->
isset($_GET['url']) ? $path = path($_GET['url']): $path = '';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin I.E.P.S.C.F.</title>

	<!-- Set C.S.S. -->
	<!-- Bootstrap Core C.S.S. -->
	<link href="<?= $path ?>asset/admin/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu C.S.S. -->
	<link href="<?= $path ?>asset/admin/css/metisMenu.min.css" rel="stylesheet">

	<!-- Timeline C.S.S. -->
	<link href="<?= $path ?>asset/admin/css/timeline.css" rel="stylesheet">

	<!-- StartMin C.S.S. -->
	<link href="<?= $path ?>asset/admin/css/startmin.css" rel="stylesheet">

	<!-- DataTable C.S.S. -->
	<link rel="stylesheet" href="<?= BASE_URL ?>asset/admin/js/data_tables/datatables.css">

	<!-- Font-Awesome C.S.S. -->
	<!--<link href="../asset_admin/css/font-awesome.min.css" rel="stylesheet">-->
	<!--  type="text/css" plus valide de les mettres… -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Personal -->
	<link rel="stylesheet" href="<?= $path ?>asset/public/css/main.css">

	<!-- Set Scripts -->
	<!-- jQuery -->
	<script src="<?= $path ?>asset/admin/js/jquery.min.js"></script>

	<!-- DataTable Script -->
	<link rel="stylesheet" href="<?= BASE_URL ?>asset/admin/js/data_tables/datatables.js">
	<script src="<?= $path ?>asset/admin/js/data_tables/datatables.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
