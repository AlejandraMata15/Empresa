<?php
include("./phpMailer/class.phpmailer.php");
include("./phpMailer/class.smtp.php");


function codigo($leng=6){
	$cadena = "0123456789";
	$codigo .="";

	for($i=0; $i<$leng; $i++){
		$codigo .= $cadena[rand(0,35)];
	}
	return $codigo;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$codigo=codigo();

	$email_user = "amatachavez493@gmail.com"; //Correo desde donde se mandan los correos
	$email_password = "vewhercdwuridmdr"; //Debes actualizar esta línea con tu información
	$the_subject = "Prueba de correo BitaBit";
	$address_to = "$email"; //Correo ingresado en el forms por el usuario, 
	$from_name = "BitaBit";
	$phpmailer = new PHPMailer();

	// ---------- datos de la cuenta de Gmail -------------------------------
	$phpmailer->Username = $email_user;
	$phpmailer->Password = $email_password; 
	//-----------------------------------------------------------------------
	// $phpmailer->SMTPDebug = 1;
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Host = "smtp.gmail.com"; // GMail
	$phpmailer->Port = 465;
	$phpmailer->IsSMTP(); // use SMTP
	$phpmailer->SMTPAuth = true;

	$phpmailer->setFrom($phpmailer->Username,$from_name);
	$phpmailer->AddAddress($address_to); // recipients email

	date_default_timezone_set('UTC'); //Universal Time Coordinated
	date_default_timezone_set("America/Mexico_City");

	$phpmailer->Subject = $the_subject;	
	$phpmailer->Body .="<h1 style='color:#3498db;'>Tu registro a BitaBit esta casi completo</h1>";
	$phpmailer->Body .="<h1 style='color:#3498db;'>Usuario:".$usuario."</h1>";
	$phpmailer->Body .="<h1 style='color:#3498db;'>Correo:".$email."</h1>";
	$phpmailer->Body .= "<p>Tu codigo de verificacion es:".$codigo."</p>";
	$phpmailer->Body .= "<p><b>Fecha: ".date("d-m-Y H:i:s")."</b></p>";
	$phpmailer->IsHTML(true);

	$phpmailer->Send();
}

?>