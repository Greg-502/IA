<?php
  
  session_start();
  $idioma = $_SESSION['idioma'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Ajustes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet"><!--
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon"/>-->
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
</head>
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
</style>
<body onload="idioma(<?php echo $idioma ?>)">
<div class="container">
  <div class="row">
    <header class="col-md-10 col-md-offset-1">
      <h1 align="center" id="encabezado">AJUSTES</h1>
    </header>
    <div class="col-md-offset-2"></div>
  </div>

  <br>
  <br>

  <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >K'iche' - Inglés</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check1" onclick="activar1()">
    </div>
 </div>

<br>

  <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >K'iche' - Español</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check2" onclick="activar2()">
    </div>
 </div>

<br>

 <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >Español - Inglés</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check3" onclick="activar3()">
    </div>
 </div>

 <br>

 <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >Ingles - K'iche'</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check4" onclick="activar4()">
    </div>
 </div>

 <br>

 <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >Español - K'iche'</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check5" onclick="activar5()">
    </div>
 </div>

 <br>

 <div class="row">
    <div class="col-xs-8 col-md-4 col-md-offset-2">
      <h1 >Ingles - Español</h1>
    </div> 
    <div class="col-xs-2 col-md-1 col-md-offset-1">
      <input type="checkbox" style="-webkit-transform: scale(4); margin-top: 38px;" id="check6" onclick="activar6()">
    </div>
 </div>

  <br>
  <br>

      <div class="row" style="margin-top: 10px;">
    <div class="hoverable col-md-3 col-md-offset-5">
      <a href="unidadesSeleccion.php"  id="uno">
        <h1 class="opcionesFormato" onclick="GuardarIdioma(<?php echo $_SESSION['idioma']; ?>)" align="center" id="setting"><span class="icon-floppy-disk"></span>
          Guardar
        </h1>
      </a>
    </div>

    <div class="hoverable col-md-3 ">
      <a href="unidadesSeleccion.php" id="uno">
        <h1 class="opcionesFormato" align="center" id="out"><span class="icon-cross"></span>
        Cancelar</h1>
      </a>
    </div>
  </div>

</div>

<script src="js/enable.js"> </script>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/Funcionalidad.js" type="text/javascript"></script>

</body>
</html>