	
			<section>
         
                             <div class="table-responsive " style="padding: 15px 15px 0;">
							<table id="example3" class="table table-bordered table-striped table-hover animated fadeInUp" style="text-align: left;">          
            
                  <thead class="bg-green" style="letter-spacing: 2px;">
                   <tr>
                    <th>Nº de Cotizacion</th>
                    <th>Fecha </th>
                    <th>Razon Social</th>
                    
                    <th>Importe Total de Cotizacion</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			
			$ordenU=  ejecutarSQL::consultar("select * from cotizacion_online where Estado = 1;");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				$ordenList=$ordenP['id_cotizacion'];
				$ordenFech=$ordenP['fecha_cotizacion'];
				$ordenNit=$ordenP['ID'];
				$ordenEst=$ordenP['Estado'];
				$ordenPrice=$ordenP['GranTotal'];
				
				
					?>
				<tr>
                    <td><a href="actualizarPedido_online.php?id_cotizacion=<?php echo $ordenList ?>"><?php echo $ordenList ?></a></td>
                    <td><?php echo $ordenFech ?></td>
                    <td>
                    <?php 
                    $conUs= ejecutarSQL::consultar("select * from clientes where ID=$ordenNit");
                    while($UsP=mysqli_fetch_assoc($conUs)){
					echo $UsP['NombreEmpresa'];}
                    ?>
                    </td>
                    
                    <td>S/ <?php echo number_format($ordenPrice,2) ?></td>
                    <td align="center">
                     <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarPedido_online.php?id_cotizacion=<?php echo $ordenList ?>"> Ver Orden </a>
                     
                     </td>
                  </tr>
                  
                <?php } ?>  
                  </tbody>
                </table>
                
              </div>
              <!-- /.table-responsive --> 
              
                            </div>
                            
                        </div>
                        
                    </div>
								
								
					
