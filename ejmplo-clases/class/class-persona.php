<?php

	class Persona{

		protected $nombre;
		private $apellido;
		private $edad;
		private $genero;
		private $identidad;
		private $telefono;
		private $carrera; //Utilizar composicion, es decir asignar a este atributo otro objeto que fue creado a partir de una clase previamente definida
		private $cantidadClases;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$telefono,
					$carrera,
					$cantidadClases){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->genero = $genero;
			$this->identidad = $identidad;
			$this->telefono = $telefono;
			$this->carrera = $carrera;
			$this->cantidadClases = $cantidadClases;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getIdentidad(){
			return $this->identidad;
		}
		public function setIdentidad($identidad){
			$this->identidad = $identidad;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getCarrera(){
			return $this->carrera;
		}
		public function setCarrera($carrera){
			$this->carrera = $carrera;
		}
		public function getCantidadClases(){
			return $this->cantidadClases;
		}
		public function setCantidadClases($cantidadClases){
			$this->cantidadClases = $cantidadClases;
		}
		public function __toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Edad: " . $this->edad . 
				" Genero: " . $this->genero . 
				" Identidad: " . $this->identidad . 
				" Telefono: " . $this->telefono . 
				" Carrera: " . $this->carrera . 
				" CantidadClases: " . $this->cantidadClases;
		}

		public function matricular(){
			echo "Metodo matricular de la clase Persona";
		}
	}
?>