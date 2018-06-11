<?php
	include "conexion.php";
	$nombre = $_GET['nombre'];
	$idioma = $_GET['idioma'];

	if($idioma == 1){
    	$idioma1 = "kiche";
    	$idioma2 = "Ingles";
	}
	if($idioma == 2){
	    $idioma1 = "kiche";
	    $idioma2 = "Espanol";
	}
	if($idioma == 3){
    	$idioma1 = "Espanol";
    	$idioma2 = "Ingles";
  	}
  	if($idioma == 4){
    	$idioma1 = "Ingles";
    	$idioma2 = "kiche";
  	}
  	if($idioma == 5){
    	$idioma1 = "Espanol";
    	$idioma2 = "kiche";
  	}
  	if($idioma == 6){
    	$idioma1 = "Ingles";
    	$idioma2 = "Espanol";
  	}


  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  $consulta = "SELECT puntuacion FROM puntuacionesaltas WHERE nombreEstudiante = '".$nombre."' and idioma1 = '".$idioma1."' and idioma2 = '".$idioma2."' LIMIT 1";

  $resultado = mysqli_query( $conexion, $consulta );
  session_start();
  while ($columna = mysqli_fetch_array( $resultado ))
  {
  	$_SESSION['puntuacion'] = $columna['puntuacion'];
  }
  

  mysqli_close( $conexion );      
?>