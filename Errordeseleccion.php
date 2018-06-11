<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Error de Selección</title>
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
  </style>
</head>
<body>
  <div class="row">
    <header class="col-md-8 col-md-offset-2">
      <h1 align="center" id="encabezado">TUTOR VIRTUAL</h1>
    </header>
    <div class="col-md-offset-2"></div>
  </div>

<div class="row col-md-8 col-md-offset-2" style="margin-top: 5px">
    <div class="col-md-5">

      <div class="col-md-12">
        <img style="width: 100%" class="hoverable2" src="image/error imagen.jpg" />
      </div>
        
    </div>
    <div class="col-md-7">
      <div class="col-md-12">
        <h1 style="color:red"> <center> UPPS </center> </h1>
        <h1 style="color:black"> <center> TE EQUIVOCASTE </center> </h1>
      </div>

      <br>
      <br>
      <div class="col-md-12">
        <a href="unidades.php" id="uno">
          <h1 class="opcionesFormato hoverable" align="center" id="setting">
            Repetir
          </h1>
        </a>
      </div>

      <div class="col-md-12">
        <a href="unidades.php" id="uno">
          <h1 class="opcionesFormato hoverable" align="center" id="out">  
            Salir
          </h1>
        </a>
      </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/Funcionalidad.js" type="text/javascript"></script>
</body>
</html>