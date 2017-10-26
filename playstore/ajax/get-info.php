<?php
	include("../class/class-conexion.php");
	switch ($_GET["accion"]) {
	 	case "obtener_categorias":
	 		$objConexion = new Conexion();

			$resultado = $objConexion->ejecutarConsulta("SELECT codigo_categoria,nombre_categoria FROM tbl_categorias");

			while (($fila=$objConexion->obtenerFila($resultado))){
				echo '<label><input type="checkbox" name="categorias[]" value="'.$fila["codigo_categoria"].'">'.$fila["nombre_categoria"].'</label><br>';
			}
			
			$objConexion->cerrarConexion();
	 	break;
	 	case "obtener_empresas":
	 			//<option value="valor">Etiqueta</option>
	 		break;
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
?>