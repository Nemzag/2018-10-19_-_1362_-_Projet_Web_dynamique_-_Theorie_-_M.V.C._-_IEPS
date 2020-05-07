<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-06
 * Time: 14:25
 */

// PHASE 01-STRUCTURE
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="Content-Type" content="text/html;">
    <meta name="description" content="Personnal website">
    <meta name="subject" content="Web Dewelopmenth">
    <meta name="keywords" content="">
    <meta name="author" content="Gazmen Arifi / Газмен Арифи">
    <meta name="birthday" content="1979-09-30" scheme="YYYY-MM-DD">
    <meta name="reply-to" content="???????@???????.com">
    <meta name="copyright" content="Gazmen Arifi / Газмен Арифи">
    <meta name="date" content="2018-11-08" scheme="YYYY-MM-DD">
    <meta name="hour" content="10:21" scheme="HH:mm">
    <meta name="generator" content="PhpStorm">

	<!-- METTRE UNE VARIABLE SERAIT PLUS JUDICIEUX EN FONCTION DES PAGES -->
    <title>I.E.P.S.C.F.</title>

    <!-- C.S.S. : BootStrap -->

	<!-- PHASE 05-SECTIONS -->
	<?php isset($_GET['url'])? $path = path($_GET['url']) : $path = ''; ?>
    <link rel="stylesheet" href="<?= $path ?>asset/public/css/bootstrap-material-design.min.css">

    <!-- C.S.S. : Custom -->
    <link rel="stylesheet" href="<?= $path ?>asset/public/css/main.css">

    <!-- <script src="<?= $path ?>asset/public/js/jquery.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>