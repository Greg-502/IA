<?php
  session_start();
  if($_GET['idioma'] == null){
    $_SESSION['idioma'] = 1;
  }
  else{
    $_SESSION['idioma'] = $_GET['idioma'];
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>Ingreso</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet"><!--
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon"/>-->
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <style type="text/css">
  	input{
  	margin-top: 20px; 
		border: none; 
		background-color: transparent; 
		border-bottom: 2px solid black;
		outline: 0px;
  	}
  	.container2{
  		margin-top: -10px;
  	}
  	.hoverable {
      -webkit-transform: scale(1);
      -webkit-transition: 300ms;
    }

    .hoverable:hover {
      filter: drop-shadow(0px 10px 20px rgba(0,0,0,.5));
      -webkit-transform: scale(1.1);
      -webkit-transition: 300ms;
    }
  </style>
</head>
<body>
<div class="container">

<div class="row">
    <header class="col-md-10 col-md-offset-1">
      <h1 align="center" id="encabezado">INICIO</h1>
    </header>
 </div><br>

		<div class="row container2 container">
			<div class="inner2">
			<h1 class="col-md-2 col-md-offset-1">Nombre:</h1>
			<form class="col-md-4 col-md-offset-1" action="unidadesSeleccion.php" method="GET">
				<input class="col-md-12 col-md-offset-4" type="text" id="NombreEST" name="usrname" required style="-webkit-transform: scale(2);">
        <br>
        <br>
        <br>
        <br>
          <button class="opcionesFormato hoverable col-md-12" id="rank" type="submit" onclick="VerificarNombre(<?php echo $_SESSION['idioma']; ?>);"><span class="icon-arrow-right2"></span> Iniciar </button>
			</form>
			<!--
			<input class="col-md-4 col-md-offset-2" type="text" name="" style="-webkit-transform: scale(2);">-->
			</div>
		</div>

		<div class="row">
		    <div class="row">
		    <div class="hoverable col-md-4 col-md-offset-4">
		      <a href="index.php" id="uno">
		        <h1 class="opcionesFormato" align="center" id="out">
		        <span class="icon-cross"></span>
		         Salir
            </h1>
		      </a>
		    </div>
			</div>
		</div>
	</div>
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>