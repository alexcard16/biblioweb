<?php include_once('includes/header.php'); ?>
		
		<?php session_start(); ?>
		<script type="text/javascript" src="assets/js/scripts/manejar_prestamos.js"></script>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<br style="line-height:50px;" />
			</div>
			<div class="col-md-12">
				<div class="contenido">
					<table id="tabla" class="table table-bordered text-center" style="width: 100%">
						<thead>
							<tr>
								<td colspan="9" class="text-right">
									<a href="biblioteca_administracion" class="button btn-sm btn-danger"><i class="fas fa-share-square"></i> Regresar</a>
								</td>
							</tr>
							<tr>
								<td colspan="4"><b>DATOS DEL LIBRO</b></td>
								<td colspan="4"><b>DATOS PRESTAMO</b></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td><b>Nombre</b></td>
								<td><b>Autor</b></td>
								<td><b>Descripci&oacute;n</b></td>
								<td><b>Fecha Prestamo</b></td>
								<td><b>Fecha Entrega</b></td>
								<td><b>Documento</b></td>
								<td><b>Nombre</b></td>
								<td><b>Opciones</b></td>
							</tr>
						</thead>
						<tbody>
							<?php $contador = 1;
								$consulta = mysqli_query($conexion, "SELECT p.id AS id, m.nombre AS nombre, m.autor AS autor, m.descripcion AS descripcion, m.foto AS foto, p.fecha_inicio AS inicio, p.fecha_fin AS fin, u.nombres AS nombres, u.apellidos AS apellidos, u.documento AS documento FROM prestamo p INNER JOIN material_bibliografico m ON m.id = p.id_material_bibliografico INNER JOIN usuarios u ON u.id = p.id_usuario ORDER BY p.id DESC");
								$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
								foreach($resultado as $r):
									$foto 	= 'http://'.$_SERVER['HTTP_HOST'].'/assets/images/material_bibliografico/'.$r['foto'];
									$f 		= @fopen($foto, 'r'); ?>
								
									<tr>
										<td>
											<?php if($f !== false){ ?>
											
												<img src="assets/images/material_bibliografico/<?php echo $r['foto']; ?>" width="128" height="128" />
											
											<?php }else{ ?>
											
												<img src="assets/images/material_bibliografico/default.png" width="128" height="128" />
										
											<?php } ?>
										</td>
										<td><?php echo $r['nombre']; ?></td>
										<td><?php echo $r['autor']; ?></td>
										<td><?php echo $r['descripcion']; ?></td>
										<td><?php echo $r['inicio']; ?></td>
										<td><?php echo $r['fin']; ?></td>
										<td><?php echo $r['documento']; ?></td>
										<td><?php echo $r['nombres'].' '.$r['apellidos']; ?></td>
										<td>
											<!-- -->
										</td>
									</tr>
									
								<?php $contador++; endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td><b>Nombre</b></td>
								<td><b>Autor</b></td>
								<td><b>Descripci&oacute;n</b></td>
								<td><b>Fecha Prestamo</b></td>
								<td><b>Fecha Entrega</b></td>
								<td><b>Documento</b></td>
								<td><b>Nombre</b></td>
								<td><b>Opciones</b></td>
							</tr>
							<tr>
								<td colspan="4"><b>DATOS DEL LIBRO</b></td>
								<td colspan="4"><b>DATOS PRESTAMO</b></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
					
					<?php include_once('modals/manejar_prestamos.php'); ?>
					
				</div>
			</div>
		</div>
		
		<?php include_once('includes/footer.php'); ?>