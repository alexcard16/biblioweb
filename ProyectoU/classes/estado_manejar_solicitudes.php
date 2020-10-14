<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$id 	= $_REQUEST['id'];
	$estado = $_REQUEST['estado'];
	
	require_once('config.php');
	session_start();
	
	$datos 	= mysqli_query($conexion, "SELECT id_usuario, id_material_bibliografico, fecha_fin FROM solicitud WHERE id = '".$id."'");
	$rDatos = mysqli_fetch_array($datos);
	
	$dato1 = $rDatos['id_usuario'];
	$dato2 = $rDatos['id_material_bibliografico'];
	$dato3 = $rDatos['fecha_fin'];
	
	$modificar = mysqli_query($conexion, "UPDATE solicitud SET estado = '".$estado."' WHERE id = '".$id."'");
	if(!$modificar){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "Hubo un error al momento de modificar el estado de esta solicitud.";
	}else{
		if($estado == 'Aprobado'){
			$insertar = mysqli_query($conexion, "INSERT INTO prestamo(id_usuario, id_material_bibliografico, fecha_fin) VALUES('".$dato1."', '".$dato2."', '".$dato3."')");
		}
		
		$data['validacion']	= 'exito';
		$data['mensaje'] 	= "El estado de esta solicitud ha sido modificada correctamente.";
	}
	
	echo json_encode($data);	
?>