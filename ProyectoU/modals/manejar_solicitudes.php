					
					<div class="modal fade" id="estado" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6>Cambiar Estado Solicitud</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-10 offset-md-1 text-center">
											<p style="margin-top: 6px"><b>Nombre del libro solicitado: <span id="estado_nombre" style="color: red" /></b></p>
										</div>
										<div class="col-md-2 offset-md-1">
											<p style="margin-top: 6px"><b>Estado:</b></p>
										</div>
										<div class="col-md-6 offset-md-1">
											   <div id="estado_actual">
												<input type="button" id="realizar_cambio" value="Pendiente"></input>
												</div>
											<div id="estado_actual">
												<input type="button" id="realizar_cambio" value="Aprobado"></input>
											</div>

											<div id="estado_actual">
												<input type="button" id="realizar_cambio" value="Rechazado"></input>
												</div>
											
										</div>
									</div>
								</div>
								<div class="modal-footer">
							
									<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Regresar</button>
									<input type="hidden" id="estado_id">
								</div>
							</div>
						</div>
					</div>

				