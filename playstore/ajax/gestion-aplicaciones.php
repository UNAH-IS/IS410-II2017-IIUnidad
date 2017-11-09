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
	 	case "actualizar":
	 		include("../class/class-aplicacion.php");
	 		include("../class/class-empresa.php");
	 		include("../class/class-tipo-calificacion.php");
	 		include("../class/class-tipo-contenido.php");
	 		$aplicacion = new Aplicacion(
	 				$_POST["txt-codigo-aplicacion"],
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

			$aplicacion->actualizarRegistro($objConexion);
	 	break;
	 	case 'eliminar':
	 		include("../class/class-aplicacion.php");
	 		Aplicacion::eliminarAplicacion($objConexion, $_POST["codigo-aplicacion"]);
	 		echo "Aplicación eliminada";
	 	break;
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
	 $objConexion->cerrarConexion();
?>