<?php
	session_start();
	$puntos = $_GET['puntos'];
	$puntuacion = 0;
	if(!(isset($_SESSION['puntuacion']))){
		$_SESSION['puntuacion'] = 0;
	}
	else{
		$puntuacion = $_SESSION['puntuacion'] + $puntos;
		$_SESSION['puntuacion'] = $puntuacion;
	}
?>