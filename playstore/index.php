<?php 

	$iconos=array();
	$archivo = fopen("data/iconos.csv","r");
	while(!feof($archivo)){
		$iconos[] = fgets($archivo);
	}
	fclose($archivo);


	//$categorias=array();
	$categorias[]='Juegos';
	$categorias[]='Redes sociales';
	$categorias[]='Entretenimiento';


	$desarrolladores[] = 'Juan';
	$desarrolladores[] = 'Pedro';
	$desarrolladores[] = 'Steve Jobs';
	$desarrolladores[] = 'Mark Zucaritas';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oh no, Examen práctico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
				<form action="index.php" method="GET">
					<table class = "table table-striped table-hover">
						<tr>
							<td>Código aplicación:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Nombre aplicación:</td>
							<td>
								<input type="text" name="" id="txt-nombre-aplicacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Descripción:</td>
							<td>
								<input type="text" name="" id="txt-descripcion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de publicación:</td>
							<td>
								<input type="date" name="" id="txt-fecha-publicacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Calificación promedio:</td>
							<td>
								<input type="text" name="" id="txt-calificacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Icono:</td>
							<td>
								<select name="" id="slc-url-icono" class="form-control">
									<?php 
										for($i=0; $i<sizeof($iconos); $i++)
											echo '<option value="'.$iconos[$i].'">'.$iconos[$i].'</option>'
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Categorias:</td>
							<td>
								<div id="div-categorias">
									
								</div>
							</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>
								<input type="text" name="" id="txt-version" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Empresa:</td>
							<td>
								<select name="" id="slc-empresa" class="form-control">
									
								</select>
							</td>
						</tr>
						<tr>
							<td>Tipo Calificación:</td>
							<td>
								<select name="" id="slc-tipos-calificaciones" class="form-control">
								</select>
							</td>
						</tr>
						<tr>
							<td>Tipo Contenido:</td>
							<td>
								<select name="" id="slc-tipos-contenidos" class="form-control">
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input id="btn-guardar" type="button" name="btn-guardar" 
								value="Guardar" class="btn btn-primary">
								<input type="button" name="btn-limpiar" 
								value="Limpiar" class="btn btn-warning">
							</td>
						</tr>
					</table>
				</form>
				<!--- FIN DEL FORMULARIO -->
				<div id="div-resultado-insert"></div>
			</div>
			<!--Listado de las aplicaciones-->
			<div class="col-lg-6">
				<div class="row" id="div-lista-aplicaciones">
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>