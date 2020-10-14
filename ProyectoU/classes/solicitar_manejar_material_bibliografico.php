<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$id 	= $_REQUEST['id'];
	$fecha 	= $_REQUEST['fecha'];
	
	require_once('config.php');
	session_start();
	
	$id_usuario = $_SESSION['id'];
	
	$insertar = mysqli_query($conexion, "INSERT INTO solicitud(id_usuario, id_material_bibliografico, fecha_fin) VALUES('".$id_usuario."', '".$id."', '".$fecha."')");
	if(!$insertar){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "Hubo un error al momento de solicitar este material bibliográfico.";
	}else{
		$data['validacion']	= 'exito';
		$data['mensaje'] 	= "El material bibliográfico ha sido solicitado correctamente.";
	}
	
	echo json_encode($data);	
?>