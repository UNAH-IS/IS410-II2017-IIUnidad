	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case 'login': 
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			
			break;
	default:
			
			break;
	}
	
?>