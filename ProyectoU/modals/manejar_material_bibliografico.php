			
					<div class="modal fade" id="agregar" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6>Agregar Material Bibliogr&aacute;fico</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Nombre:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="agregar_nombre">
										</div>
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Autor:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="agregar_autor">
										</div>
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Descripci&oacute;n:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="agregar_descripcion">
										</div>

										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Copias:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="agregar_copias">
										</div>

										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Foto:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="agregar_foto">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="insertar" class="btn btn-sm btn-primary">Aceptar</button>
									<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Regresar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="editar" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6>Editar Material Bibliogr&aacute;fico</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Nombre:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="editar_nombre">
										</div>
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Autor:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="editar_autor">
										</div>
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Descripci&oacute;n:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="editar_descripcion">
										</div>

										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Copias:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="aditar_copias">
										</div>

										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Foto:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											<input type="text" class="form-control" id="editar_foto">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="modificar" class="btn btn-sm btn-primary">Aceptar</button>
									<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Regresar</button>
									<input type="hidden" id="editar_id">
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="eliminar" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6>Eliminar Material Bibliogr&aacute;fico</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12 text-center">
											<p class="font-italic font-weight-bold" style="color: red">&iquest;Realmente desea borrar el material bibliogr&aacute;fico seleccionado?</p>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="borrar" class="btn btn-sm btn-primary">Aceptar</button>
									<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Regresar</button>
									<input type="hidden" id="eliminar_id">
								</div>
							</div>
						</div>
					</div>
			