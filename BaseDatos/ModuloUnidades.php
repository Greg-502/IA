<?php
	include "conexion.php";
	$unidad = $_GET['unidad'];
	$idioma = $_GET['idioma'];
	if($idioma == 1 || $idioma == 3){
		$modulo = "moduloingles";
	}
	if($idioma == 2 || $idioma == 6){
		$modulo = "moduloespanol";
	}
	if($idioma == 4 || $idioma == 5){
		$modulo = "modulokiche";
	}
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM modulo WHERE unidad = ".$unidad;
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	echo "<div class='col-md-12 col-md-offset-1'>";
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "
		<div class='col-md-5 hoverable'>
	      <a href='modulos.php?modulo=".$columna['idmodulo']."'>
	        <img class='modulosImagen img-responsive' src='image/unidad".$unidad."/".$columna['imagenmodulo']."'>
	        <div class='col-md-12'>
	          <h2 style='margin-top: -33px; text-align: center; color: black; font-size: 1.3em;'>".$columna[$modulo]."</h2>
	        </div>
	      </a>
	    </div>
		";
	}
	echo "</div>";
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>