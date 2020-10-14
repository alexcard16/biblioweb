<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$id = $_REQUEST['id'];
	
	require_once('config.php');
	
	$eliminar = mysqli_query($conexion, "DELETE FROM material_bibliografico WHERE id = '".$id."'");
	
	if(!$eliminar){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "Hubo un error al momento de eliminar este material bibliográfico.";
	}else{
		$data['validacion']	= 'exito';
		$data['mensaje'] 	= "El material bibliográfico ha sido eliminado correctamente.";
	}
	
	echo json_encode($data);	
?>