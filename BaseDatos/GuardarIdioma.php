<?php
	session_start();
	$idioma = $_GET['idioma'];
	$idiomaOriginal = $_GET['idiomaOriginal'];
	$puntuacion = $_SESSION['puntuacion'];
	$_SESSION['idioma'] = $idioma;

	include "conexion.php";
	$nombre = $_SESSION['user'];

	if($idiomaOriginal == 1){
    	$idioma1 = "kiche";
    	$idioma2 = "Ingles";
	}
	if($idiomaOriginal == 2){
	    $idioma1 = "kiche";
	    $idioma2 = "Espanol";
	}
	if($idiomaOriginal == 3){
    	$idioma1 = "Espanol";
    	$idioma2 = "Ingles";
  	}
  	if($idiomaOriginal == 4){
    	$idioma1 = "Ingles";
    	$idioma2 = "kiche";
  	}
  	if($idiomaOriginal == 5){
    	$idioma1 = "Espanol";
    	$idioma2 = "kiche";
  	}
  	if($idiomaOriginal == 6){
    	$idioma1 = "Ingles";
    	$idioma2 = "Espanol";
  	}


  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  $consultaNombre = "SELECT idpuntuacionesaltas FROM puntuacionesaltas WHERE nombreEstudiante = '".$nombre."' and idioma1 = '".$idioma1."' and idioma2 = '".$idioma2."' LIMIT 1";
  $resultadoNombre = mysqli_query( $conexion, $consultaNombre );
  $resultadoNombreEstudiante = mysqli_fetch_array( $resultadoNombre );
  $NombreEstudiante = $resultadoNombreEstudiante['idpuntuacionesaltas'];
  if($NombreEstudiante != null){
    $consulta = "UPDATE puntuacionesaltas SET puntuacion = ".$puntuacion." WHERE idpuntuacionesaltas = '".$NombreEstudiante."' ";
  }
  else{
    $consulta = "INSERT INTO puntuacionesaltas(nombreEstudiante, puntuacion, idioma1, idioma2) values('".$nombre."', ".$puntuacion.", '".$idioma1."', '".$idioma2."')";
  }
  

  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

  if($idioma == 1){
    	$idioma3 = "kiche";
    	$idioma4 = "Ingles";
	}
	if($idioma == 2){
	    $idioma3 = "kiche";
	    $idioma4 = "Espanol";
	}
	if($idioma == 3){
    	$idioma3 = "Espanol";
    	$idioma4 = "Ingles";
  	}
  	if($idioma == 4){
    	$idioma3 = "Ingles";
    	$idioma4 = "kiche";
  	}
  	if($idioma == 5){
    	$idioma3 = "Espanol";
    	$idioma4 = "kiche";
  	}
  	if($idioma == 6){
    	$idioma3 = "Ingles";
    	$idioma4 = "Espanol";
  	}

  $consultaPuntuacion = "SELECT puntuacion FROM puntuacionesaltas WHERE nombreEstudiante = '".$nombre."' and idioma1 = '".$idioma3."' and idioma2 = '".$idioma4."' LIMIT 1";

  $resultadoPuntuacion = mysqli_query( $conexion, $consultaPuntuacion );
  $columna = mysqli_fetch_array( $resultadoPuntuacion );
  $nuevaPuntuacion = $columna['puntuacion'];
  	if($nuevaPuntuacion == null){
  		$_SESSION['puntuacion'] = 0;
  	}
  	else{
  		$_SESSION['puntuacion'] = $nuevaPuntuacion;
  	}
  mysqli_close( $conexion );     
?>
