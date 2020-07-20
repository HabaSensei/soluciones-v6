

<style>
.modal-dialog {    max-width: 87%;
    margin: -0.25rem auto;}


</style>

		
			<!-- Modal -->
			<div class="modal fade modal-xl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-xl" role="document">
				<div class="modal-content" style="        background: #022c46;    color: #fff;">
				  <div class="modal-header" style=" background: #022c46; color: #fff;">
					<button type="button" style="    color: #fff;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="color: #fff;" id="myModalLabel">Buscar productos</h4>
				  </div>
				  <div class="modal-body" style="        background: #022c46;    color: #fff;">
					<form class="form-horizontal">
					  <div class="form-group" style="    display: -webkit-box;">
						<div class="col-sm-6">
						  <input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)" autocomplete="off">
						</div>
						<button type="button" class="btn btn-default" onclick="load(1)"><span class='fa fa-search'></span> Buscar</button>
					  </div>
					</form>
					<div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="outer_div" ></div><!-- Datos ajax Final -->
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div>
	
