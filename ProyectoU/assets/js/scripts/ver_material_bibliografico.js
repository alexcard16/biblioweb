$(document).on("click", ".solicitar", function(e){
	var id 		= $(this).data("id");
	var nombre 	= $(this).data("nombre");
	nombre 		= nombre.toUpperCase();
	
	$('#solicitar_id').val(id);
	$('#solicitar_nombre').html(nombre);
});

$(document).on("click", "#realizar_solicitud", function(e){
	if(validaciones_solicitud()){
		var id 			= $('#solicitar_id').val();
		var fecha 		= $('#solicitar_fecha').val();
		var params 		= '&id='+id+'&fecha='+fecha;
		
		$.post('classes/solicitar_manejar_material_bibliografico', params, function(jsondata){
			if(jsondata.validacion == 'exito'){	
				swal({
					title: "SOLICITUD REALIZADA",
					text: jsondata.mensaje,
					timer: 2500,
					type: "success",
					showConfirmButton: false
				});
				setTimeout(function(){
					window.location.reload();
				}, 1400);
			}
			if(jsondata.validacion == 'error'){
				swal({
					title: "ERROR",
					text: jsondata.mensaje,
					timer: 2500,
					type: "error",
					showConfirmButton: false
				});
			}
		},'json');
	}
});

function validaciones_solicitud(){
	if ($('#solicitar_fecha').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Fecha.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#solicitar_fecha").filter(':visible').focus();
		}, 3000);
		return false;
	}
	return true;
}