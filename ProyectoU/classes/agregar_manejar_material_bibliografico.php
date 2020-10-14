<?php	
	header("Content-Type: text/html;charset=utf-8");
	
	$nombre 		= $_REQUEST['nombre'];
	$autor 			= $_REQUEST['autor'];
	$descripcion 	= $_REQUEST['descripcion'];
	$copias			= $_REQUEST['copias'];
	$foto 			= $_REQUEST['foto'];
	
	require_once('config.php');
	
	$existe 	= mysqli_query($conexion, "SELECT count(*) AS cantidad FROM material_bibliografico WHERE nombre = '".$nombre."'");
	$rExiste 	= mysqli_fetch_array($existe);
	
	if($rExiste['cantidad'] > 0){
		$data['validacion']	= 'error';
		$data['mensaje'] 	= "El nombre del libro ya esta registrado.";
	}else{
		$insertar = mysqli_query($conexion, "INSERT INTO material_bibliografico(nombre, autor, descripcion, copias, foto) VALUES('".$nombre."', '".$autor."', '".$descripcion."', '".$copias."','".$foto."')");
		if(!$insertar){
			$data['validacion']	= 'error';
			$data['mensaje'] 	= "Hubo un error al momento de agregar este material bibliográfico.";
		}else{
			$data['validacion']	= 'exito';
			$data['mensaje'] 	= "El material bibliográfico ha sido agregado correctamente.";
		}
	}
	
	echo json_encode($data);	
?>