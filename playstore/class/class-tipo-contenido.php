<?php

	class TipoContenido{

		private $codigoTipoContenido;
		private $tipoContenido;

		public function __construct($codigoTipoContenido,
					$tipoContenido){
			$this->codigoTipoContenido = $codigoTipoContenido;
			$this->tipoContenido = $tipoContenido;
		}
		public function getCodigoTipoContenido(){
			return $this->codigoTipoContenido;
		}
		public function setCodigoTipoContenido($codigoTipoContenido){
			$this->codigoTipoContenido = $codigoTipoContenido;
		}
		public function getTipoContenido(){
			return $this->tipoContenido;
		}
		public function setTipoContenido($tipoContenido){
			$this->tipoContenido = $tipoContenido;
		}
		public function __toString(){
			return "CodigoTipoContenido: " . $this->codigoTipoContenido . 
				" TipoContenido: " . $this->tipoContenido;
		}
		public static function obtenerListaTiposContenidos($conexion){
			$resultado = $conexion->ejecutarConsulta("SELECT codigo_tipo_contenido, tipo_contenido FROM tbl_tipos_contenido");
			while (($fila= $conexion->obtenerFila($resultado))){
				echo '<option value="'.$fila["codigo_tipo_contenido"].'">'.$fila["tipo_contenido"].'</option>';
			}
		}

	}
?>