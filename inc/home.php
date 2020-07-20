		<?php
		 $con1= ejecutarSQL::consultar("SELECT * from producto");
		 $prod = mysqli_num_rows($con1);
		 
		 $const=0;
		 
		 $con2= ejecutarSQL::consultar("select * from cotizacion_online where Estado = 0;");
		 $stock_espera = mysqli_num_rows($con2);
		 
		  $con3= ejecutarSQL::consultar("select * from cotizacion_online where Estado = 1;");
		 $stock = mysqli_num_rows($con3);
         
         $conOrden2= ejecutarSQL::consultar("SELECT * FROM `producto` ORDER BY `producto`.`nro_cot` DESC limit 1");
		 while($orden = mysqli_fetch_array($conOrden2)){
		 $user=$orden['nro_cot'];
		 $user2 = mysqli_num_rows($conOrden2);
		 //print_r($user);
		 }
		 
		 
		 
		 
         
        ?>
                
             
            <div class=" animated fadeInUp" style="width: 25%; display: -webkit-box; padding-left: 15px;">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-blue" style="margin-right: 10px;">
            <span class="info-box-icon"><i class="ion-ios-pricetags"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">productos online</span>
              <span class="info-box-number timer" data-from="0" data-to="<?php echo $prod ?>" data-speed="2500"></span>
			  <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
               <a href="anadirProd.php" style="color:white;" class="small-box-footer pull-right" title="Agregar" data-toggle="tooltip">Añadir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
         
          <div class="info-box bg-olive" style="margin-right: 10px;">
            <span class="info-box-icon"><i class="fa fa-sort-amount-desc"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pedidos Aprobados</span>
              <span class="info-box-number timer" data-from="0" data-to="<?php echo $stock ?>" data-speed="250"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
             <a href="pedido_aprobado.php" style="color:white;" class="small-box-footer pull-right" title="Agregar" data-toggle="tooltip">Ver Pedidos <i class="fa fa-arrow-circle-right"></i></a>
             </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-red" style="margin-right: 10px;">
            <span class="info-box-icon"><i class="fa fa-sort-amount-asc"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pedidos en espera</span>
              <span class="info-box-number timer" data-from="0" data-to="<?php echo $stock_espera ?>" data-speed="250"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
             <a href="pedido.php" style="color:white;" class="small-box-footer pull-right" title="Agregar" data-toggle="tooltip">Ver Pedidos <i class="fa fa-arrow-circle-right"></i></a>
             </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
           <div class="info-box bg-yellow" style="margin-right: 10px;">
            <span class="info-box-icon"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Prod. Mas Cotizados</span>
              <span class="info-box-number timer" data-from="0" data-to="<?php echo $user ?>" data-speed="250"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
             <a href="prodCotiza.php" style="color:white;" class="small-box-footer pull-right" title="Agregar" data-toggle="tooltip">Ver Productos <i class="fa fa-arrow-circle-right"></i></a>
             </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </div>
          <!-- /.info-box -->
          </div>
          <!-- /.info-box -->
			
			<section>
         <div class="row ">
                    <div class="col-md-12 animated fadeInDown" >
                        <div class="panel panel-default">
                            <div class="panel-heading bg-blue">
                                <h3 class="panel-title"><i class="ion-android-notifications"></i>&nbsp;&nbsp;Lista de cotizaciones</h3>
                                <div class="actions pull-right">
                                    <i style="color:white;" class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                              <div class="table-responsive">
                <table id="example2" class="table no-margin " >
                  <thead class="bg-blue">
                  <tr>
                    <th>Orden ID</th>
                    <th>Fecha </th>
                    <th>Cliente</th>
                    
                    <th>Total de Compra</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			//$ordenU=  ejecutarSQL::consultar("SELECT `venta`.* FROM `venta` LEFT JOIN `detalle` ON `detalle`.`Orden` = `venta`.`Orden` LEFT JOIN `producto` ON `detalle`.`CodigoProd` = `producto`.`CodigoProd`");
            
			$ordenU=  ejecutarSQL::consultar("select * from cotizacion_online where Estado = 0; ");
            
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
        
