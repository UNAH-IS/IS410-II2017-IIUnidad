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
					
				},
				error:function(){

				}
		});
	});	
});

