<?php	
	header("Content-Type: text/html; charset=utf-8");
	
	session_start();	
	require_once('config.php');
	
	$documento = $_REQUEST['documento'];
	
	$consulta 	= mysqli_query($conexion, "SELECT * FROM usuarios WHERE documento = '".$documento."'");
	$row 		= mysqli_fetch_array($consulta);
	
	if($documento == $row['documento'] && $row['tipo'] == 'Administrativo'){
		$_SESSION['login'] 		= 1;
		$_SESSION['id'] 		= $row['id'];
		$_SESSION['documento'] 	= $row['documento'];
		$_SESSION['tipo'] 		= $row['tipo'];
		$_SESSION['nombres'] 	= $row['nombres'];
		$_SESSION['apellidos'] 	= $row['apellidos'];
		$_SESSION['email'] 		= $row['email'];
		$_SESSION['foto'] 		= $row['foto'];
		$data['validacion'] 	= 'exito_docente';
		$data['mensaje'] 		= "Bienvenido a la plataforma administrativa de biblioweb.";
	}else if($documento == $row['documento'] && $row['tipo'] == 'Alumno'){
		$_SESSION['login'] 		= 1;
		$_SESSION['id'] 		= $row['id'];
		$_SESSION['documento'] 	= $row['documento'];
		$_SESSION['tipo'] 		= $row['tipo'];
		$_SESSION['nombres'] 	= $row['nombres'];
		$_SESSION['apellidos'] 	= $row['apellidos'];
		$_SESSION['email'] 		= $row['email'];
		$_SESSION['foto'] 		= $row['foto'];
		$data['validacion'] 	= 'exito_alumno';
		$data['mensaje'] 		= "Bienvenido a la plataforma de biblioweb.";
	}else{
		$_SESSION['login'] 		= 0;
		$data['validacion'] 	= 'error';
		$data['mensaje'] 		= "El registro no existe.";
	}
		
	echo json_encode($data);	
?>