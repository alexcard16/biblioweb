<?php
	$configuracion['servidor'] 		= 'localhost';
	$configuracion['usuario'] 		= 'root';
	$configuracion['contrasena'] 	= '123456';
	$configuracion['base_datos'] 	= 'proyecto';
	
	$conexion = mysqli_connect($configuracion['servidor'], $configuracion['usuario'], $configuracion['contrasena'], $configuracion['base_datos']);
	if(!$conexion){ die("Error de Conexion: ". mysqli_connect_error()); }
	
	mysqli_set_charset($conexion, "utf8");
?>