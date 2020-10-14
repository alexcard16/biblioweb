<?php include_once('includes/header.php'); ?>
		
		<?php session_start(); ?>
		<script type="text/javascript" src="assets/js/scripts/manejar_material_bibliografico.js">
		</script>

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
								<td colspan="3">
									<button type="button" class="btn btn-sm btn-success agregar" data-toggle="modal" data-target="#agregar">
										<i class="fas fa-folder-plus"></i> Agregar Material Bibliogr&aacute;fico
									</button>
								</td>
								<td colspan="3" class="text-right">
									<a href="biblioteca_administracion" class="button btn-sm btn-danger"><i class="fas fa-share-square"></i> Regresar</a>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><b>Nombre</b></td>
								<td><b>Autor</b></td>
								<td><b>Descripci&oacute;n</b></td>
								<td><b>Copias</b></td>
								<td><b>Opciones</b></td>

							</tr>
						</thead>
						<tbody>
							<?php $contador = 1;
								$consulta = mysqli_query($conexion, "SELECT * FROM material_bibliografico ORDER BY nombre");
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
										<td><?php echo $r['copias']; ?></td>

										<td>
											<button type="button" class="btn btn-sm btn-warning editar" data-id="<?php echo $r['id']; ?>" data-nombre="<?php echo $r['nombre']; ?>" data-autor="<?php echo $r['autor']; ?>" data-descripcion="<?php echo $r['descripcion']; ?>" data-copias="<?php echo $r['copias']; ?>"data-foto="<?php echo $r['foto']; ?>" data-toggle="modal" data-target="#editar">
												<i data-toggle="tooltip" data-placement="top" title="Modificar Material Bibliogr&aacute;fico" class="fas fa-edit" style="color: #FFFFFF"></i>
											</button>
											<button type="button" class="btn btn-sm btn-danger eliminar" data-id="<?php echo $r['id']; ?>" data-toggle="modal" data-target="#eliminar">
												<i data-toggle="tooltip" data-placement="top" title="Eliminar Material Bibliogr&aacute;fico" class="fas fa-trash"></i>
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
								<td><b>copias</b></td>
								<td><b>Opciones</b></td>
							</tr>
						</tfoot>
					</table>
					
					<?php include_once('modals/manejar_material_bibliografico.php'); ?>
					
				</div>
			</div>
		</div>
		
		<?php include_once('includes/footer.php'); ?>