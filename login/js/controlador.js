$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros = "inputEmail=" +$("#inputEmail").val() + 
						"&inputPassword="+$("#inputPassword").val();
			alert(parametros);
			$.ajax({
				url:"ajax/acciones_login.php?accion=login",
				method: "POST",
				data: parametros,
				dataType: 'json	',
				success:function(respuesta){
					if (respuesta.status==0){
						$("#resultado").html(respuesta.mensaje);
					}
					else{
						alert("Si tiene acceso, sera redireccionado");
						if(respuesta.codigo_tipo_usuario==1)
							window.location = "pagina_cajero.php"; //Redireccionar a la pagina de cajero
						else if(respuesta.codigo_tipo_usuario==2)
							window.location = "pagina_admin.php";//Redireccionar a la pagina de administrador
					}
				},
				error:function(){

				}
		});
	});	
});

