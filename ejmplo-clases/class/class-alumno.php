<?php
	include_once("class-persona.php");

	class Alumno extends Persona{

		private $cuenta;

		public function __construct(
					$nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$telefono,
					$carrera,
					$cantidadClases,
					$cuenta){
			parent::__construct(
						$nombre,
						$apellido,
						$edad,
						$genero,
						$identidad,
						$telefono,
						$carrera,
						$cantidadClases
				);
			$this->cuenta = $cuenta;
		}
		public function getCuenta(){
			return $this->cuenta;
		}
		public function setCuenta($cuenta){
			$this->cuenta = $cuenta;
		}
		public function __toString(){
			//return "Nombre:".$this->nombre.", Cuenta: " . $this->cuenta;
			return parent::__toString().", Cuenta: " . $this->cuenta;
		}

		public function matricular(){
			echo "Matriculando alumno";
		}
	}
?>