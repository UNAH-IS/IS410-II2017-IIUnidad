<?php
 	//isset verifica si una variable en PHP tiene valor.
	if (isset($_POST["txt-email"]) && $_POST["txt-password"]){
		$archivo = fopen("archivo.csv","a+"); //r: read, w: write, a+: Append
		fwrite($archivo,  $_POST["txt-email"] . "," . $_POST["txt-password"]."\n");
		fclose($archivo);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Agregar usuario
	</button>

	<?php 

		$archivo = fopen("archivo.csv", "r");
		echo '<table class="table table-striped table-hover">';
		echo '<tr><th>Nombre</th><th>Contraseña</th></tr>';
		while(!feof($archivo)){
			$linea = fgets($archivo);
			if ($linea != ''){
				$partes = explode(",", $linea);
				echo "<tr><td>".$partes[0]."</td><td>".$partes[1]."</td></tr>";
			}	
		}
		echo "</table>";
		fclose($archivo);
	?>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        	    <h2 class="form-signin-heading">Please sign in</h2>
			        <label for="inputEmail" class="sr-only">Email address</label>
			        <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Email address" required autofocus>
			        <label for="inputPassword" class="sr-only">Password</label>
			        <input type="password" id="txt-password" name="txt-password" class="form-control" placeholder="Password" required>
			        <div class="checkbox">
			          <label>
			            <input type="checkbox" value="remember-me"> Remember me
			          </label>
			        </div>
			        <button id="btn-guardar" class="btn btn-lg btn-primary btn-block" type="button">Agregar usuario</button>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/controlador.js"></script>
</body>
</html>