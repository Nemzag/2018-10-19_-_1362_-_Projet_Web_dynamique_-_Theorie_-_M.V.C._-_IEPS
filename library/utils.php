<?php
// PHASE ONE ".\01-STRUCTURE"

/*
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-08
 * Time: 13:30
 */

function dump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	exit;
}

// PHASE 05-SECTIONS

function cutString($txt)
{
	if(strlen($txt) > 200) {
		$txt = substr($txt,0,200);
		$space = strrpos($txt, ' ');
		$txt = substr($txt, 0, $space);
		$txt .= '...';
		return $txt;
	}
	else {
		return $txt;
	}
}

// PHASE 05-SECTIONS

function path($url) {

	$url = explode('/', rtrim(filter_var($_GET['url'], FILTER_SANITIZE_URL), '/'));

	if(isset($url[2])) {

		return $path = '../../';

	} elseif (isset($url[1])) {

		return $path = '../';

	} else {

		return $path = '';
	}
}

// PHASE 08-ADMIN

function message($result, $ok, $not) {

	if($result) {

		$_SESSION['message']['type'] = 'success';
		$_SESSION['message']['msg'] = $ok;
	} else {

		$_SESSION['message']['type'] = 'warning';
		$_SESSION['message']['msg'] = $not;
	}
}