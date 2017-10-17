<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//Pruebas clase computadora
		//include("class/class-computadora.php");
		//$c = new Computadora("Asus","ABC","Rojo");
		//echo "Ya se creao la instancia c";
		//$c->encender();
		//$c->marca = "Asus";
		//$c->setMarca("Asus");
		//$c->modelo = "ABC";
		//$c->setModelo("ABC");
		//echo "Marca: " . $c->marca. ", Modelo: ".$c->modelo; 
		//echo "Marca: " . $c->getMarca(). ", Modelo: ".$c->getModelo().", Color: ".$c->getColor(); 
		//echo $c;


		//Pruebas herencia:
		//include ("class/class-persona.php");
		include ("class/class-alumno.php");
		include ("class/class-empleado.php");
		include ("class/class-carrera.php");
		$a = new Alumno('Juan','Martinez',25, 'M','0081-4545-454','999999',
				new Carrera(115,'Ingenieria en Sistemas',56),1, '123456');
		
		echo $a . "<br>";

		$e = new Empleado('Pedro','Perez',30, 'M','0801-4545-454','999999',
				new Carrera(114,'Ingenieria Quimica',51),3, 45465,1221);
		
		echo $e . "<br>";
		
		//Llamar al metodo matricular de cada objeto
		$a->matricular();
		echo "<br>";
		$e->matricular();

	?>
</body>
</html>