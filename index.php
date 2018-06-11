<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>SeleccionIdioma</title>
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
      <h1 align="center" id="encabezado">SELECCIÓN DE IDIOMA</h1><br>
    </header>
    <div class="col-md-offset-2"></div>
  </div>
   
  <div class="row" style="margin-top: -50px;">

    <br>
    <br>
    
    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=1" id="uno">
        <h1 class="opcionesFormato" align="center" id="out">
        <span class="icon-arrow-right2"></span>
        K'iche' - Inglés</h1>
      </a>
    </div>

    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=2" id="uno">
        <h1 class="opcionesFormato" align="center" id="rank">
        <span class="icon-arrow-right2"></span>
        K'iche' - Español</h1>
      </a>
    </div>

    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=3" id="uno">
        <h1 class="opcionesFormato" align="center" id="setting">
        <span class="icon-arrow-right2"></span>
        Español - Inglés</h1>
      </a>
    </div>

    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=4" id="uno">
        <h1 class="opcionesFormato" align="center" id="out">
        <span class="icon-arrow-right2"></span>
        Ingles - K'iche'</h1>
      </a>
    </div>

    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=5" id="uno">
        <h1 class="opcionesFormato" align="center" id="rank">
        <span class="icon-arrow-right2"></span>
        Español - K'iche'</h1>
      </a>
    </div>

    <div class="col-md-6 col-md-offset-3 hoverable">
      <a href="Ingreso.php?idioma=6" id="uno">
        <h1 class="opcionesFormato" align="center" id="setting">
        <span class="icon-arrow-right2"></span>
        Ingles - Español</h1>
      </a>
    </div>

  </div>
</div>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>