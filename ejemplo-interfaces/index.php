<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include("class/interface-servivo.php");
		include("class/interface-especimen-raro.php");
		include("class/interface-humano.php");		
		include("class/class-animal.php");
		include("class/class-ingeniero.php");
		$i = new Ingeniero();
		$a = new Animal();

		$i->hacerCosasRaras();
		$a->vivir();

		echo "<br>Constante: " . Humano::CONSTANTE;
	?>
</body>
</html>