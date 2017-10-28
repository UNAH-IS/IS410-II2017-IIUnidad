<?php

	class Categoria{

		private $codigoCategoria;
		private $nombreCategoria;

		public function __construct($codigoCategoria,
					$nombreCategoria){
			$this->codigoCategoria = $codigoCategoria;
			$this->nombreCategoria = $nombreCategoria;
		}
		public function getCodigoCategoria(){
			return $this->codigoCategoria;
		}
		public function setCodigoCategoria($codigoCategoria){
			$this->codigoCategoria = $codigoCategoria;
		}
		public function getNombreCategoria(){
			return $this->nombreCategoria;
		}
		public function setNombreCategoria($nombreCategoria){
			$this->nombreCategoria = $nombreCategoria;
		}
		public function __toString(){
			return "CodigoCategoria: " . $this->codigoCategoria . 
				" NombreCategoria: " . $this->nombreCategoria;
		}

		public function insertarCategoria(){

		}

		public function actualizarCategoria(){
			
		}

		public function eliminarCategoria(){
			
		}

		public static function obtenerListaCategorias($objConexion){
			$resultado = $objConexion->ejecutarConsulta("SELECT codigo_categoria,nombre_categoria FROM tbl_categorias");

			while (($fila=$objConexion->obtenerFila($resultado))){
				echo '<label><input type="checkbox" name="categorias[]" value="'.$fila["codigo_categoria"].'">'.$fila["nombre_categoria"].'</label><br>';
			}
		}
	}
?>