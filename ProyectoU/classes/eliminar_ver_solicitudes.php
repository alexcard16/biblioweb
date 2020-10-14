<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$id = $_REQUEST['id'];
	
	require_once('config.php');
	
	$eliminar = mysqli_query($conexion, "DELETE FROM solicitud WHERE id = '".$id."'");
	
	if(!$eliminar){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "Hubo un error al momento de eliminar esta solicitud.";
	}else{
		$data['validacion']	= 'exito';
		$data['mensaje'] 	= "La solicitud ha sido eliminada correctamente.";
	}
	
	echo json_encode($data);	
?>