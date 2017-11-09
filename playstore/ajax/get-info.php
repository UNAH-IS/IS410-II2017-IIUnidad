<?php
	include("../class/class-conexion.php");
	$objConexion = new Conexion();
	switch ($_GET["accion"]) {
	 	case "obtener_categorias":
	 		include("../class/class-categoria.php");
			Categoria::obtenerListaCategorias($objConexion);			
	 	break;
	 	case "obtener_empresas":
			include("../class/class-empresa.php"); 
			Empresa::obtenerListaEmpresas($objConexion);		
	 		break;
	 	case "obtener_tipos_calificaciones":
	 		include("../class/class-tipo-calificacion.php"); 
	 		TipoCalificacion::obtenerListaTiposCalificaciones($objConexion);
	 	break;
	 	case "obtener_tipos_contenidos":
	 		include("../class/class-tipo-contenido.php"); 
	 		TipoContenido::obtenerListaTiposContenidos($objConexion);
	 	break;
	 	case "obtener-aplicaciones":
	 		include("../class/class-aplicacion.php"); 
	 		Aplicacion::obtenerListaAplicaciones($objConexion);
	 	break;
	 	case "obtener-aplicacion":
	 		include("../class/class-aplicacion.php"); 
	 		Aplicacion::obtenerDetalleAplicaciones($objConexion,$_POST["codigo-aplicacion"]);	 		
	 	break;
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
	 $objConexion->cerrarConexion();
?>