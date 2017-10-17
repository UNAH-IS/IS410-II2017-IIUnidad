<?php
	

	class Computadora{
		private $marca;
		private $modelo;
		private $color;

		public function __construct($marca,$modelo,$color){
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->color = $color;

		}

		public function __toString(){
			return $this->marca .",".$this->modelo .",".$this->color;
		}

		public function encender(){
			echo "Encendiendo la " .$this->marca;
		}

		public function apagar(){
			echo "Apagando....";
		}

		public function setMarca($marca){
			$this->marca=$marca;
		}

		public function getMarca(){
			return $this->marca;
		}

		public function setModelo($modelo){
			$this->modelo=$modelo;
		}

		public function getModelo(){
			return $this->modelo;
		}

		public function setColor($color){
			$this->color=$color;
		}

		public function getColor(){
			return $this->color;
		}
	}

?>