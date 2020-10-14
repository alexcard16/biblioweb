$(document).on("click", "#insertar", function(e){
	if(validaciones_agregar()){
		var nombre 		= $('#agregar_nombre').val();
		var autor 		= $('#agregar_autor').val();
		var descripcion = $('#agregar_descripcion').val();
		var copias		= $('#agregar_copias').val();
		var foto 		= $('#agregar_foto').val();
		var params 		= '&nombre='+nombre+'&autor='+autor+'&descripcion='+descripcion+'&copias='+copias+'&foto='+foto;
		
		$.post('classes/agregar_manejar_material_bibliografico', params, function(jsondata){
			if(jsondata.validacion == 'exito'){	
				swal({
					title: "AGREGADO",
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

function validaciones_agregar(){
	if ($('#agregar_nombre').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Nombre.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#agregar_nombre").filter(':visible').focus();
		}, 3000);
		return false;
	}
	if ($('#agregar_autor').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Autor.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#agregar_autor").filter(':visible').focus();
		}, 3000);
		return false;
	}
	return true;
}

$(document).on("click", ".editar", function(e){
	var id 			= $(this).data("id");
	var nombre 		= $(this).data("nombre");
	var autor 		= $(this).data("autor");
	var descripcion = $(this).data("descripcion");
	var copias 		= $(this).data("copias");	
	var foto 		= $(this).data("foto");
	
	$('#editar_id').val(id);
	$('#editar_nombre').val(nombre);
	$('#editar_autor').val(autor);
	$('#editar_descripcion').val(descripcion);
	$('#editar_copias').val(copias);
	$('#editar_foto').val(foto);
});

$(document).on("click", "#modificar", function(e){
	if(validaciones_modificar()){
		var id 			= $('#editar_id').val();
		var nombre 		= $('#editar_nombre').val();
		var autor 		= $('#editar_autor').val();
		var descripcion = $('#editar_descripcion').val();
		var copias      = $('#editar_copias').val();
		var foto 		= $('#editar_foto').val();
		var params 		= '&id='+id+'&nombre='+nombre+'&autor='+autor+'&descripcion='+descripcion+'&copias='+copias+'&foto='+foto;
		
		$.post('classes/modificar_manejar_material_bibliografico', params, function(jsondata){
			if(jsondata.validacion == 'exito'){	
				swal({
					title: "MODIFICADO",
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

function validaciones_modificar(){
	if ($('#editar_nombre').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Nombre.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#editar_nombre").filter(':visible').focus();
		}, 3000);
		return false;
	}
	if ($('#editar_autor').val() == '') {
		swal({
  			title: "¡ADVERTENCIA!",
  			text: "Por favor, Rellene el campo de Autor.",
			type: "warning",
  			timer: 1800,
  			showConfirmButton: false
		});
		setTimeout(function(){
			$("#editar_autor").filter(':visible').focus();
		}, 3000);
		return false;
	}
	return true;
}

$(document).on("click", ".eliminar", function(e){
	var id = $(this).data("id");
	$('#eliminar_id').val(id);
});

$(document).on("click", "#borrar", function(e){
	var id 		= $('#eliminar_id').val();
	var params 	= '&id='+id;
	
	$.post('classes/eliminar_manejar_material_bibliografico', params, function(jsondata){
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