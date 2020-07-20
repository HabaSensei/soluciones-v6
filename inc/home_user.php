
<?php
		 $con1= ejecutarSQL::consultar("SELECT * from producto");
		 $prod = mysqli_num_rows($con1);
		 
		 $const=0;
		 
		 $con2= ejecutarSQL::consultar("SELECT * from cotizacion_online  ");
		 $stock = mysqli_num_rows($con2);
		 
		 $const=0;
		 
		 $con3= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` =$const  ");
		 $stock_agotado = mysqli_num_rows($con3);
        ?>




<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item active">Panel Principal</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Panel Principal <small></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-4 col-md-6">
					<div class="widget widget-stats bg-blue-darker">
						<div class="stats-icon"><i class="fa fa-tags"></i></div>
						<div class="stats-info">
							<h4>LISTA DE PRODUCTOS</h4>
							<p><?php echo $prod ?></p>	

						</div>
						<div class="stats-link">
							<a href="actualizarStock.php">Ver Articulos <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-4 col-md-6">
					<div class="widget widget-stats bg-red-darker">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>ARTICULOS AGOTADOS.</h4>
							<p><?php echo $stock_agotado ?></p>	
						</div>
						<div class="stats-link">
							<a href="actualizarStockAgotado.php">Ver Articulos<i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-4 col-md-6">
					<div class="widget widget-stats bg-orange-darker">
						<div class="stats-icon"><i class="fa fa-list"></i></div>
						<div class="stats-info">
							<h4>LISTA DE COTIZACIONES.</h4>
							<p><?php echo  $stock ?></p>	
<!--
							
-->
						</div>
						<div class="stats-link">
							<a href="javascript:;">Ver Cotizaciones <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				
				<!-- end col-3 -->
			</div>
			 <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Lista de Pedidos</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
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




                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
					
					
					
