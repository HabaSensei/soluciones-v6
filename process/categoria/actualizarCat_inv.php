	
	<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Tabla Busqueda de Articulos</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
	
	 <table id="example1" class="table table-condensed">        
				
					  <thead class="bg-blue">
					  <tr>
						<th>Codigo</th>
						<th>Nombre de Categoria</th>
						<th>Detalle de Categoria</th>
						<th>Opciones</th>
					  </tr>
					  </thead>
					  <tbody>
					  <?php
				
				
				$ordenU=  ejecutarSQL::consultar("select * from categoria");
				
				while($ordenP=mysqli_fetch_assoc($ordenU)){
					$ordenList=$ordenP['CodigoCat'];
					$ordenNomb=$ordenP['Nombre'];
					$ordenDeta=$ordenP['Descripcion'];
					
					
					
						?>
					  <tr>
						<td><?php echo $ordenList ?></a></td>
						<td><?php echo $ordenNomb ?></td>
						<td><?php echo $ordenDeta ?></td>
						 <td class="text-center" >
							   <?php  if ($_SESSION['NombreAfil']=="soluciones") {
						   
						   echo '
						   
						   <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary btn-sm"  href="updateCat_inv.php?CodigoCat='.$ordenP['CodigoCat'].' "> <i style="color:#FFF" class="fa fa-edit"></i> </a>
                            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm("estas seguro de eliminar?");" href="delcategori_inv.php?CodigoCat='.$ordenP['CodigoCat'].' "> <i style="color:#FFF" class="fa fa-trash"></i> </a>
           
	
							';
				 }else {
						   
						   echo '
						   
						    <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary btn-sm disabled"  href="updateCat_inv.php?CodigoCat='.$ordenP['CodigoCat'].' "> <i style="color:#FFF" class="fa fa-edit"></i> </a>
                            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm disabled" onclick="return confirm("estas seguro de eliminar?");" href="delcategori_inv.php?CodigoCat='.$ordenP['CodigoCat'].' "> <i style="color:#FFF" class="fa fa-trash"></i> </a>
           
						   
						   
						   ';
						  } ?>
				</td>
					  </tr>
					  
					<?php   } ?>  
					  </tbody>
					</table>
					
				  </div>
 </div>  </div> 
