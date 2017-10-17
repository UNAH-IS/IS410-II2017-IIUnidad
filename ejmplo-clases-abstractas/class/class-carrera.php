<?php

	class Carrera{

		private $codigoCarrera;
		private $nombreCarrera;
		private $cantidadAsignaturas;

		public function __construct($codigoCarrera,
					$nombreCarrera,
					$cantidadAsignaturas){
			$this->codigoCarrera = $codigoCarrera;
			$this->nombreCarrera = $nombreCarrera;
			$this->cantidadAsignaturas = $cantidadAsignaturas;
		}
		public function getCodigoCarrera(){
			return $this->codigoCarrera;
		}
		public function setCodigoCarrera($codigoCarrera){
			$this->codigoCarrera = $codigoCarrera;
		}
		public function getNombreCarrera(){
			return $this->nombreCarrera;
		}
		public function setNombreCarrera($nombreCarrera){
			$this->nombreCarrera = $nombreCarrera;
		}
		public function getCantidadAsignaturas(){
			return $this->cantidadAsignaturas;
		}
		public function setCantidadAsignaturas($cantidadAsignaturas){
			$this->cantidadAsignaturas = $cantidadAsignaturas;
		}
		public function __toString(){
			return "CodigoCarrera: " . $this->codigoCarrera . 
				" NombreCarrera: " . $this->nombreCarrera . 
				" CantidadAsignaturas: " . $this->cantidadAsignaturas;
		}
	}
?>