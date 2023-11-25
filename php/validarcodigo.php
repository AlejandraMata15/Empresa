<?php
	include_once 'correo.php';
	

	if($_SERVER['REQUEST_METHOD'] ==='POST'){
		$codigo_generado = $codigo;
		$codigo_usuario = $_POST['codigo'];

		echo "El codigo generado es: ",$codigo_generado;
		echo "El codigo que ingreso el usuario es: ",$codigo_usuario;
	
		validar_codigo($codigo_generado, $codigo_usuario);
	}

	

	function validar_codigo($codigo_generado, $codigo_usuario){
		if($codigo_generado === $codigo_usuario){
			echo("Codigo correcto, ya estas registrado");
		}else{
			echo("Codigo incorrecto");
		}
	}
?>