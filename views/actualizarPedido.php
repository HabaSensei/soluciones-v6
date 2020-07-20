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
	include_once("../library/config.inc.php");
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
				<li class="breadcrumb-item"><a href="javascript:;">Modulo Cotizaación</a></li>
				<li class="breadcrumb-item active">Detalles de Cotización</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Detalles de Cotización <small> Modulo de Cotización</small></h1>
            
             
       
         
        <section class="main-content-wrapper ">
            <section id="main-content" style="padding: 0px 0px 0;">
				
        <div class="panel panel-info"    >
                      	
                    
         </div>
         
			</section>
			<?php include '../process/pedido/actualizar.php'; ?>
            </section>
            
          
        </section>
     
    </section>
     <?php include '../inc/scripts.php' ?>
     
        
		
</body>

</html>
