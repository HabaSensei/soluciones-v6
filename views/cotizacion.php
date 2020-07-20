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
	
	<div id="page-container" class="fade page-sidebar-default page-header-default">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" style="     border-right: 2px solid #2a2327;   position: fixed;" class="navbar-brand"><span class="navbar-logo"></span> <b>Panel</b> Admin</a>
				
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<?php include '../inc/cotizador.php' ?>
			</div>
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
				<li class="breadcrumb-item"><a href="javascript:;">Cotizaciónes</a></li>
				<li class="breadcrumb-item active">Cotizar Articulos</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Cotizar Articulos  <small> Modulo de Ventas</small></h1>
			<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Tabla Busqueda de Articulos</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
			<div class="table-responsive " style="padding: 15px 15px 0;">
							<table id="example2" class="table  table-bordered  animated bounce" >          
				        
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
					</div>
						</div>
                    
			

          
    <?php include '../inc/scripts.php';  ?>
	
</body>

</html>

