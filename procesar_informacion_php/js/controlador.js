$("#btn-guardar").click(function(){

	$.ajax({
		url:"ajax/procesar.php",
		method:"POST",
		data:"txt-email="+$("#txt-email").val() + "&txt-password="+$("#txt-password").val(),
		success:function(respuesta){
			alert(respuesta);
		},
		error:function(err){
			alert(err);
		}
	});
});