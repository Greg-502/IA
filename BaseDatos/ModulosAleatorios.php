<?php
	include "conexion.php";
	$idioma = $_GET['idioma'];
	$modulo = $_GET['modulo'];
	if($idioma == 1 || $idioma == 3){
		$vocabulario = "vocabularioIngles";
		$palabra = "palabraIngles";
		$sonido = "sonidoIngles";
	}
	if($idioma == 2){
		$vocabulario = "vocabularioEspanol";
		$palabra = "palabraEspanol";
		$sonido = "sonidoEspanol";
	}
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = " SELECT ".$vocabulario.".".$palabra.", ".$vocabulario.".".$sonido." FROM modulolenguas 
INNER JOIN vocabularioIngles ON vocabularioIngles.idvocabularioIngles = modulolenguas.idvocabularioIngles 
INNER JOIN vocabularioEspanol ON vocabularioEspanol.idvocabularioEspanol = modulolenguas.idvocabularioEspanol 
INNER JOIN VocabularioKiche ON vocabulariokiche.idvocabulariokiche = modulolenguas.idvocabulariokiche
INNER JOIN modulo ON modulo.idmodulo = modulolenguas.idmodulo 
WHERE modulo.idmodulo = ".$modulo." LIMIT 3 ";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo " 
		<div class='row col-md-6' align='center' style='margin-top: 5px;'>
		    <div class='col-md-9 col-md-offset-3'>
		    
		      <a href='#' onclick='AnalisisdeSeleccion()'>
		        <img class='img-responsive hoverable' src='image/bloque.png'>
		        <div class='col-md-12'>
		          <h2 style='margin-top: -45px; margin-left: 10px; color: black; font-size: 25px;'>".$columna[$palabra]."</h2>
		        </div>
		      </a>
		      
		    </div>
	    </div>
		";
	}
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
