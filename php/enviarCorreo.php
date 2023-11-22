<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    // Configuración de correo
    $destinatario = $correo;
    $asunto = "Registro Exitoso";
    $mensaje = "Hola $usuario,\n\nGracias por registrarte. \n\nSaludos,\nBitaBit";

    // Cabeceras para enviar el correo en formato HTML
    $cabeceras = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $cabeceras .= 'From: tu-correo@gmail.com' . "\r\n";

    // Enviar correo
    mail($destinatario, $asunto, $mensaje, $cabeceras);
}
?>
