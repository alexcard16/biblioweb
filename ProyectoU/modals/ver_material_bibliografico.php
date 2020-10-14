					
					<div class="modal fade" id="solicitar" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6>Solicitar Material Bibliogr&aacute;fico</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-10 offset-md-1 text-center">
											<p style="margin-top: 6px"><b>Nombre del libro solicitado: <span id="solicitar_nombre" style="color: red" /></b></p>
										</div>
										<div class="col-md-10 offset-md-1">
											<p style="margin-top: 6px"><b>&iquest;Hasta que fecha requiere el libro?:</b></p>
										</div>
										<div class="col-md-10 offset-md-1">
											<input type="date" class="form-control" id="solicitar_fecha" value="<?php echo date("Y-m-d"); ?>">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="realizar_solicitud" class="btn btn-sm btn-primary">Realizar Solicitud</button>
									<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Regresar</button>
									<input type="hidden" id="solicitar_id">
								</div>
							</div>
						</div>
					</div>
			