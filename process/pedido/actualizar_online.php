	
                       <?php
             $NumPedido=$_GET['id_cotizacion'];
			 
			 $pUP=  ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`ID`, `clientes`.`NombreEmpresa`, `clientes`.`Telefono`, `clientes`.`Correo` FROM `cotizacion_online` LEFT JOIN `clientes` ON `cotizacion_online`.`ID` = `clientes`.`ID` WHERE ((`cotizacion_online`.`id_cotizacion` ='$NumPedido') )");
                   while($fila=mysqli_fetch_array($pUP)){
                        echo ' 
             <form method="post" action="process/updatePedido.php" id="res-update-pedido-'.$fila['id_cotizacion'].'">
                
                <div id="update-pedido" class="col-md-12" style="background:#bf5c01!important;">
              
              	    <label class="col-md-2">Nº de Cotizacion</label>
					<label class="col-md-3">Razon Social</label>
					<label class="col-md-2">Ruc / Dni</label>
					<label class="col-md-2">Nº de Celular </label>
                    <label class="col-md-2">Correo Electronico</label>
               
				 </div>
				 
				 <div  class="col-md-12" >
              
              	    <label class="col-md-2">'.$fila['id_cotizacion'].'</label>
					<label class="col-md-3">'.$fila['NombreEmpresa'].'</label>
					<label class="col-md-2">'.$fila['ID'].'</label>
					<label class="col-md-2">'.$fila['Telefono'].'</label>
                    <label class="col-md-2">'.$fila['Correo'].'</label>
               
				 </div>
				 
              '; } ?>
		          <?php
		           $NumPedido=$_GET['id_cotizacion'];
		 $con= ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`
FROM `detalle_cotizacion_online`
WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido';");
		 $stock = mysqli_num_rows($con); 
		 
		 $pUP2= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`
FROM `cotizacion_online`
WHERE `cotizacion_online`.`id_cotizacion` = '$NumPedido';");
		 while($fila2=mysqli_fetch_array($pUP2)){
		//print_r($stock);
		
		
		 ?>
 <div class="col-md-12" style="      margin-top: 18px;
    padding-left: 0;
    padding-right: 0;  " >
                        <div class="panel panel-default">
                            <div class="panel-heading bg-red">
                                <h3 class="panel-title"><i class="fa fa-pricetags" >&nbsp;&nbsp;Articulos Cotizados</i> <span>( <?php	echo  $stock;?> )</span>
                               &nbsp; <i class="fa fa-money" >&nbsp;&nbsp;Importe Total de Cotizacion</i> <span> ( <?php echo $currency; ?>&nbsp; <?php  echo  round( $fila2['GranTotal'],2 )?> )</span></h3>
                               <div class="pull-right">
                               <div id="res-update-pedido-<?php echo $NumPedido ?>"></div>
                              </div>
                             
                               
                            </div>
                            
                            <div class="panel-body" >
							<?php } ?>
							<table class="table table-bordered ">
             <thead>
                        <tr>
                          <th>Item</th>
                          <th>Articulos Cotizados</th>
                          <th>Nº de Cotizacion</th>
                          <th>Cantidad</th>
                          <th>P-Total</th>
                           <th>Opciones</th>
                        </tr>
                      </thead>
             <tbody>
             
            <?php 
            $upp=1;
            $NumPedido=$_GET['id_cotizacion'];
            $conFact= ejecutarSQL::consultar("SELECT
    `detalle_cotizacion_online`.*,
    `detalle_cotizacion_online`.`id_cotizacion`,
    `producto`.`CodigoProd`,
    `producto`.*,
    `cotizacion_online`.`id_cotizacion`
FROM
    `detalle_cotizacion_online`,
    `producto`,
    `cotizacion_online`
WHERE
    `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `cotizacion_online`.`id_cotizacion` = `detalle_cotizacion_online`.`id_cotizacion`;");
            while ($fila=mysqli_fetch_array($conFact)){
            echo '		<tr>
                          <td>'.$upp.'</td>
                          <td>'.$fila['NombreProd'].'</td>
                          <td>'.$fila['id_cotizacion'].'</td>
                          <td>'.$fila['Cantidad'].'</td>
                          <td>'.$fila['Precio'].'</td>
                          <td class="text-center"><a data-toggle="tooltip" data-placement="top" title="Ver" class="btn btn-primary btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> Ver Producto</a></td>
                        </tr>
            
             
							
				</tbody>
				
				   
            ';
            
            
            
            $upp=$upp+1;}  
                
              
				//print_r($upp);
		echo '	</table>	
				
				   
				    
                </div> 
               <div align="center" class="col-md-12" style="padding-top: 21px;">
				
				
				  </div> 
                
				   </form>	';
				?> 
				
				 
							

<!--
<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Imprimir Cotizacion</button>
-->
				 























