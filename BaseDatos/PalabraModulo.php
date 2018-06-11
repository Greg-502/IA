<?php
	include "conexion.php";
	$idioma = $_GET['idioma'];
	$modulo = $_GET['modulo'];
	$idpalabra = $_GET['palabra'];
	$idpalabra2 = $idpalabra - 1;
	$limit = $idpalabra2.",1";//$idpalabra;
	$puntos = $_GET['puntos'];

	session_start();
	$puntuacion = $_SESSION['puntuacion'] + $puntos;
	$_SESSION['palabra'] = $idpalabra;
	$_SESSION['puntuacion'] = $puntuacion;

	if($idioma == 1 ){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioKiche";
		$vocabulario1 = "VocabularioKiche";
		$palabra1 = "palabraKiche";
		$sonido1 = "sonidoKiche";
		$imagen1 = "imagenKiche";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioIngles";
		$vocabulario = "vocabularioIngles";
		$palabra = "palabraIngles";
		$sonido = "sonidoIngles";
		$imagen = "imagenIngles";
	}
	if($idioma == 2){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioKiche";
		$vocabulario1 = "VocabularioKiche";
		$palabra1 = "palabraKiche";
		$sonido1 = "sonidoKiche";
		$imagen1 = "imagenKiche";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioEspanol";
		$vocabulario = "vocabularioEspanol";
		$palabra = "palabraEspanol";
		$sonido = "sonidoEspanol";
		$imagen = "imagenEspanol";
	}
	if($idioma == 3){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioEspanol";
		$vocabulario1 = "vocabularioEspanol";
		$palabra1 = "palabraEspanol";
		$sonido1 = "sonidoEspanol";
		$imagen1 = "imagenEspanol";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioIngles";
		$vocabulario = "vocabularioIngles";
		$palabra = "palabraIngles";
		$sonido = "sonidoIngles";
		$imagen = "imagenIngles";
	}
	if($idioma == 4){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioIngles";
		$vocabulario1 = "vocabularioIngles";
		$palabra1 = "palabraIngles";
		$sonido1 = "sonidoIngles";
		$imagen1 = "imagenIngles";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioKiche";
		$vocabulario = "vocabularioKiche";
		$palabra = "palabraKiche";
		$sonido = "sonidoKiche";
		$imagen = "imagenKiche";
	}
	if($idioma == 5){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioEspanol";
		$vocabulario1 = "vocabularioEspanol";
		$palabra1 = "palabraEspanol";
		$sonido1 = "sonidoEspanol";
		$imagen1 = "imagenEspanol";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioKiche";
		$vocabulario = "vocabularioKiche";
		$palabra = "palabraKiche";
		$sonido = "sonidoKiche";
		$imagen = "imagenKiche";
	}
	if($idioma == 6){
		//Primer Vocabulario
		$idvocabulario1 ="idvocabularioIngles";
		$vocabulario1 = "vocabularioIngles";
		$palabra1 = "palabraIngles";
		$sonido1 = "sonidoIngles";
		$imagen1 = "imagenIngles";

		//Segundo Vocabulario
		$idvocabulario ="idvocabularioEspanol";
		$vocabulario = "vocabularioEspanol";
		$palabra = "palabraEspanol";
		$sonido = "sonidoEspanol";
		$imagen = "imagenEspanol";
	}
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! no se ha podido conectar a la base de datos" );

	//TODO EL CODIGO PARA LA IMAGEN DE LA PALABRA
		// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT ".$vocabulario.".".$idvocabulario.", ".$vocabulario.".".$palabra.", ".$vocabulario.".".$sonido.", ".$vocabulario.".".$imagen.", modulo.unidad, modulolenguas.idmodulo, modulo.moduloespanol, modulo.moduloingles FROM modulolenguas 
