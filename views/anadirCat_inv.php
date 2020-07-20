<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
    
	include '../library/configServer.php';
	include '../library/consulSQL.php';
	include '../process/securityPanel.php';
?>
	
	
	<html lang="en"><!--<![endif]--><head>
	<meta charset="utf-8">
	 <title>::  Hab.System ::</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	
	<?php include '../inc/header.php'   ?>
	<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->
<!--
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
-->
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a  data-toggle="nav-profile">
							
							<div class="info">
								
								<?php

								if(!$_SESSION['NombreAfil']==""){echo ' '.$_SESSION['NombreAfil'].' <small>Modulo de Administración</small>';}
								
								else if(!$_SESSION['Nick_stock']==""){echo ' '.$_SESSION['Nick_stock'].'<small>Modulo de Almacen</small> ';}
								
								else if(!$_SESSION['Nick_ve']==""){echo ' '.$_SESSION['Nick_ve'].'<small>Modulo de Ventas</small> ';}
								
								else if(!$_SESSION['Nick_Caja']==""){echo ' '.$_SESSION['Nick_Caja'].'<small>Modulo de Caja</small> ';}
								else{
								header("Location: ../login.php");
							    exit();
								
								}
								
								
								
								?>
								
							</div>
						</a>
					</li>
					
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header active">Mapa del Sitio</li>
					
					<?php 
					 $CodArea = $_SESSION['CodigoArea'];
					 switch ($CodArea) {
						 case 1:
							include '../inc/sidebar.php';
						break;
						 
						case 2:
							 
							include '../inc/sidebar_ventas.php';
							 
						 break;
					 }
					 ?>
					
				<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Inventario</a></li>
				<li class="breadcrumb-item active">Añadir catego</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Añadir catego<small> Modulo de Almacen</small></h1>
            
             
       <div class="panel panel-inverse"  style="">
                        <!-- begin panel-heading -->
                        <div class="panel-heading ">
                            
                            <h4 class="panel-title">Formulario de registro de categos <label style="float:right;"><div id="res-form-add-categoria" style=""></div> </label></h4>
                        </div>
                    <!-- begin panel-body -->
                        <div class="panel-body" id="add-categoria">
				
        <div class="col-xs-12 col-sm-6" style="margin-left:25%;">
                            <br><br>
                           
                            <?php  
                                    $codi=  ejecutarSQL::consultar("SELECT `categoria`.`CodigoCat` from categoria WHERE CodigoCat = (SELECT MAX(CodigoCat) from categoria)");
                                    while($codigo=mysqli_fetch_array($codi)){ 
									$codig=$codigo['CodigoCat'];
									
									
									}
                                    
                                    //print_r($codig);
                                    ?>
                           
                           <?php 
								$cod=ejecutarSQL::consultar("SELECT RIGHT(CodigoCat,5) as CodigoCat FROM categoria WHERE `categoria`.`CodigoCat` = '".$codig."';");
								$verificaltotal = mysqli_num_rows($cod);
													 if($verificaltotal<=0){
														 $codigo1="CA00000";
														 }else {
								while($codigo=mysqli_fetch_array($cod)){
								$codigo=$codigo['CodigoCat']+1;
								$repo   = str_pad($codigo, 5, "0", STR_PAD_LEFT);
								$codigo1 = "CA$repo";
							//print_r($codigo1);
								}
							}
								?>
                                
                                <form action="../process/categoria/regcategori_inv.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Código de Categoria</label>
                                        <input class="form-control" type="text" name="categ-code" placeholder="Código de categoria" maxlength="9" required="" value="<?php echo $codigo1;  ?>" autocomplete="off" readonly>
                                    </div>
                                     <div class="form-group" style="display:none;">
                                        <label>Rubro de Categoria</label>
                                        <select class="form-control" name="categ-rubro" readonly>
									  <option value="rop">Informatica</option>
<!--
                                <option value="tec">Tecnologia</option>
                              
                                <option value="fer">Ferreteria</option>
                                <option value="med">Medicina</option>
                                <option value="be">Belleza</option>
-->
                                
                                </select>
                                       
                                        </div>
                                    <div class="form-group">
                                        <label>Nombre de Categoria</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Nombre de Categoria" maxlength="30" required="" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción de Categoria</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripcióne de Categoria" required="" autocomplete="off">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar Categoría</button></p>
                                    <br>
                                    <div id="res-form-add-categoria" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
         
          </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                  </div>             
             
  <?php include '../inc/scripts_interno.php' ?>

</body>

</html>
