<?php
	$host="localhost";
	$usuario="root";
	$contrasena="asd.456";
	$baseDatos="playstore_db";
	$puerto="3306";
	$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos,$puerto);

	if (!$link){
		echo "No se pudo conectar";
		exit();
	}

	echo "Conexion exitosa"; 

	$resultado = mysqli_query( $link, "SELECT codigo_categoria, nombre_categoria FROM tbl_categorias");
	/*while ($objeto) 
			Si $objeto tiene valor es true
			Si $objeto es null lo interpreta como false.
	*/
	while(($fila = mysqli_fetch_array($resultado)))
		echo "<br>".$fila["nombre_categoria"];


	$resultadoInsert = mysqli_query($link, "INSERT INTO tbl_categorias(nombre_categoria) VALUES ('Nueva categoria')");

	mysqli_close($link);
	echo "<br>Conexion cerrada";
?>