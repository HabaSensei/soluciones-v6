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
				<li class="breadcrumb-item active">Actualizar Categoria</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Actualizar Categoria  <small> Modulo de Almacen</small></h1>
              
       <div class="panel panel-inverse"  style="">
                        <!-- begin panel-heading -->
                        <div class="panel-heading ">
                            
                            <h4 class="panel-title">Formulario de Actualización de Categoria <label style="float:right;"><div id="res-form-update-categoria" style=""></div> </label></h4>
                        </div>
                    <!-- begin panel-body -->
                        <div class="panel-body"  id="update-categoria">
				
        <div class="col-xs-12 col-sm-6" style="margin-left:25%;">
                            <br><br>
        
			
			<?php 
				 
				 $ordenList= $_GET['CodigoCat'];
				 
				 
				 //print_r($ordenList);
				 ?>
				 
                                <form  role="form" action="../process/categoria/actualizar.php" method="post" >
                                    <div class="form-group">
                                        <label>Código de Categoria</label>
                                        <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="<?php echo $ordenList; ?>" readonly>
                                        <input class="form-control" type="text" name="categ-code"  maxlength="9" required="" value="<?php echo $ordenList; ?>" readonly>
                                    </div>
                                    <?php 
														$consul2=  ejecutarSQL::consultar("SELECT `categoria`.*, `categoria`.`CodigoCat` FROM `categoria` WHERE (`categoria`.`CodigoCat` like '".$ordenList."')");
														while($data=mysqli_fetch_array($consul2)){
															$nombre=$data['Nombre'];
															$descri=$data['Descripcion'];
															
															
														}
														?>
                                    <div class="form-group">
                                        <label>Rubro de Categoria</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Rubro de Categoria" maxlength="30"  value="<?php echo $nombre ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción de Categoria</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripción de Categoria"  value="<?php echo $descri ?>">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Actualizar categoría</button></p>
                                    <br>
                                    
                                </form>
                            </div>
                        </div>
 </div>
 
  
  
         
				 
			
	  <?php include '../inc/scripts_interno.php' ?>
           


</body>
 
</html>
