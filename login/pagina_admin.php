<?php 
	session_start();
	if (!isset($_SESSION["codigo_usuario"])){
		header("Location: index.php");
	}

	/*if ($_SESSION["codigo_tipo_usuario"]!=2){
		header("Location: index.php");*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Página Admin</h1>
	<?php
			if (isset($_SESSION)){
				echo "Correo: ". $_SESSION["correo"];
				echo "Nombre: ". $_SESSION["nombre"];
			}
	?>
	<a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>