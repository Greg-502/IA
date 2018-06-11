<?php
  session_start();
  $idioma = $_SESSION['idioma'];
  $modulo = $_GET['modulo'];
  if( !(isset($_SESSION['palabra'])) ){
    $_SESSION['palabra'] = 1;
  }

  if(!(isset($_SESSION['puntuacion']))){
    $_SESSION['puntuacion'] = 0;
    $ValorPuntuacion = 0;
  }
  else{
    $ValorPuntuacion = $_SESSION['puntuacion'];
  }

  //Codigo para el Nombre del Modulo
  if($idioma == 1 || $idioma == 4){
    $modulonombre = "modulokiche";
    $modulonombre2 = "moduloingles";
  }
  if($idioma == 2 || $idioma == 5){
    $modulonombre = "modulokiche";
    $modulonombre2 = "moduloespanol";
  }
  if($idioma == 3 || $idioma == 6){
    $modulonombre = "moduloespanol";
    $modulonombre2 = "moduloingles";
  }
  include "BaseDatos/conexion.php";
  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  $consulta = "SELECT ".$modulonombre.", ".$modulonombre2." FROM modulo WHERE idmodulo = ".$modulo;
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    $nombreModulo = $columna[$modulonombre];
    $nombreModulo2 = $columna[$modulonombre2];
  }
  mysqli_close( $conexion );
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Unidades</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet"><!--
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon"/>-->
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
  <style type="text/css">
    .hoverable {
      -webkit-transform: scale(1);
      -webkit-transition: 300ms;
    }

    .hoverable:hover {
      filter: drop-shadow(0px 0px 12px rgba(0,0,0,.5));
      -webkit-transform: scale(1);
      -webkit-transition: 300ms;
    }

    .hoverable2 {
      -webkit-transition: 5s;
    }

    .hoverable2:hover {
      filter: drop-shadow(0px 10px 20px rgba(0,0,0,.0));
      -webkit-transition: 1s;
    }
  </style>
</head>
<body onload="ModuloAleatorio(<?php echo $idioma.", ". $modulo.", ".$_SESSION['palabra'] ?>,false,<?php echo $ValorPuntuacion; ?>)">
  <div class="container">
  <div class="row">
    <header class="col-md-10 col-md-offset-1">
        <h1 align='center' id='encabezado'> 
            <a href="unidadesSeleccion.php" class="icon-home IconoBotones"></a>
            <?php echo "  ".$nombreModulo." / ".$nombreModulo2."  " ?>
        </h1>
        <br>
    </header>
    <div class="col-md-offset-2"></div>
  </div>
  <div class="col-md-6 col-md-offset-1" align="center" style="padding: 0px">
    <div id="mensaje">
      <!-- Codigo para el Mensaje para el Usuario -->
      <p class="" style="margin-left: 10px; color: black; font-size: 20px; text-align: left; margin-top:-20px;"> SELECCIONA LA PALABRA CORRECTA </p>
    </div>
  </div>
</div>
  <div id="palabra" class="row" style="margin-top: 0px;">
  </div>

<div class="container">
    <div class="row col-md-10 col-md-offset-1">
      <div class="col-md-12">
        <div class="col-md-6"> 
          <h2 id="pun" style="margin-bottom: 0px;">  <?php echo " ".$ValorPuntuacion; ?> Pts </h2>
          <h4 style="color:black; margin-top: 0px;"> <?php echo $_SESSION['user']; ?> </h4>
            
          
        </div>
        <div class="col-md-6"><h3 align="left" style="color: black;" ></h3>
          <h1 align="right" style="color: black;">
            <label id="progreso"> 0% completado </label>
          </h1>
        </div>
        
      </div>
      <div class="col-md-12">
        <div class="progress">
          <div id="barra" class="progress-bar progress-bar-success" role="progressbar"
               aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
               style="width: 0%"><!--
            <span class="sr-only">100% completado (éxito)</span>-->
          </div>
        </div>
      </div>
          
      
  </div>
</div>

  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>