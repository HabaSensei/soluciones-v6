
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Tabla Busqueda de Articulos Agotads</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
							 <table id="example1" class="table table-condensed">
            <thead class="bg-danger">
                  <tr >
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
                    <th>Marca </th>
                    <th>Detalle</th>
                    <th>P_compra</th>
                    <th>P_venta</th>
                    <th>Categoria</th>
                    
                    <th>Stock</th>
                    
                   
                    
                    
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			
			$ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto`WHERE `producto`.`Stock` = '0';");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
                
                $cod=$ordenP['CodigoProd'];
				$nombre=$ordenP['NombreProd'];
                $modelo=$ordenP['Modelo'];
                $marca=$ordenP['Marca'];
                $precio=$ordenP['Precio'];
                $precio_compra=$ordenP['Compra'];
				$cat=$ordenP['CodigoCat'];
                $stock=$ordenP['Stock'];
                $estado=$ordenP['Detalle'];
				
				
				
				
				
				
					?>
                  <tr>
                    <td><?php echo $cod ?></td>
                    
                     <td><?php echo $nombre ?></td>
                      <td><?php echo $modelo ?></td>
                       <td><?php echo $marca ?></td>
                       <td><?php echo $estado ?></td>
                       <td>S/ <?php echo $precio ?></td>
                        <td>S/ <?php echo $precio_compra ?></td>
                       <td>
                    <?php 
                    $conUs= ejecutarSQL::consultar("SELECT `categoria`.*, `categoria`.`CodigoCat`
FROM `categoria`
WHERE `categoria`.`CodigoCat` ='$cat' ");
                    while($UsP=mysqli_fetch_assoc($conUs)){
					echo $UsP['Nombre'];}
                    ?>
                    </td>
                    
                    <td><?php echo $stock ?></td>
                    
                   
                    
                      
                   <td class="with-btn-group">
            <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary "  href="updateInventario.php?CodigoProd=<?php echo $ordenP['CodigoProd'] ?>"> <i style="color:#FFF" class="fa fa-edit"></i> </a>
            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger " onclick="return confirm('estas seguro de eliminar?');" href="delprod.php?CodigoProd=<?php echo $ordenP['CodigoProd'] ?>"> <i style="color:#FFF" class="fa fa-trash"></i> </a>
            
            </td>
                  </tr>
            </form>
            </div>
            
			<?php
           
            $upp=$upp+1;}
            ?> 
            </tbody>
				</table>
					 </div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
                    
			
