	  
	  <style>
	   .modal_new::-webkit-input-placeholder{ color: black;}
	   
	  </style>
	 
	  
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="serial_sku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" style="      ">
				  <div class="modal-header" style=" background: #022c46; color: #333;">
					<button type="button" style="    color: #fff;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="color: #fff;" id="myModalLabel">Buscar productos</h4>
				  </div>
				  <div class="modal-body" style="        ">
					<div class="col-md-12" style="display:inline-flex;"> 
					<div class="form-group col-md-4">
                                <label style="color: black;">Codigo Serializado</label>
                               <input type="text" class="form-control" required maxlength="30" name="prod-codigo" id="prod-codigo" value="<?php echo $codigo1 ?>" required readonly>
							 
                                </div>
					<div class="form-group col-md-4">
                                <label style="color: black;">Sku</label>
                                <input type="text" style="color:black;" class="form-control modal_new"  placeholder="Sku" required maxlength="30" name="prod-sku" autocomplete="off">
                              </div>
                              <div class="form-group col-md-4">
                                <label style="color: black;">Serial</label>
                                <input type="text" style="color:black;" class="form-control modal_new"  placeholder="Serial" required maxlength="30" name="prod-serial" autocomplete="off">
                              </div>
					</div>
					<div   id="padre">
   
					</div>
					
					
					
					
				  </div>
				  <div class="modal-footer">
					  <input type="button" class="btn btn-success" id="btn_agregar" >Añadir Serializacion
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div>
	
