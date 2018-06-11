<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Ranking</title>
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
      filter: drop-shadow(0px 10px 20px rgba(0,0,0,.8));
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
    table thead{
      border-bottom: 1px solid #505050;
    }

  </style>
</head>
<body onload="tablaRankin(<?php echo $_SESSION['idioma'] ?>)">
  <div class="row">
    <header class="col-md-8 col-md-offset-2">
      <h1 align="center" id="encabezado">LOS MAS DESTACADOS</h1>
    </header>
    <div class="col-md-offset-2"></div>
  </div>

  <div class="col-md-12">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="tablaRankin">
    </div>
    <div class="col-md-2"></div>
  </div>

<br>
<br>
<div class="col-md-12">
  <div class="col-md-4 col-md-offset-2">
      <a href="BaseDatos/CerrarSesion.php?estudiante=<?php echo $_SESSION['user'] ?>&puntuacion=<?php echo $_SESSION['puntuacion'] ?>&idioma=<?php echo $_SESSION['idioma'] ?>" id="uno">
        <h1 class="opcionesFormato hoverable" align="center" id="out"><span class="icon-cross"></span>
        
        Salir</h1>
      </a>
    </div>
    <div class="col-md-4 ">
      <a href="unidadesSeleccion.php" id="uno">
        <h1 class="opcionesFormato hoverable" align="center" id="setting"><span class="icon-arrow-left2"></span>
        
        Regresar</h1>
      </a>
    </div>
    <div class="col-md-2"></div>
</div>
    
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>