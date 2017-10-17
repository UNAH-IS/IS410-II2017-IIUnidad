<?php
	include("../class/class-usuario.php");
	$usuario = new Usuario($_POST["txt-email"], $_POST["txt-password"]);
	$usuario->guardarUsuario();
?>
