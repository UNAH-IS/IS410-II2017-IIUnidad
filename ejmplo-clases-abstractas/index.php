<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include ("class/class-alumno.php");
		include ("class/class-empleado.php");
		include ("class/class-carrera.php");
		$a = new Alumno('Juan','Martinez',25, 'M','0081-4545-454','999999',
				new Carrera(115,'Ingenieria en Sistemas',56),1, '123456');
		
		$e = new Empleado('Pedro','Perez',30, 'M','0801-4545-454','999999',
				new Carrera(114,'Ingenieria Quimica',51),3, 45465,1221);
		
		//No se puede instanciar.
		/*$p = new Persona('Maria','Lainez',35, 'F','0803-4545-454','999999',
				new Carrera(114,'Matematicas',51),3);*/
		

		echo $a . "<br>";	
		echo $e . "<br>";
		//echo $p . "<br>";
		$a->matricular();
		$e->matricular();

		Persona::$atributoEstatico = 123;
		echo "<br>Atributo Estatico de A: ".$a::$atributoEstatico;
		echo "<br>Atributo Estatico de E: ".$e::$atributoEstatico;

	?>
</body>
</html>