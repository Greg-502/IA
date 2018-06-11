<?php 
	include "conexion.php";
	$estudiante = $_GET['estudiante'];
	$puntuacion = $_GET['puntuacion'];
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

	session_start();

  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  $consultaNombre = "SELECT idpuntuacionesaltas FROM puntuacionesaltas WHERE nombreEstudiante = '".$estudiante."' and idioma1 = '".$idioma1."' and idioma2 = '".$idioma2."' LIMIT 1";
  $resultadoNombre = mysqli_query( $conexion, $consultaNombre );
  $resultadoNombreEstudiante = mysqli_fetch_array( $resultadoNombre );
  $NombreEstudiante = $resultadoNombreEstudiante['idpuntuacionesaltas'];
  if($NombreEstudiante != null){
    $consulta = "UPDATE puntuacionesaltas SET puntuacion = ".$puntuacion." WHERE idpuntuacionesaltas = '".$NombreEstudiante."' ";
  }
  else{
    $consulta = "INSERT INTO puntuacionesaltas(nombreEstudiante, puntuacion, idioma1, idioma2) values('".$estudiante."', ".$puntuacion.", '".$idioma1."', '".$idioma2."')";
  }
  

  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  mysqli_close( $conexion );      
	
	session_destroy();
	header("location: ../index.php");
?>