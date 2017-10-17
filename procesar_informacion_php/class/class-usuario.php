<?php

	class Usuario{

		private $usuario;
		private $password;

		public function __construct($usuario,
					$password){
			$this->usuario = $usuario;
			$this->password = $password;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function __toString(){
			return "Usuario: " . $this->usuario . 
				" Password: " . $this->password;
		}

		public function guardarUsuario(){
			$archivo = fopen("../data/archivo.csv","a+"); //r: read, w: write, a+: Append
			fwrite($archivo,  $this->usuario . "," . $this->password."\n");
			fclose($archivo);
		}
	}
?>