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
					$conexion->antiInyeccion($this->empresa->getCodigoEmpresa()),
					$conexion->antiInyeccion($this->tipoCalificacion->getCodigoTipoCalificacion()),
					$conexion->antiInyeccion($this->tipoContenido->getCodigoTipoContenido()),
					$conexion->antiInyeccion($this->nombreAplicacion),
					$conexion->antiInyeccion($this->version),
					$conexion->antiInyeccion($this->calificacionPromedio),
					$conexion->antiInyeccion($this->descripcion),
					$conexion->antiInyeccion($this->fechaPubicacion),
					0,			
					$conexion->antiInyeccion($this->urlIcono)
			);

			//Descomentar esto para depurar
			//echo $sql;
			//var_dump($this->categorias);
			$resultado = $conexion->ejecutarConsulta($sql);
			$id = $conexion->ultimoId();

			for ($i=0;$i<sizeof($this->categorias);$i++){
				$sql=sprintf(
					'INSERT INTO tbl_categorias_x_aplicacion(codigo_aplicacion, codigo_categoria) VALUES (%s,%s)',
					$conexion->antiInyeccion($id),
					$conexion->antiInyeccion($this->categorias[$i])
				); 
				$conexion->ejecutarConsulta($sql);
			}
			echo "<b>Registro almacenado con exito</b>";
		}

		public static function obtenerListaAplicaciones($conexion){
			$resultado = $conexion->ejecutarConsulta(
				'SELECT a.codigo_aplicacion, a.nombre_aplicacion, a.descripcion, 
						a.calificacion,a.url_icono, a.version,
						b.nombre_empresa,
				        c.tipo_contenido
				FROM tbl_aplicaciones a
				INNER JOIN tbl_empresas b 
				ON (a.codigo_empresa = b.codigo_empresa)
				INNER JOIN tbl_tipos_contenido c
				on (a.codigo_tipo_contenido = c.codigo_tipo_contenido)'
			);

			while (($fila = $conexion->obtenerFila($resultado))){
					echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">';
					echo '	<div class="well">';
					echo '		<img src="'.$fila["url_icono"].'" class="img-responsive">';
					echo '		<b>'.$fila["nombre_aplicacion"].'</b>';
					echo '		<span class="label label-primary">'.$fila["calificacion"].'</span> ';
					echo '		<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>';
					echo $fila["descripcion"] . '<br>';
					echo '		Versión: <b>'.$fila["version"].'</b><br>';
					echo '		Empresa: <b>'.$fila["nombre_empresa"].'</b>';
					echo '	</div>';
					echo '</div>';
			}
		}
	}
?>