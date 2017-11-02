<?php
	include("../class/class-conexion.php");
	$objConexion = new Conexion();
	switch ($_GET["accion"]) {
	 	case "guardar":
	 		include("../class/class-aplicacion.php");
	 		include("../class/class-empresa.php");
	 		include("../class/class-tipo-calificacion.php");
	 		include("../class/class-tipo-contenido.php");
	 		$aplicacion = new Aplicacion(
	 				null,
					$_POST["txt-nombre-aplicacion"],
					$_POST["txt-descripcion"],
					$_POST["txt-fecha-publicacion"],
					$_POST["txt-calificacion"],
					$_POST["slc-url-icono"],
					$_POST["categorias"],
					$_POST["txt-version"],
					new Empresa($_POST["slc-empresa"],null,null,null),
					new TipoCalificacion($_POST["slc-tipos-calificaciones"],null),
					new TipoContenido($_POST["slc-tipos-contenidos"],null)
			);

			$aplicacion->insertarRegistro($objConexion);

	 	break;
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
	 $objConexion->cerrarConexion();
?>