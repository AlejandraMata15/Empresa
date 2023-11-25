<?php
session_start();
$seguro = $_SESSION['num'];
$valIngresado=$_POST["verificacion"];

if ($seguro == $valIngresado) {
    echo "Son iguales";
    $_SESSION['usuario'] = $_SESSION['usu'];
    $_SESSION['correo'] = $_SESSION['cor'];
    $_SESSION['contraseña'] = $_SESSION['con'];

    echo "<script>
              alert('Registro exitoso');
          </script>";
    header("Location: registrar.php");
    exit(); // Asegúrate de salir del script después de redirigir
}else {
    echo "<script>
              alert('Código invalido');
          </script>";
    header("Location: ../pages/registro.html");
    exit(); // Asegúrate de salir del script después de redirigir
}
?>