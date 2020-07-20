 <div class="table-responsive " style="padding: 15px 15px 0;">
							<table id="example1" class="table table-bordered table-striped table-hover animated bounce" style="text-align: left;">          
            
                  <thead class="bg-blue">
                  <tr>
                    <th>Categoria ID</th>
                    <th>Nombre </th>
                    <th>Detalle</th>
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
            <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary btn-sm"  href="process/categoria/updateCat.php?CodigoCat=<?php echo $ordenP['CodigoCat'] ?>"> <i style="color:#FFF" class="glyphicon glyphicon-edit"></i> </a>
            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm('estas seguro de eliminar?');" href="process/categoria/delcategori.php?CodigoCat=<?php echo $ordenP['CodigoCat'] ?>"> <i style="color:#FFF" class="glyphicon glyphicon-trash"></i> </a>
            
            </td>
                  </tr>
                  
                <?php   } ?>  
                  </tbody>
                </table>
                
              </div>
