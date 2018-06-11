
<?php
  session_start();
  if(isset($_SESSION['user']) == false){
    if($_GET['usrname'] == null){
      $_SESSION['user'] = "Anonimo";
    }
    else{
      $_SESSION['user'] = $_GET['usrname'];
    }
  }
  if(!(isset($_SESSION['puntuacion']))){
    $_SESSION['puntuacion'] = 0;
  }
  $_SESSION['palabra'] = 1;

  if($_SESSION['idioma'] == 1){
      $idioma1 = "kiche";
      $idioma2 = "Ingles";
  }
  if($_SESSION['idioma'] == 2){
      $idioma1 = "kiche";
      $idioma2 = "Español";
  }
  if($_SESSION['idioma'] == 3){
      $idioma1 = "Español";
      $idioma2 = "Ingles";
    }
    if($_SESSION['idioma'] == 4){
      $idioma1 = "Ingles";
      $idioma2 = "kiche";
    }
    if($_SESSION['idioma'] == 5){
      $idioma1 = "Español";
      $idioma2 = "kiche";
    }
    if($_SESSION['idioma'] == 6){
      $idioma1 = "Ingles";
      $idioma2 = "Español";
    }
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
      font-size: 1.3em;
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
<!--
  <div class="row col-md-10 col-md-offset-2">
    <div class="col-md-4 col-md-offset-6" align="right">
      <h3>
        <?php echo "Usuario: ".$_SESSION['user']; ?>
      </h3>
      <h3>
        <?php echo " Puntos: ".$_SESSION['puntuacion']. " Pts."; ?>
      </h3>
    </div>
-->   
<div class="row col-md-10 col-md-offset-2">
    <div class="col-md-4" align="left">
      <h3>
        <?php echo $idioma1." / ".$idioma2; ?>
      </h3>
      
    </div>
    <div class="col-md-6" align="right">
      <h3>
        <?php echo $_SESSION['user']."   |   ".$_SESSION['puntuacion']. " Pts."; ?>
      </h3>
    </div>
    
  </div>
  <div class="row col-md-10 col-md-offset-2">
    <div class="col-md-4" style="background: url('image/board.png'); background-repeat: no-repeat; background-size: 100%; height: 540px;">
            <center>
        <a href="#" id="uno" onclick="MostrarUnidades(1,<?php echo $_SESSION['idioma'] ?>)">
          <h1 style="margin-top: 70px;" id="uno" class="hoverable2">Unidad 1</h1>
        </a>
        <a href="#" id="uno" onclick="MostrarUnidades(2,<?php echo $_SESSION['idioma'] ?>)">
          <h1 id="uno" class="hoverable2">Unidad 2</h1>
        </a>
        <a href="#" id="uno" onclick="MostrarUnidades(3,<?php echo $_SESSION['idioma'] ?>)">
          <h1 id="uno" class="hoverable2">Unidad 3</h1>
        </a>
        <a href="#" id="uno" onclick="MostrarUnidades(4,<?php echo $_SESSION['idioma'] ?>)">
          <h1 id="uno" class="hoverable2">Unidad 4</h1>
        </a>
      </center>

    </div>
    <div class="row col-md-6 col-md-offset-0" id="ModuloUnidad" style="margin-left: 65px;">
    </div>
  </div>
  <br>

  <br>
  <div class="container" style="margin-top: 10px;">
  <div class="row col-md-offset-1">
    <div class="hoverable col-md-3" style="margin-top: -85px;">
      <a href="Ranking.php" id="uno">
        <h1 class="opcionesFormato" align="center" id="rank">
        <span class="icon-stats-bars2"></span>
        Ranking</h1>
      </a>
    </div>
    <div class="hoverable col-md-3 col-md-offset-1" style="margin-top: -85px;" >
      <a href="BaseDatos/CerrarSesion.php?estudiante=<?php echo $_SESSION['user'] ?>&puntuacion=<?php echo $_SESSION['puntuacion'] ?>&idioma=<?php echo $_SESSION['idioma'] ?>" id="uno">
        <h1 class="opcionesFormato" align="center" id="out">
        <span class="icon-cross"></span>
        Salir</h1>
      </a>
    </div>
    <div class="hoverable col-md-3 col-md-offset-1"  style="margin-top: -85px;">
      <a href="ajustes.php" id="uno">
        <h1 class="opcionesFormato" align="center" id="setting">
        <span class="icon-equalizer"></span>
        Ajustes</h1>
      </a>
    </div>
  </div>
</div>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>