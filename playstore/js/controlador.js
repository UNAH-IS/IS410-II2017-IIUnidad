$(document).ready(function(){
	$.ajax({
		url:"ajax/get-info.php?accion=obtener_categorias",
		data:"",
		method:"POST",
		success:function(resultado){
			$("#div-categorias").html(resultado);
		},
		error:function(){

		}
	});	

	$.ajax({
		url:"ajax/get-info.php?accion=obtener_empresas",
		data:"",
		method:"POST",
		success:function(resultado){
			$("#slc-empresa").html(resultado);
		},
		error:function(e){
			alert("Error: " + e);
		}
	});	

	$.ajax({
		url:"ajax/get-info.php?accion=obtener_tipos_calificaciones",
		data:"",
		method:"POST",
		success:function(resultado){
			$("#slc-tipos-calificaciones").html(resultado);
		},
		error:function(e){
			alert("Error: " + e);
		}
	});	


	$.ajax({
		url:"ajax/get-info.php?accion=obtener_tipos_contenidos",
		data:"",
		method:"POST",
		success:function(resultado){
			$("#slc-tipos-contenidos").html(resultado);
		},
		error:function(e){
			alert("Error: " + e);
		}
	});	

	cargarListaAplicaciones();	
});


function cargarListaAplicaciones(){
	$.ajax({
		url:"ajax/get-info.php?accion=obtener-aplicaciones",
		data:"",
		method:"POST",
		success:function(resultado){
			$("#div-lista-aplicaciones").html(resultado);
		},
		error:function(e){
			alert("Error: " + e);
		}
	});	
}

$("#btn-guardar").click(function(){
	var categorias = "";
	//categorias[]=1&lista[]=2&lista[]=3&

	$("input[name='categorias[]']:checked").map(function(){
		categorias += "categorias[]="+$(this).val()+"&";
	});
	alert(categorias);

	var parametros= categorias + "txt-nombre-aplicacion="+$("#txt-nombre-aplicacion").val()+"&"+
					"txt-descripcion="+$("#txt-descripcion").val()+"&"+
					"txt-fecha-publicacion="+$("#txt-fecha-publicacion").val()+"&"+
					"txt-calificacion="+$("#txt-calificacion").val()+"&"+
					"slc-url-icono="+$("#slc-url-icono").val()+"&"+
					"txt-version="+$("#txt-version").val()+"&"+
					"slc-empresa="+$("#slc-empresa").val()+"&"+
					"slc-tipos-calificaciones="+$("#slc-tipos-calificaciones").val()+"&"+
					"slc-tipos-contenidos="+$("#slc-tipos-contenidos").val();
	alert(parametros);
	$.ajax({
		url:"ajax/gestion-aplicaciones.php?accion=guardar",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			$("#div-resultado-insert").html(respuesta);
			cargarListaAplicaciones();
		},
		error:function(err){
			alert("Error: " + err);
		}
	});
});