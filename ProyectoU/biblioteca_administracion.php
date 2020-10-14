<?php include_once('includes/header.php'); ?>

		<script type="text/javascript" src="assets/js/scripts/biblioteca_administracion.js"></script>
		<br>
		<br>
		<br>
		<div class="row text-center">
			<div class="col-md-12">
				<br style="line-height:50px;" />
			</div>
			<div class="col-md-10 offset-md-1">
				<div class="contenido">
					<img src="assets/images/index/cotecnova.png" width="16%" height="16%" />
					<br /><br />
					<i>Bienvenido <b><?php echo $_SESSION['apellidos'].' '.$_SESSION['nombres']; ?></b> a la administraci&oacute;n del apartado biblioweb, &iquest;Qu&eacute; desea hacer?</i><br /><br />
					<a href="manejar_material_bibliografico" class="button btn-sm btn-primary"><i class="fas fa-book-open"></i> Manejar Material Bibliogr&aacute;fico</a> | 
					<a href="manejar_solicitudes" class="button btn-sm btn-primary"><i class="fas fa-book-open"></i> Manejar Solicitudes de Prestamo</a> | 
					<a href="manejar_prestamos" class="button btn-sm btn-primary"><i class="fas fa-book-open"></i> Manejar Prestamos</a> | 
					<a href="manejar_multas" class="button btn-sm btn-primary"><i class="fas fa-book-open"></i> Manejar Multas</a> | 
					<a href="logout" class="button btn-sm btn-danger"><i class="fas fa-sign-out-alt"></i> Salir</a>
				</div>
			</div>
		</div>
		
		<?php include_once('includes/footer.php'); ?>