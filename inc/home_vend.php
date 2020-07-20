	<?php
		 $con1= ejecutarSQL::consultar("SELECT * from inventario");
		 $prod = mysqli_num_rows($con1);
		 
		 $const=0;
		 
		 $con2= ejecutarSQL::consultar("select * from cotizacion where Estado = 0;");
		 $stock_espera = mysqli_num_rows($con2);
		 
		 
		 $con3= ejecutarSQL::consultar("select * from cotizacion where Estado = 1;");
		 $stock = mysqli_num_rows($con3);
         
         $conOrden2= ejecutarSQL::consultar("SELECT `facturas`.`estado_factura`, `facturas`.*FROM `facturas`WHERE `facturas`.`estado_factura` = 'por cobrar';");
		 while($orden = mysqli_fetch_array($conOrden2)){
		 $user=$orden['nro_cot'];
		 $user2 = mysqli_num_rows($conOrden2);
		 //print_r($user);
		 
		 
		 $con4= ejecutarSQL::consultar("SELECT `facturas`.`estado_factura`, `facturas`.*FROM `facturas`WHERE `facturas`.`estado_factura` = 'por cobrar';");
		 $factura = mysqli_num_rows($con4);
		 
		 
		 }
		 ?>
	<?php include '../library/config.php'; ?>
	
	<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item active">Panel Principal</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Modulo de Ventas<small></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-blue-darker">
						<div class="stats-icon"><i class="fa fa-tags"></i></div>
						<div class="stats-info">
							<h4>ARTICULOS</h4>
							<p><?php echo $prod ?></p>	
						</div>
						<div class="stats-link">
							<a href="actualizarStock.php">Ver Articulos <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-red-darker">
						<div class="stats-icon"><i class="fa fa-list-ol"></i></div>
						<div class="stats-info">
							<h4>COTIZACIONES ESPERA.</h4>
							<p><?php echo $stock_espera ?></p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">Ver Cotizaciónes <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-green-darker">
						<div class="stats-icon"><i class="fa fa-check"></i></div>
						<div class="stats-info">
							<h4>COTIZACIONES APROB.</h4>
							<p><?php echo $stock ?></p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">Ver Cotizaciónes <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>FACTURAS POR COBRAR</h4>
							<p><?php echo $factura ?></p>	
						</div>
						<div class="stats-link">
							<a href="busca_factura_pendiente.php">Ver Facturas <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Tabla Busqueda de Articulos</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
	<div class="table-responsive">
								 <table id="example2" class="table table-condensed">      
				 <thead class="bg-blue">
                  <tr>
                    <th>ID</th>
                    <th>Articulos</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Opciones</th>
                    
                  </tr>
                  </thead>
                  <tbody >
				<?php
            
			
			$ordenU=  ejecutarSQL::consultar("SELECT `inventario`.*, `perfil`.* FROM `inventario` , `perfil`;");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				$cod=$ordenP['CodigoProd'];
				$sku=$ordenP['Sku'];
				$serial=$ordenP['Serial'];
				$nombre=$ordenP['Nombre'];
				$marca=$ordenP['Marca'];
				$modelo=$ordenP['Modelo'];
				$precio=$ordenP['Precio'];
				$cat=$ordenP['CodigoSubCat'];
				$stock=$ordenP['Stock'];
				$estatus=$ordenP['Estatus'];
				$ingreso=$ordenP['Fecha_ingreso'];
				$salida=$ordenP['Fecha_salida'];
				$ganancia=$ordenP['ganancia'];
				$medioPago=$ordenP['medio'];
				
				$totalImpuesto = ($ganancia + $medioPago);
				
				$totalPrecio = round($precio * ($totalImpuesto / 100) + $precio);
				
					?>
					 
				
				
				
                 <tr>
                    <td><?php echo $cod ?></td>
                   
                      <td><?php echo $nombre ?></td>
                      <td>S/ <?php echo $totalPrecio ?></td>
                      
                      
                       
                      
                   
                    <td><?php echo $stock ?></td>
                    
                    
                    
                      
            <td class="text-center with-btn-group" >
			<form class="coti-form" style="     margin-bottom: 0px;"      > 
			<input name="product_qty" type="hidden" value="1">
			<input name="medio" type="hidden" value="<?php echo $ordenP['medio']; ?>">
			<input name="ganancia" type="hidden" value="<?php echo $ordenP['ganancia'] ?>">
			<input name="product_descPorc" type="hidden" value="0">
			<input name="sku" type="hidden" value="<?php echo $ordenP['Sku'] ?>">
			<input name="marca" type="hidden" value="<?php echo $ordenP['Marca'] ?>">
			<input name="modelo" type="hidden" value="<?php echo $ordenP['Modelo'] ?>">
            <input name="CodigoProd" type="hidden" value="<?php echo $ordenP['CodigoProd'] ?>">
            <button id="ca" class="btn bg-blue-darker my-cart-btn" style="background-color: #3498db; font-size: 14px;     margin-bottom: 0px;   color: white;" type="submit"><i  class="fa fa-edit"></i> Añadir</button>
            
            </td>
                  </tr>
            </form>
            
            
			<?php
           
            $upp=$upp+1;}
            ?> 
            </tbody>
				</table>
					</div></div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
