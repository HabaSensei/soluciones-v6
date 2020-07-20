<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php

include '../../../library/configServer.php';
include '../../../library/consulSQL.php';
include '../../../process/securityPanel.php';

?>
<!DOCTYPE html>

<html >

<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elysium Market - Shopping Online</title>
    <link rel="shortcut icon" href="../../../images/favicon.png" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link href="../../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/plugins/data/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/plugins/dropzone/css/basic.css">
	<link rel="stylesheet" href="../../assets/plugins/dropzone/css/dropzone.css">
	<script src="../../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../assets/js/admin.js"></script>
   </head>

<body>
	
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="../../index.php"><img src="../../assets/img/Sintítulo.png"></a>
            </div>
            <!--logo end-->
            
            <div class="user-nav">
                <ul>
                    
                    <li class="profile-photo">
                        <img src="../../assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
						<?php include '../../inc/link3afil.php'; ?>
                     
						<ul class="dropdown-menu animated fadeInDown">
											<li>
												<a href="#"><i class="fa fa-user"></i> Perfil</a>
											</li>
											<li>
												<a href="../../../process/logout.php"><i class="fa fa-power-off"></i> Cerrar Session</a>
											</li>
										</ul>
									</li>
									<li>
										
									</li>
                </ul>
            </div>

        </header>
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="../../index.php"><i class="fa fa-dashboard"></i><span>HOME</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Productos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="../../añadirProd.php"><i class="fa fa-plus-square"></i> Añadir Producto</a>
                            </li>
                            <li><a href="../../actualizarProd.php"><i class="fa fa-refresh"></i> Actualizar Producto</a>
                            </li>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Categoria</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="../../añadirCat.php"><i class="fa fa-plus-square"></i> Añadir Categoria</a>
                            </li>
                            <li><a href="../../actualizarCat.php"><i class="fa fa-refresh"></i> Actualizar Categoria</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="sub-menu">
						<a href="../../pedido.php"><i class="fa fa-external-link"></i><span>Pedidos</span></a>
                    </li>
                    <li class="sub-menu">
						<a href="../../pedido.php"><i class="fa fa-tasks"></i><span>Facturación</span></a>
                    </li>
                    <li class="sub-menu">
						<a href="../../pedido.php"><i class="fa fa fa-barcode"></i><span>Reportes</span></a>
                    </li>
                </ul>
            </div>

        </aside>

        
        <section class="main-content-wrapper" >
            <section id="main-content">
			
			
		
				
              <section   >
			
			<?php 
				 
				 $ordenList= $_GET['CodigoCat'];
				 
				 
				print_r($ordenList);
				 ?>
				 
				 <div class="col-xs-12 col-sm-6" style="margin-left:25%;">
                            <br><br>
                            
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Actualizar categoría</h2>
                                <form  role="form" action="actualizar.php" method="post" >
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="<?php echo $ordenList; ?>" readonly>
                                        <input class="form-control" type="text" name="categ-code"  maxlength="9" required="" value="<?php echo $ordenList; ?>" readonly>
                                    </div>
                                    <?php 
														$consul2=  ejecutarSQL::consultar("SELECT `catego`.*, `catego`.`CodigoCat` FROM `catego` WHERE (`catego`.`CodigoCat` like '".$ordenList."')");
														while($data=mysqli_fetch_array($consul2)){
															$nombre=$data['Nombre'];
															$descri=$data['Descripcion'];
															
															
														}
														?>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Nombre de categoria" maxlength="30"  value="<?php echo $nombre ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripcióne de categoria"  value="<?php echo $descri ?>">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Actualizar categoría</button></p>
                                    <br>
                                    
                                </form>
                            </div>
                        </div>
 </section> 
 
  
  
         
				 
			</section>
	<!--Global JS-->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="../../assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="../../assets/plugins/data/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../assets/plugins/data/datatables.net-bs/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <!--Load these page level functions-->
    
           


</body>
 
</html>
