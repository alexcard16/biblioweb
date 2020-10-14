$(document).on("keypress", "#documento", function(event){
	var keycode = (event.keycode ? event.keycode : event.which);
	if(keycode == '13'){
		if(validacion()){
			var documento = $('#documento').val();
			var params 	= '&documento='+documento;
			
			$.post('classes/login', params, function(jsondata){
				if(jsondata.validacion == 'exito_docente'){
					var url = 'biblioteca_administracion';
					swal({
						title: "BIENVENIDO",
						text: jsondata.mensaje,
						timer: 1500,
						type: "success",
						showConfirmButton: false
					});
					setTimeout(function(){
						window.location = url;
					}, 2000);
				}
				if(jsondata.validacion == 'exito_alumno'){
					var url = 'biblioteca_usuario';
					swal({
						title: "BIENVENIDO",
						text: jsondata.mensaje,
						timer: 1500,
						type: "success",
						showConfirmButton: false
					});
					setTimeout(function(){
						window.location = url;
					}, 2000);
				}
				if(jsondata.validacion == 'error'){				
					swal({
						title: "ERROR",
						text: jsondata.mensaje,
						timer: 2500,
						type: "warning",
						showConfirmButton: false
					});
				}
			},'json');
		}else{
			e.preventDefault();
			return false;
		}
	}
});

function validacion(){
	if ($('#documento').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Número Documento.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#documento").filter(':visible').focus();
		}, 3000);
		return false;
	}
	return true;
}