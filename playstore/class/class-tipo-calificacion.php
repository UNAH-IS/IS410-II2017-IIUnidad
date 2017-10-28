<?php

	class TipoCalificacion{

		private $codigoTipoCalificacion;
		private $nombreTipoCalificacion;

		public function __construct($codigoTipoCalificacion,
					$nombreTipoCalificacion){
			$this->codigoTipoCalificacion = $codigoTipoCalificacion;
			$this->nombreTipoCalificacion = $nombreTipoCalificacion;
		}
		public function getCodigoTipoCalificacion(){
			return $this->codigoTipoCalificacion;
		}
		public function setCodigoTipoCalificacion($codigoTipoCalificacion){
			$this->codigoTipoCalificacion = $codigoTipoCalificacion;
		}
		public function getNombreTipoCalificacion(){
			return $this->nombreTipoCalificacion;
		}
		public function setNombreTipoCalificacion($nombreTipoCalificacion){
			$this->nombreTipoCalificacion = $nombreTipoCalificacion;
		}
		public function __toString(){
			return "CodigoTipoCalificacion: " . $this->codigoTipoCalificacion . 
				" NombreTipoCalificacion: " . $this->nombreTipoCalificacion;
		}

		public static function obtenerListaTiposCalificaciones($conexion){
			$resultado = $conexion->ejecutarConsulta("select codigo_tipo_calificacion, nombre_caliificacion from tbl_tipos_calificaciones");

			while (($fila=$conexion->obtenerFila($resultado))){
				echo '<option value="'.$fila["codigo_tipo_calificacion"].'">'.$fila["nombre_caliificacion"].'</option>';
			}
		}
	}
?>