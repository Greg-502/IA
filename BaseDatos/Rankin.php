<?php
  include "conexion.php";
  $idioma = $_GET['idioma'];
  if($idioma == 1){
    $idioma1 = "kiche";
    $idioma2 = "Ingles";
  }
  if($idioma == 2){
    $idioma1 = "kiche";
    $idioma2 = "Espanol";
  }
  if($idioma == 3){
    $idioma1 = "Espanol";
    $idioma2 = "Ingles";
  }
  if($idioma == 4){
    $idioma1 = "Ingles";
    $idioma2 = "kiche";
  }
  if($idioma == 5){
    $idioma1 = "Espanol";
    $idioma2 = "kiche";
  }
  if($idioma == 6){
    $idioma1 = "Ingles";
    $idioma2 = "Espanol";
  }


  // creación de la conexión a la base de datos con mysql_connect()
  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
  // Selección del a base de datos a utilizar
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  // establecer y realizar consulta. guardamos en variable.
  $consulta = "SELECT nombreEstudiante, puntuacion FROM puntuacionesaltas WHERE idioma1 = '".$idioma1."' and idioma2 = '".$idioma2."' LIMIT 10";

  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
  echo "
  <table>
        <thead>
          <tr>
            <th width='500'> <h2> Nombre </h2> </th>
            <th width='200'> <h2> Puntuacion </h2> </th>
          </tr>
        </thead>
        <tbody>";
  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    echo "
      <tr>
        <td> <h2> ".$columna['nombreEstudiante']."</h2> </td>
        <td> <h2> ".$columna['puntuacion']." pts </h2> </td>
      </tr>
    ";
  }
  echo "</tbody></table>";
  // cerrar conexión de base de datos
  mysqli_close( $conexion );      




      
      