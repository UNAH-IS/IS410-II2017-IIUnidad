	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case 'login': 
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			Usuario::verificarUsuario($conexion,$_POST["inputEmail"],
			$_POST["inputPassword"]);
			break;
	default:
			
			break;
	}
	
?>