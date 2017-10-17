<?php
	include_once("class-persona.php");

	class Empleado extends Persona{

		private $numeroEmpleado;
		private $sueldo;

		public function __construct(
					$nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$telefono,
					$carrera,
					$cantidadClases,
					$numeroEmpleado,
					$sueldo){
			parent::__construct(
					$nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$telefono,
					$carrera,
					$cantidadClases);
			$this->numeroEmpleado = $numeroEmpleado;
			$this->sueldo = $sueldo;
		}
		public function getNumeroEmpleado(){
			return $this->numeroEmpleado;
		}
		public function setNumeroEmpleado($numeroEmpleado){
			$this->numeroEmpleado = $numeroEmpleado;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function __toString(){
			return parent::__toString()."NumeroEmpleado: " . $this->numeroEmpleado . 
				" Sueldo: " . $this->sueldo;
		}

		/*public function matricular(){
			parent::matricular();
			echo "Matriculando desde la clase empleado.";
		}*/
	}
?>