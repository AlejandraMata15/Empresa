<?php
include "bd.php";
$conexion = conexion();

//Para los datos
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

// Consulta SQL
$consulta = "SELECT * FROM bitabit WHERE usuario = '$usuario' AND contraseña='$contraseña'";
$resultado = $conexion->query($consulta);

// Verificar si se encontró un resultado
if ($resultado->num_rows > 0) {
    // El usuario existe
    header("Location: ../pages/inicio.html");
} else {
    // El usuario no existe
    echo "<script>
              alert('El usuario no existe, intente de nuevo.');
              window.history.go(-1); // Regresar a la pantalla previa
          </script>";
}

// Cerrar la conexión
$conexion->close();
?>
