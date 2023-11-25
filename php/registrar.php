<?php
include "bd.php";
$conexion = conexion();

session_start();
#Para los datos
$usuario=$_SESSION['usuario'];
$correo=$_SESSION['correo'];
$contraseña=$_SESSION['contraseña'];
/*
$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];
*/

$ssql = "insert into bitabit (usuario,correo,contraseña) values ('$usuario','$correo','$contraseña')";

if($conexion->query($ssql)) {
    echo "<p>Registro insertado con éxito</p>";
  } else {
    echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->error}</p>";
  }
  $conexion->close();
  header("Location: ../index.html");
?>  