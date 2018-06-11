<?php
  $modulo = $_GET['modulo'];
  session_start();
  $_SESSION['palabra'] = 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Modulo Completo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet"><!--
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon"/>-->
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  
  <style type="text/css">
    .hoverable {
      -webkit-transform: scale(1);
      -webkit-transition: 300ms;
    }

    .hoverable:hover {
      filter: drop-shadow(0px 10px 20px rgba(0,0,0,.5));
      -webkit-transform: scale(1.1);
      -webkit-transition: 300ms;
    }

    .hoverable2 {
      -webkit-transform: scale(1);
      -webkit-transition: 300ms;
      color: #000000;
    }

    h1.hoverable2:hover {
      filter: drop-shadow(0px 10px 20px rgba(0,0,0,.9));
      color: white;
      -webkit-transition: color 1s linear;
      -webkit-transform: scale(1.3);
      -webkit-transition: 300ms;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <header class="col-md-10 col-md-offset-1">
        <h1 align="center" id="encabezado">TUTOR VIRTUAL</h1>
      </header>
      <div class="col-md-offset-2"></div>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="col-md-12" style="margin-top: -10px;">
    <div class="col-md-3 col-md-offset-2">
      <img style="width: 100%" class="hoverable2 img-responsive" src="image/felicidad.png">
    </div>
    <div class="col-md-5">
      <h1 ><center> FELICIDADES </center></h1>
      <h1 style="color:#505050"><center> Modulo Completado </center></h1>

        <div class="hoverable col-md-12">
          <a href="modulos.php?modulo=<?php echo $modulo+1 ?>" id="uno">
            <h1 class="opcionesFormato" align="center" id="rank">
            <span class="icon-arrow-right2"></span>
            Siguiente Unidad
            </h1>
          </a>
        </div>
        <div class="hoverable col-md-12">
          <a href="modulos.php?modulo=<?php echo $modulo ?>" id="uno">
            <h1 class="opcionesFormato" align="center" id="out">
            <span class="icon-loop2"></span>
              Repetir Lección
            </h1>
          </a>
        </div>
        <div class="hoverable col-md-12" >
          <a href="unidadesSeleccion.php" id="uno">
            <h1 class="opcionesFormato" align="center" id="setting">
            <span class="icon-arrow-left2"></span>
              Regresar al Menú
            </h1>
          </a>
        </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>