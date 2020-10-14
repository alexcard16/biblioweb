$(document).on("click", ".estado", function(e){
	var id 		= $(this).data("id");
	var nombre 	= $(this).data("nombre");
	var estado 	= $(this).data("estado");
	nombre 		= nombre.toUpperCase();
	
	$('#estado_id').val(id);
	$('#estado_actual').val(estado);
	$('#estado_nombre').html(nombre);
});

$(document).on("click", "#realizar_cambio", function(e){
	var id 			= $('#estado_id').val();
	var estado 		= $('#estado_actual').val();
	var params 		= '&id='+id+'&estado='+estado;
	
	$.post('classes/estado_manejar_solicitudes', params, function(jsondata){
		if(jsondata.validacion == 'exito'){	
			swal({
				title: "ESTADO CAMBIADO",
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
});