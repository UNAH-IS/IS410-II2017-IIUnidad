<?php

	class Empresa{

		private $codigoEmpresa;
		private $nombreEmpresa;
		private $direccion;
		private $telefono;

		public function __construct($codigoEmpresa,
					$nombreEmpresa,
					$direccion,
					$telefono){
			$this->codigoEmpresa = $codigoEmpresa;
			$this->nombreEmpresa = $nombreEmpresa;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
		}
		public function getCodigoEmpresa(){
			return $this->codigoEmpresa;
		}
		public function setCodigoEmpresa($codigoEmpresa){
			$this->codigoEmpresa = $codigoEmpresa;
		}
		public function getNombreEmpresa(){
			return $this->nombreEmpresa;
		}
		public function setNombreEmpresa($nombreEmpresa){
			$this->nombreEmpresa = $nombreEmpresa;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function __toString(){
			return "CodigoEmpresa: " . $this->codigoEmpresa . 
				" NombreEmpresa: " . $this->nombreEmpresa . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono;
		}

		//CreateReadUpdateDelete (CRUD)
		public function insertarEmpresa($conexion){

		}

		public function actualizarEmpresa($conexion){
			
		}

		public function eliminarEmpresa($conexion){
			
		}

		public static function obtenerListaEmpresas($conexion){
			$resultado = $conexion->ejecutarConsulta("select codigo_empresa, nombre_empresa, direccion, telefono from tbl_empresas");

			while (($fila=$conexion->obtenerFila($resultado))){
				echo '<option value="'.$fila["codigo_empresa"].'">'.$fila["nombre_empresa"].'</option>';
			}

		}
	}
?>