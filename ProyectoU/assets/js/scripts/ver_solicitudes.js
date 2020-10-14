$(document).on("click", ".eliminar", function(e){
	var id = $(this).data("id");
	$('#eliminar_id').val(id);
});

$(document).on("click", "#borrar", function(e){
	var id 		= $('#eliminar_id').val();
	var params 	= '&id='+id;
	
	$.post('classes/eliminar_ver_solicitudes', params, function(jsondata){
		if(jsondata.validacion == 'exito'){	
			swal({
				title: "ELIMINADO",
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