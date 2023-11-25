<?php
function conexion() {
    $server="localhost";
    $user="root";
    $pass="";
    $db="bitabit";
    $mysqli_conexion = new mysqli($server,$user,$pass,$db);
    if ($mysqli_conexion->connect_errno) {
      echo "Error de conexión con la base de datos: " . $mysqli_conexion->connect_errno;
      exit;
    }
    return $mysqli_conexion;
  }

?>