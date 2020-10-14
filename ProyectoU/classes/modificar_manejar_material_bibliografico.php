<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$id 			= $_REQUEST['id'];
	$nombre 		= $_REQUEST['nombre'];
	$autor 			= $_REQUEST['autor'];
	$descripcion 	= $_REQUEST['descripcion'];
	$copias			= $_REQUEST['copias'];
	$foto 			= $_REQUEST['foto'];
	
	require_once('config.php');
	
	$existe 	= mysqli_query($conexion, "SELECT count(*) AS cantidad FROM material_bibliografico WHERE nombre = '".$nombre."' AND id != '".$id."'");
	$rExiste 	= mysqli_fetch_array($existe);
	
	if($rExiste['cantidad'] > 0){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "El nombre del libro ya esta registrado.";
	}else{
		$modificar = mysqli_query($conexion, "UPDATE material_bibliografico SET nombre = '".$nombre."', autor = '".$autor."', descripcion = '".$descripcion."', copias = '".$copias."', foto = '".$foto."' WHERE id = '".$id."'");
		if(!$modificar){
			$data['validacion']	= 'error';
			$data['mensaje'] 	= "Hubo un error al momento de modificar este material bibliográfico.";
		}else{
			$data['validacion']	= 'exito';
			$data['mensaje'] 	= "El material bibliográfico ha sido modificado correctamente.";
		}
	}
	
	echo json_encode($data);	
?>