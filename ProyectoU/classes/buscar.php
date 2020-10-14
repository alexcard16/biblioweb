



<?php 

   
   
	include("config.php");


	 $nombre1=$_POST['nombre1'];

   $result = "SELECT * FROM material_bibliografico WHERE nombre LIKE '%".$nombre1."%' ";
   
   $obten = mysqli_query($conexion,$result);

 


?>

