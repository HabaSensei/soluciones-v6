	
			<section>
         
                       <?php
             $NumPedido=$_GET['id_cotizacion'];
			 
			 $pUP=  ejecutarSQL::consultar("SELECT `cotizacion`.*, `cotizacion`.`id_cotizacion`, `cotizacion`.`ID`, `clientes`.`NombreEmpresa` FROM `cotizacion` LEFT JOIN `clientes` ON `cotizacion`.`ID` = `clientes`.`ID` WHERE ((`cotizacion`.`id_cotizacion` ='$NumPedido') )");
                   while($fila=mysqli_fetch_array($pUP)){
                        echo ' 
           <div id="update-pedido">
                <div  class="col-md-1">
					<label >Codigo</label>
                </div>
		   <form method="post" action="process/updatePedido.php" id="res-update-pedido-'.$fila['id_cotizacion'].'">
					<div  class="col-md-1" style="background: #ffaa0087;font-weight: bold;">'.$fila['id_cotizacion'].'</div>        
						<input type="hidden" name="num-orden" value="'.$fila['id_cotizacion'].'">
				
				<div class="col-md-1">
					<label >Cliente</label>
					  
                </div>
				<div  class="col-md-2" style="background: #ffaa0087;font-weight: bold;">'.$fila['NombreEmpresa'].'</div> 
				
				<div class="col-md-1">
					<label >ClienteID</label>
                </div>
					<div  class="col-md-2" style="background: #ffaa0087;font-weight: bold;">'.$fila['ID'].'</div>       
					
				<div class="col-md-1">
					<label >Estado</label>
                </div>
					<select  class="col-md-2" class="form-control" style="height: 25px;" name="pedido-status">';
				if($fila['Estado']=="Pendiente"){
				echo '<option value="Pendiente">Pendiente</option>'; 
				echo '<option value="Entregado">Entregado</option>'; 
				}
				if($fila['Estado']=="Entregado"){
				echo '<option value="Entregado">Entregado</option>';
				echo '<option value="Pendiente">Pendiente</option>'; 
				}
				echo        '</select>    
					
                <br><br>
              '; } ?>
		          <?php
		           $NumPedido=$_GET['id_cotizacion'];
		 $con= ejecutarSQL::consultar("SELECT `detalle_cotizacion`.*, `detalle_cotizacion`.`id_cotizacion`
FROM `detalle_cotizacion`
WHERE `detalle_cotizacion`.`id_cotizacion` = '$NumPedido';");
		 $stock = mysqli_num_rows($con); 
		 
		 $pUP2= ejecutarSQL::consultar("SELECT `cotizacion`.*, `cotizacion`.`id_cotizacion`
FROM `cotizacion`
WHERE `cotizacion`.`id_cotizacion` = '$NumPedido';");
		 while($fila2=mysqli_fetch_array($pUP2)){
		//print_r($stock);
		
		
		 ?>
 <div class="col-md-12" style="    margin-top: 18px;" >
                        <div class="panel panel-default">
                            <div class="panel-heading bg-red">
                                <h3 class="panel-title"><i class="ion-ios-pricetags" >&nbsp;&nbsp;Articulos</i> <span>( <?php	echo  $stock;?> )</span>
                               &nbsp; <i class="fa fa-money" >&nbsp;&nbsp;Total</i> <span> ( <?php echo $currency; ?>&nbsp; <?php  echo  round( $fila2['GranTotal'],2 )?> )</span></h3>
                               <div class="pull-right">
                               <div id="res-update-pedido-<?php echo $NumPedido ?>"></div>
                              </div>
                             
                                <div class="actions pull-right">
									
									<i style="color:white;" class="fa fa-chevron-down"> Detalles</i>
                                </div>
                            </div>
                            
                            <div class="panel-body" style="display:none;">
							<?php } ?>
							<table class="table table-bordered ">
             <thead>
                        <tr>
                          <th>Item</th>
                          <th>Articulos Cotizados</th>
                          <th>Nº de Cotizacion</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                           <th>Opciones</th>
                        </tr>
                      </thead>
             <tbody>
             
            <?php 
            $upp=1;
            $NumPedido=$_GET['id_cotizacion'];
            $conFact= ejecutarSQL::consultar("SELECT `detalle_cotizacion`.*, `detalle_cotizacion`.`id_cotizacion`, `inventario`.`CodigoProd`, `inventario`.*, `cotizacion`.`id_cotizacion` FROM `detalle_cotizacion`, `inventario`, `cotizacion` WHERE `detalle_cotizacion`.`id_cotizacion` = '$NumPedido' AND `inventario`.`CodigoProd` = `detalle_cotizacion`.`CodigoProd` AND `cotizacion`.`id_cotizacion` = `detalle_cotizacion`.`id_cotizacion`;");
            while ($fila=mysqli_fetch_array($conFact)){
            echo '		<tr>
                          <td>'.$upp.'</td>
                          <td>'.$fila['Nombre'].'</td>
                          <td>'.$fila['id_cotizacion'].'</td>
                          <td>'.$fila['Cantidad'].'</td>
                          <td>'.$fila['Precio'].' Bs</td>
                          <td class="text-center"><a data-toggle="tooltip" data-placement="top" title="Ver" class="btn btn-primary btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> Ver Producto</a></td>
                        </tr>
            
             
							
				</tbody>
				
				   
            ';
            
            
            
            $upp=$upp+1;}  
                
              
				//print_r($upp);
		echo '	</table>	
				
				   
				    
                </div> 
               <div align="center" class="col-md-12" style="padding-top: 21px;">
				
				<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Enviar a Facturacion</button>
				 
				  </div> 
                
				   </form>	';
				?> 
				
				 
							

                							
</div> </div>


























