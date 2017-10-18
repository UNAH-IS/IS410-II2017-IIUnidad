// Carga de usuarios
$(document).ready(function(){
	$.ajax({
		url:"ajax/carga-usuarios.php",
		data:"",
		method:"POST",
		success:function(respuesta){
			$("#lista-usuarios").append(respuesta);
		},
		error: function(e){
			console.log(e);
		}

	});

	'<label>Goku<input id="rbt-goku" type="radio" value="Goku" name="rbt-foto"><img src="img/goku.jpg" class="img-responsive img-circle"></label>'
});

// Guardar Meme
function guardarRegistro(){;
	var parametros = 
		"txt-descripcion="+$("#txt-descripcion").val()+"&"+
		"rbt-foto="+$("input[type='radio'][name='rbt-foto']:checked").val()+"&"+
		"txt-puntuacion="+$("#txt-puntuacion").val()+"&"+
		"txt-id="+$("#txt-id").val()+"&"+
		"slc-imagen="+$("#slc-imagen").val();
	$.ajax({
		url:"ajax/guardar-registro.php",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			$("#div-memes").append(respuesta);
		},
		error:function(e){
			alert("Error: "+e);
		}
	});
}

// Cargar Memes
$(document).ready(function(){
	$.ajax({
		url:"ajax/obtener-memes.php",
		data:"",
		method:"POST",
		success:function(respuesta){
			$("#div-memes").append(respuesta);
		}
	});
});

// Comentar Memes
function comentar(temp){
	//Comentario
	var usuario = $("input[type='radio'][name='rbt-foto']:checked").val();
	var coment = $("#textarea-"+temp).val();
	if(coment!=""){
		var parametros = "usuario="+usuario+"&coment="+coment+"&id="+temp;
		$.ajax({
			url: "ajax/guardar-comentario.php",
			method: "POST",
			data: parametros,
			success:function(respuesta){
				$("#div-"+temp).append(respuesta);
			},
			error:function(e){
				console.log(e);
			}
		});
		$("#textarea-"+temp).val("");
	}

	//Actualizar contador
	$.ajax({
		url: "ajax/contar.php",
		method: "POST",
		data: "id="+temp,
		success:function(respuesta){
			$("#cmt-"+temp).html(respuesta);
		},
		error: function(e){
			console.log(e);
		}
	});
}