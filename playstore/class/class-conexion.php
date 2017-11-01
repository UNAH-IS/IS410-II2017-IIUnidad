<?php
	class Conexion{
		private $host = "localhost";
		private $usuario = "root";
		private $password = "asd.456";
		private $baseDatos = "playstore_db";
		private $puerto = 3306;
		private $link;

		public function __construct(){
			$this->link = mysqli_connect(
				$this->host,
				$this->usuario,
				$this->password,
				$this->baseDatos,
				$this->puerto
			);
		}

		public function ejecutarConsulta($sql){
			return mysqli_query($this->link, $sql);
		}

		public function obtenerFila($resultado){
			return mysqli_fetch_array($resultado);
		}

		public function cerrarConexion(){
			mysqli_close($this->link);
		}

		public function getLink(){
			return $this->link;
		}

		public function antiInyeccion($texto){
			return mysqli_real_escape_string($this->link, $texto);
		}
	}

?>