INNER JOIN vocabularioIngles ON vocabularioIngles.idvocabularioIngles = modulolenguas.idvocabularioIngles 
INNER JOIN vocabularioEspanol ON vocabularioEspanol.idvocabularioEspanol = modulolenguas.idvocabularioEspanol 
INNER JOIN VocabularioKiche ON vocabulariokiche.idvocabulariokiche = modulolenguas.idvocabulariokiche
INNER JOIN modulo ON modulo.idmodulo = modulolenguas.idmodulo WHERE modulolenguas.idmodulo = ".$modulo." ORDER BY modulolenguas.idmodulolenguas ASC LIMIT ".$limit;
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// TODO EL CODIGO PARA LOS MODULOS ALEATORIOS
// /*

	$numeroRandom1 = Rand(($modulo*10)-9,$modulo*10);
	$numeroRandom2 = Rand(($modulo*10)-9,$modulo*10);
	$numeroRandom3 = Rand(($modulo*10)-9,$modulo*10);
	$numeroRandom4 = Rand(($modulo*10)-9,$modulo*10);
	while($numeroRandom1 == $numeroRandom2 || $numeroRandom1 == $numeroRandom3 || $numeroRandom1 == $numeroRandom4){
		$numeroRandom1 = Rand(($modulo*10)-9,$modulo*10);
	}
	while($numeroRandom2 == $numeroRandom1 || $numeroRandom2 == $numeroRandom3 || $numeroRandom2 == $numeroRandom4){
		$numeroRandom2 = Rand(($modulo*10)-9,$modulo*10);
	}
	while($numeroRandom3 == $numeroRandom1 || $numeroRandom3 == $numeroRandom2 || $numeroRandom3 == $numeroRandom4){
		$numeroRandom3 = Rand(($modulo*10)-9,$modulo*10);
	}
	while($numeroRandom4 == $numeroRandom1 || $numeroRandom4 == $numeroRandom2 || $numeroRandom4 == $numeroRandom3){
		$numeroRandom4 = Rand(($modulo*10)-9,$modulo*10);
	}

	// establecer y realizar consulta. guardamos en variable.
	$consulta2 = " SELECT ".$vocabulario.".".$idvocabulario.", ".$vocabulario.".".$palabra.", ".$vocabulario.".".$sonido.", modulo.unidad, modulolenguas.idmodulo, modulo.moduloespanol, modulo.moduloingles FROM modulolenguas 
