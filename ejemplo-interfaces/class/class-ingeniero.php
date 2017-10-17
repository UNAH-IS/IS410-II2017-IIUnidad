<?php
	class Ingeniero implements Humano,EspecimenRaro {
		public function hacerCosasRaras(){
			echo "Ingeniero haciendo cosas raras<br>";
		}
		public function cometerErrores(){
			echo "Ingeniero cometiendo errores<br>";
		}
		public function respirar(){
			echo "Ingeniero respirando<br>";
		}
		public function vivir(){
			echo "Ingeniero Viviendo<br>";
		}
		public function morir(){
			echo "Ingeniero muriendo<br>";
		}

	}
?>