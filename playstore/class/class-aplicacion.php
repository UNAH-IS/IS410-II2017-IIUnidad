<?php

	class Aplicacion{

		private $codigoAplicacion;
		private $nombreAplicacion;
		private $descripcion;
		private $fechaPubicacion;
		private $calificacionPromedio;
		private $urlIcono;
		private $categorias;
		private $version;
		private $empresa;
		private $tipoCalificacion;
		private $tipoContenido;

		public function __construct($codigoAplicacion,
					$nombreAplicacion,
					$descripcion,
					$fechaPubicacion,
					$calificacionPromedio,
					$urlIcono,
					$categorias,
					$version,
					$empresa,
					$tipoCalificacion,
					$tipoContenido){
			$this->codigoAplicacion = $codigoAplicacion;
			$this->nombreAplicacion = $nombreAplicacion;
			$this->descripcion = $descripcion;
			$this->fechaPubicacion = $fechaPubicacion;
			$this->calificacionPromedio = $calificacionPromedio;
			$this->urlIcono = $urlIcono;
			$this->categorias = $categorias;
			$this->version = $version;
			$this->empresa = $empresa;
			$this->tipoCalificacion = $tipoCalificacion;
			$this->tipoContenido = $tipoContenido;
		}
		public function getCodigoAplicacion(){
			return $this->codigoAplicacion;
		}
		public function setCodigoAplicacion($codigoAplicacion){
			$this->codigoAplicacion = $codigoAplicacion;
		}
		public function getNombreAplicacion(){
			return $this->nombreAplicacion;
		}
		public function setNombreAplicacion($nombreAplicacion){
			$this->nombreAplicacion = $nombreAplicacion;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFechaPubicacion(){
			return $this->fechaPubicacion;
		}
		public function setFechaPubicacion($fechaPubicacion){
			$this->fechaPubicacion = $fechaPubicacion;
		}
		public function getCalificacionPromedio(){
			return $this->calificacionPromedio;
		}
		public function setCalificacionPromedio($calificacionPromedio){
			$this->calificacionPromedio = $calificacionPromedio;
		}
		public function getUrlIcono(){
			return $this->urlIcono;
		}
		public function setUrlIcono($urlIcono){
			$this->urlIcono = $urlIcono;
		}
		public function getCategorias(){
			return $this->categorias;
		}
		public function setCategorias($categorias){
			$this->categorias = $categorias;
		}
		public function getVersion(){
			return $this->version;
		}
		public function setVersion($version){
			$this->version = $version;
		}
		public function getEmpresa(){
			return $this->empresa;
		}
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}
		public function getTipoCalificacion(){
			return $this->tipoCalificacion;
		}
		public function setTipoCalificacion($tipoCalificacion){
			$this->tipoCalificacion = $tipoCalificacion;
		}
		public function getTipoContenido(){
			return $this->tipoContenido;
		}
		public function setTipoContenido($tipoContenido){
			$this->tipoContenido = $tipoContenido;
		}
		public function __toString(){
			return "CodigoAplicacion: " . $this->codigoAplicacion . 
				" NombreAplicacion: " . $this->nombreAplicacion . 
				" Descripcion: " . $this->descripcion . 
				" FechaPubicacion: " . $this->fechaPubicacion . 
				" CalificacionPromedio: " . $this->calificacionPromedio . 
				" UrlIcono: " . $this->urlIcono . 
				" Categorias: " . $this->categorias . 
				" Version: " . $this->version . 
				" Empresa: " . $this->empresa . 
				" TipoCalificacion: " . $this->tipoCalificacion . 
				" TipoContenido: " . $this->tipoContenido;
		}


		public function insertarRegistro($conexion){
			$sql = sprintf(
					"INSERT INTO tbl_aplicaciones(codigo_empresa, codigo_tipo_calificacion,
					 codigo_tipo_contenido, nombre_aplicacion, version, 
					 calificacion, descripcion, fecha_publicacion, cantidad_instalaciones,url_icono) 
					 VALUES (%s,%s,%s,'%s','%s',%s,'%s','%s',%s,'%s')",
					mysqli_real_escape_string($this->empresa->getCodigoEmpresa()),
					mysqli_real_escape_string($this->tipoCalificacion->getCodigoTipoCalificacion()),
					mysqli_real_escape_string($this->tipoContenido->getCodigoTipoContenido()),
					mysqli_real_escape_string($this->nombreAplicacion),
					mysqli_real_escape_string($this->version),
					mysqli_real_escape_string($this->calificacionPromedio),
					mysqli_real_escape_string($this->descripcion),
					mysqli_real_escape_string($this->fechaPubicacion),
					0,			
					mysqli_real_escape_string($this->urlIcono)
			);
			echo $sql;
			///mysqli_real_escape_string($this->categorias),
			$resultado = $conexion->ejecutarConsulta($sql);
		}
	}
?>