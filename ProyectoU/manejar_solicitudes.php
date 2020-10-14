<?php include_once('includes/header.php'); ?>
		
		<?php session_start(); ?>
		<script type="text/javascript" src="assets/js/scripts/manejar_solicitudes.js"></script>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<br style="line-height:50px;" />
			</div>
			<div class="col-md-10 offset-md-1">
				<div class="contenido">
					<table id="tabla" class="table table-bordered text-center" style="width: 100%">
						<thead>
							<tr>
								<td colspan="9" class="text-right">
									<a href="biblioteca_administracion" class="button btn-sm btn-danger"><i class="fas fa-share-square"></i> Regresar</a>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><b>Nombre</b></td>
								<td><b>Autor</b></td>
								<td><b>Descripci&oacute;n</b></td>
								<td><b>Fecha Solicitud</b></td>
								<td><b>Fecha Entrega</b></td>
								<td><b>Estado Actual</b></td>
								<td><b>Opciones</b></td>
							</tr>
						</thead>
						<tbody>
							<?php $contador = 1;
								$consulta = mysqli_query($conexion, "SELECT s.id AS id, m.nombre AS nombre, m.autor AS autor, m.descripcion AS descripcion, m.foto AS foto, s.fecha_inicio AS inicio, s.fecha_fin AS fin, s.estado AS estado FROM solicitud s INNER JOIN material_bibliografico m ON m.id = s.id_material_bibliografico ORDER BY s.id DESC");
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
										<td><?php echo $contador; ?></td>
										<td><?php echo $r['nombre']; ?></td>
										<td><?php echo $r['autor']; ?></td>
										<td><?php echo $r['descripcion']; ?></td>
										<td><?php echo $r['inicio']; ?></td>
										<td><?php echo $r['fin']; ?></td>
										<td><?php echo $r['estado']; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary estado" data-id="<?php echo $r['id']; ?>" data-nombre="<?php echo $r['nombre']; ?>" data-estado="<?php echo $r['estado']; ?>" data-toggle="modal" data-target="#estado">
												<i data-toggle="tooltip" data-placement="top" title="Cambiar Estado Solicitud" class="fas fa-sign-in-alt" style="color: #FFFFFF"></i>

												<?php

												//include 'classes/estado_manejar_solicitudes.php';

												if($r['estado']=aprobado){

													$copias1=1;



													 function descuentoCopias($id_m,$copias){

														$c= new conectar();
														$conexion=$c->conexion();

													$sqlr="SELECT copias FROM material_bibliografico where id='$id_m";

													$result=mysqli_query($conexion,$sqlr);

													$copias1=mysqli_fetch_row($result)[0];

													$cantidadNueva=abs($copias-$copias1);

												$sqlr="UPDATE material_bibliografico set copias='$
												cantidadNueva'where id='$id_m'";

												mysqli_query($conexion,$sqlr);

												}

												}


												?>

											</button>
										</td>
									</tr>
									
								<?php $contador++; endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td><b>Nombre</b></td>
								<td><b>Autor</b></td>
								<td><b>Descripci&oacute;n</b></td>
								<td><b>Fecha Solicitud</b></td>
								<td><b>Fecha Entrega</b></td>
								<td><b>Estado Actual</b></td>
								<td><b>Opciones</b></td>
							</tr>
						</tfoot>
					</table>
					
					<?php include_once('modals/manejar_solicitudes.php'); ?>
					
				</div>
			</div>
		</div>
		
		<?php include_once('includes/footer.php'); ?>