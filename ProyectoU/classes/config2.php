<?php
	$servidor = "localhost";
	$usuario = "root";
	$contrasena = "123456";
	$base_datos = "proyecto";
	
$tabla_db1 = "material_bibliografico";

error_reporting(0);

	$conexion = new mysqli($servidor,$usuario,$contrasena,$base_datos);

	if ($conexion --> connection_errno) {

		 echo"feos";
		 exit();
	}

?>