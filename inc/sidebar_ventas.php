<?php

							 if($_SESSION['CodigoArea']=2){echo ' 
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
						<li  style="color:white; letter-spacing: 1px;"><a href="../process/reportes/stock_vendedor/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>General.</span></a></li>
                        <li  style="color:white; letter-spacing: 1px;"><a href="../process/reportes/agotado/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Agotado</span></a></li>
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
								 
								
								else{
								header("Location: ../login.php");
							    exit();
								
								}
								
								
								
								?>	
					
					
					
					
					
					
