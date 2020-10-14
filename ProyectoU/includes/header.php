<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- METADATOS -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Nicolas Ovalle, Alex Cardona">
		<meta name="description" content="Proyecto Integrador">
		
		<!-- TITULO -->
		<title>Proyecto Biblioteca</title>
		
		<!-- HOJAS DE ESTILO -->
		<link rel="icon" type="image/png" href="assets/images/index/cotecnova.png" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/datatables.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
		
		<!-- SCRIPTS NECESARIOS -->
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/popper.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/datatables.js"></script>
		<script type="text/javascript" src="assets/js/fontawesome.js"></script>
		<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
		
		<!-- OTROS SCRIPTS -->
		<script>
			$(document).ready(function(){
				$('#tabla').DataTable({
					"stateSave": true,
					"order": []
				});
			});
		</script>
		<script>$(function(){ $('[data-toggle="tooltip"]').tooltip() })</script>
	</head>
	<body>
		<?php
			date_default_timezone_set("America/Bogota");
			include_once('classes/config.php');
			//include_once('classes/funciones.php');
			@session_start();
		?>
		
		<nav class="navbar navbar-expand-lg navbar-expand fixed-top" style="font-size: 10px; background-color: #FFFFFF;">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Referidos</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Cont&aacute;ctenos</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Re&uacute;nete</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>AVACO</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>SIGYC</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>SQR Cotecnova</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Recibos de Pago</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Pol&iacute;tica de Privacidad</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Actualizaci&oacute;n RTE</b></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg fixed-top" style="font-size: 13px; background-color: #FFFFFF; margin-top: 35px; border-top: solid #f8f8f8; border-bottom: solid #f8f8f8">
			<div class="container-fluid">
				<table style="width: 100%;">
					<tr>
						<td style="width: 90%"></td>
						<td class="text-right" style="width: 10%">
							<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbar">
								<span class="fas fa-align-center"></span>
							</button>
						</td>
					</tr>
				</table>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Inicio</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Qui&eacute;nes Somos</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Programas</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Sector Externo</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Biblioteca</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Investigaciones</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Talento Humano</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>Administrativos</b></a>
							</div>
						</li>
						<li class="nav-item">
							<div class="nav-link text-right">
								<a href="#"><b>SAI</b></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br style="line-height:100px;" />
		