INNER JOIN vocabularioIngles ON vocabularioIngles.idvocabularioIngles = modulolenguas.idvocabularioIngles 
INNER JOIN vocabularioEspanol ON vocabularioEspanol.idvocabularioEspanol = modulolenguas.idvocabularioEspanol 
INNER JOIN VocabularioKiche ON vocabulariokiche.idvocabularioKiche = modulolenguas.idvocabularioKiche
INNER JOIN modulo ON modulo.idmodulo = modulolenguas.idmodulo 
WHERE modulo.idmodulo = ".$modulo." and ".$vocabulario.".".$idvocabulario." = ".$numeroRandom1." OR ".$vocabulario.".".$idvocabulario." = ".$numeroRandom2." OR ".$vocabulario.".".$idvocabulario." = ".$numeroRandom3." OR ".$vocabulario.".".$idvocabulario." = ".$numeroRandom4;
	$numeroRandom = Rand(1,4);
	$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	echo "<div id='opciones' class='col-md-6 col-md-offset-1' style='margin-top:-45px;'>";
	$palabraVerdadera = mysqli_fetch_array( $resultado );
	$palabraVerdaderaLetra = $palabraVerdadera[$palabra];
  	for($i = 1; $i <= 4 ; $i++){
  		if($i == $numeroRandom){
  			echo "
  			<div class='col-md-6' align='left' style='margin-right: -80px; margin-bottom: -25px;'>
		    <div class='col-md-9 col-md-offset-3'>
		    
		      <a href='#' onclick='AnalisisdeSeleccion(true, ".$idioma.", ".$modulo.", ".$idpalabra.", ".$puntuacion.")'>

		        <img class='img-responsive hoverable' src='image/bloque.png'  onmouseover='playclip(".$i.");'>
		        <div class='col-md-12'>
		         <h2 style='margin-top: -45px; margin-left: 5px; color: black; font-size: 22px;'>".$palabraVerdaderaLetra."</h2>
		        </div>
		      </a>
		    </div>
	    	</div>
	    	<audio id='audio".$i."'>
	    		<source src=\"words/Unidad-".$palabraVerdadera['unidad']."/".$palabraVerdadera['idmodulo']."-".$palabraVerdadera['moduloingles']."/".$palabraVerdadera[$sonido]."\">
	    	</audio>
	    	";
  		}
  		else{
	  		$columna2 = mysqli_fetch_array( $resultado2 );
	  		if($palabraVerdaderaLetra != $columna2[$palabra]){
		  			echo "
		  			<div class=' col-md-6' align='left' style='margin-right: -80px; margin-bottom: -25px;'>
				    <div class='col-md-9 col-md-offset-3'>
				    
				      <a href='#' onclick='AnalisisdeSeleccion(false, ".$idioma.", ".$modulo.", ".$idpalabra.", ".$puntuacion.")'>
				        <img class='img-responsive hoverable' src='image/bloque.png' onmouseover='playclip(".$i.");'>
				        <div class='col-md-12'>
				          <h2 style='margin-top: -45px; margin-left: 5px; color: black; font-size: 22px;'>".$columna2[$palabra]."</h2>
				        </div>
				      </a>
				      
				    </div>
			    	</div>
			    	<audio id='audio".$i."'>
			    		<source src=\"words/Unidad-".$columna2['unidad']."/".$columna2['idmodulo']."-".$columna2['moduloingles']."/".$columna2[$sonido]."\">
			    	</audio>
			    	";
	  		}	
	  		else{
	  			$columna2 = mysqli_fetch_array( $resultado2 );
	  			if($palabraVerdaderaLetra != $columna2[$palabra]){
		  			echo "
		  			<div class='col-md-6' align='left' style='margin-right: -80px; margin-bottom: -25px;'>
				    <div class='col-md-9 col-md-offset-3'>
				    
				      <a href='#' onclick='AnalisisdeSeleccion(false, ".$idioma.", ".$modulo.", ".$idpalabra.", ".$puntuacion.")'>
				        <img class='img-responsive hoverable' src='image/bloque.png' onmouseover='playclip(".$i.");'>
				        <div class='col-md-12'>
				          <h2 style='margin-top: -45px; margin-left: 5px; color: black; font-size: 22px;'>".$columna2[$palabra]."</h2>
				        </div>
				      </a>
				      
				    </div>
			    	</div>
			    	<audio id='audio".$i."'>
			    		<source src=\"words/Unidad-".$columna2['unidad']."/".$columna2['idmodulo']."-".$columna2['moduloingles']."/".$columna2[stripslashes($sonido)]."\">
			    	</audio>
			    	";
	  			}
	  		}
  		}
  		
  	}
  	echo "</div>";

  	$consulta3 = "SELECT ".$vocabulario1.".".$idvocabulario1.", ".$vocabulario1.".".$palabra1.", ".$vocabulario1.".".$sonido1.", ".$vocabulario1.".".$imagen1.", modulo.unidad, modulo.moduloespanol FROM modulolenguas 
INNER JOIN vocabularioIngles ON vocabularioIngles.idvocabularioIngles = modulolenguas.idvocabularioIngles 
INNER JOIN vocabularioEspanol ON vocabularioEspanol.idvocabularioEspanol = modulolenguas.idvocabularioEspanol 
INNER JOIN VocabularioKiche ON vocabulariokiche.idvocabulariokiche = modulolenguas.idvocabulariokiche
INNER JOIN modulo ON modulo.idmodulo = modulolenguas.idmodulo WHERE modulolenguas.idmodulo = ".$modulo." ORDER BY modulolenguas.idmodulolenguas ASC LIMIT ".$limit;

  	$resultado3 = mysqli_query( $conexion, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  	// Bucle while que recorre cada registro y muestra cada campo en la tabla.

	while ($columna = mysqli_fetch_array( $resultado3 ))
	{
		echo " 
		<div class='container'>
		<div class='col-md-4 row'>
	      <div class='col-md-12 col-md-offset-1' style='margin-top: -75px;'>
	        <img class='hoverable2 img-responsive' src='image/Unidad".$columna['unidad']."/".$columna['moduloespanol']."/".$columna[$imagen1]."'>
	        <center><h1>". $columna[$palabra1] ."</h1></center>
	      </div>
	    </div>
	    </div>
		";
	}

	// cerrar conexión de base de datos
//  */
	mysqli_close( $conexion );
?>
