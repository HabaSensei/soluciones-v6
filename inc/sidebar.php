<?php

								if(!$_SESSION['NombreAfil']==""){echo ' 
									<ul class="nav">
						<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
						
						
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-cubes" style="font-size:16px;"></i>
						    <span style="color:white; letter-spacing: 3px;" >Articulos</span>
					    </a>
						<ul class="sub-menu">
						   														    
					    <li class="has-sub ">
						
					  
						    <li style=" letter-spacing: 3px;"> <a href="addStock_tec.php"><i class="fa fa-cubes"></i>&nbsp;Añadir Arti.</a></li>
						    <li  style=" letter-spacing: 3px;"><a href="actualizarStock.php"><i class="fas fa-search"></i>&nbsp;Ver Articulos.</a></li>
						   
						
						
						
					    </li>
					    
						</ul>
						
					</li>
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-list"></i>
						    <span style="color:white; letter-spacing: 3px;" >Categorias</span>
					    </a>
						<ul class="sub-menu">
						    <li style="color:white; letter-spacing: 3px;"><a href="anadirCat_inv.php"><i class="fas fa-plus-square"></i>&nbsp;Añadir Catego.</a></li>
						    <li  style="color:white; letter-spacing: 3px;"><a href="actualizarCat_inv.php"><i class="fas fa-search"></i>&nbsp;Ver Categoria.</a></li>
						</ul>
					</li>
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-list"></i>
						    <span style="color:white; letter-spacing: 3px;" >Reportes</span>
					    </a>
						<ul class="sub-menu">
						<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/producto/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>General.</span></a></li>
					<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Existente </span></a></li>
					<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/agotado/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Agotado</span></a></li>
					<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock_cliente/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Ventas</span></a></li>

						    </ul>
					</li>
					    </a>
						</li>
						<li class="active"><a href="clientes.php"><i class="fas fa-users fa-fw"></i> <span style="letter-spacing: 3px;">Clientes</span></a></li>
						
					
					<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
					</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
									
									';}
								
								else if(!$_SESSION['Nick_stock']==""){echo '  
									<ul class="nav">
						<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
						
						
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-file-alt"></i>
						    <span style="color:white; letter-spacing: 3px;" >Inventario</span>
					    </a>
						<ul class="sub-menu">
						   
						
						
					    
					    <li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-tag"></i>
						    <span style="color:white; letter-spacing: 3px;" >&nbsp;Ropa</span>
					    </a>
					    <ul class="sub-menu">
						    <li style=" letter-spacing: 3px;"> <a href="addStock_rop.php"><i class="fas fa-plus-square"></i>&nbsp;Añadir Art.</a></li>
						    <li  style=" letter-spacing: 3px;"><a href="actualizarStock_rop.php"><i class="fas fa-search"></i>&nbsp;Ver Art.</a></li>
						
						</ul>
						
						
					    
					    
					    </li>
					    
					    
						</ul>
						
					</li>
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-list"></i>
						    <span style="color:white; letter-spacing: 3px;" >Categorias</span>
					    </a>
						<ul class="sub-menu">
						    <li style="color:white; letter-spacing: 3px;"><a href="anadirCat_inv.php"><i class="fas fa-plus-square"></i>&nbsp;Añadir Cat.</a></li>
						    <li  style="color:white; letter-spacing: 3px;"><a href="actualizarCat_inv.php"><i class="fas fa-edit"></i>&nbsp;Ver Cat.</a></li>
						</ul>
					</li>
					<li class="active"><a href="../process/reportes/inventario/index.php"><i class="fa fa-sort-alpha-down"></i> <span>Reportes</span></a></li>
					<li class="active"><a href="../process/logout.php"><i class="fa fa-power-off"></i> <span>Cerrar Session</span></a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
									
									';}
								
								else if(!$_SESSION['Nick_ve']==""){echo ' 
									<ul class="nav">
						<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
						
						
					
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-list"></i>
						    <span style="color:white; letter-spacing: 3px;" >Cotización</span>
					    </a>
						<ul class="sub-menu">
						    <li style="color:white; letter-spacing: 3px;"><a href="cotizacion.php"><i class="fas fa-angle-right"></i>&nbsp;Cotizar Art.</a></li>
						    <li  style="color:white; letter-spacing: 3px;"><a href="pedido.php"><i class="fas fa-angle-right"></i>&nbsp;Ver Cotiz.</a></li>
						</ul>
					</li>
					
					<li class="active"><a href="../process/reportes/inventario/index.php"><i class="fa fa-sort-alpha-down"></i> <span>Reportes</span></a></li>
					<li class="active"><a href="../process/logout.php"><i class="fa fa-power-off"></i> <span>Cerrar Session</span></a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
									
									';}
								//~ <li style=" letter-spacing: 3px;"> <a href="modulo_factura.php"><i class="fas fa-angle-right"></i>&nbsp;Modulo Factura</a></li>
						            //~ <li  style=" letter-spacing: 3px;"><a href="busca_factura_pendiente.php"><i class="fas fa-angle-right"></i>&nbsp;Fact. Pendient</a></li>
						
								else if(!$_SESSION['Nick_Caja']==""){echo '  
									<ul class="nav">
						<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
						<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-file-alt"></i>
						    <span style="color:white; letter-spacing: 3px;" >Facturación</span>
					    </a>
						<ul class="sub-menu">
						    <li style=" letter-spacing: 3px;"> <a href="ecoFact.php"><i class="fas fa-angle-right"></i>&nbsp;Facturar Art.</a></li>
						    <li  style=" letter-spacing: 3px;"><a href="busca_factura.php"><i class="fas fa-angle-right"></i>&nbsp;Ver Fact.</a></li>
							</ul>
					</li>
						
						<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-file-alt"></i>
						    <span style="color:white; letter-spacing: 3px;" >Caja</span>
					    </a>
						<ul class="sub-menu">
							<li style=" letter-spacing: 3px;"> <a href="modulo_caja.php"><i class="fas fa-angle-right"></i>&nbsp;Modulo Caja</a></li>
						    
						</ul>
					</li>
					<li class="has-sub ">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-list"></i>
						    <span style="color:white; letter-spacing: 3px;" >Reportes</span>
					    </a>
						<ul class="sub-menu">
							<li style=" letter-spacing: 3px;"> <a href="reporte_caja.php    "><i class="fas fa-angle-right"></i>&nbsp;Log Importe</a></li>
						    <li style=" letter-spacing: 3px;"> <a href="reporte_ingresos.php"><i class="fas fa-angle-right"></i>&nbsp;Log Ingresos.</a></li>
						    <li  style=" letter-spacing: 3px;"><a href="reporte_egresos.php"><i class="fas fa-angle-right"></i>&nbsp;Log Egresos.</a></li>
						</ul>
					</li>
							
					<li class="active"><a href="../process/logout.php"><i class="fa fa-power-off"></i> <span>Cerrar Session</span></a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
									
									';}
								else{
								header("Location: ../login.php");
							    exit();
								
								}
								
								
								
								?>	
					
					
					
					
					
					
