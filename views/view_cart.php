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
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a  data-toggle="nav-profile" style="">
							
							<div class="info">
			                    <?php
								if(!$_SESSION['NombreAfil']==""){echo ' '.$_SESSION['NombreAfil'].'<small>Modulo de Administración</small>';}
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
				<li class="breadcrumb-item"><a href="javascript:;">Cotización</a></li>
				<li class="breadcrumb-item active">Cotizador de Articulos</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Cotizador de Articulos  <small> Modulo de Almacen</small></h1>
            
        
       
	<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Cesta de Articulos Cotizados</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
  <main>
	  <div  id="view_cart" >
            <div class="cart-section ">
				<?php		
				if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) { 
				?>
				<table class="table   shopping-cart animated fadeInUp" id="shopping-cart-results">
					<thead>
						<tr>
							<th >
								Producto
							</th>
							<th >
								Precio
							</th>
							<th  >
								Cantidad
							</th>
							<th>
								% Descuento
							</th>
							<th >
								Total Descuento
							</th>
							<th >
								SubTotal
							</th>
							<th>
								Remover
							</th>
						
				</tr>
				</thead>
				<tbody >
					<?php
				$cart_box = '<ul class="cart-products-loaded">';
				$total = 0;
				$cart_box = '';
				
				foreach($_SESSION["products"] as $product){					
					$product_img = $product["Imagen"]; 
					$product_name = $product["NombreProd"]; 
					$product_ganancia = $product["ganancia"];
					$product_price = $product["Precio"];
					$product_modelo = $product["Modelo"];
					$product_sku = $product["Sku"];
					$product_marca = $product["Marca"];
					$product_code = $product["CodigoProd"];
					$product_qty = $product["product_qty"];
					$product_descPorc = $product["product_descPorc"];
					$product_medio = $product["medio"];
					
					$result = ($product_medio + $product_ganancia );
					
					$product_price_total= ($product_price * $result / 100 + $product_price);
					$subtotal = ($product_price_total * $product_qty );
					$descPorcVer = ( $subtotal * $product_descPorc / 100 );
					$total = ($total + $subtotal - $descPorcVer);
					
				?>
						<tr>
							<td >
								<?php echo $product_name; ?>
							</td>
							
							<td >
								<?php echo $currency; echo sprintf("%01.2f", ($product_price_total)); ?>
							</td>
							<td style="width: 10%;">
								<input type="number" style="    width: 100%;" data-code="<?php echo $product_code; ?>" class="form-control  text-center  quantity" value="<?php echo $product_qty; ?>">
							</td>
							<td style="width: 12%;">
							<input type="text" style="    width: 100%;" data-code="<?php echo $product_code; ?>" class="form-control  text-center descPorc "  value="<?php echo $product_descPorc;?> "><span style=" margin-top: -28px;  margin-left: 69px;   position: absolute;">&#37;</span>
							</td>
							<td style="width: 15%;">
							<?php  echo $currency; echo sprintf("%01.2f",($descPorcVer));?>
						    <td>
						  <?php echo $currency; echo sprintf("%01.2f", round($product_price_total * $product_qty - $descPorcVer)); ?>
							<input type="hidden" id="descuento" name="descuento" value=" <?php echo $descPorcVer; ?>">
				            </td>
							
							<td colspan="2" class="options">
								<a href="#" class="btn btn-danger remove-item" data-code="<?php echo $product_code; ?>"><i style="color:white;" class="fa fa-trash"></i></a>  
							</td>
						</tr>
			 <?php } ?>
							<tfoot>
			
			<tr>
			<td></td>
			<td colspan="6"></td>
			
			
			
			
					
			
			
			
			
			
						
					</tbody>
				</table>

				<div class="cart-options clearfix" style="    margin-top: -28px;">
							
				<div class="row">
					<div  style="    margin-left: 71%;">
						<?php 
						
			if(isset($total)) {
			
			?>	
						<ul class="totals-table" style="">
							
							<?php 
							
							
							
							$grand_total = $total ;
							foreach($taxes as $key => $value){
									$tax_amount = round($total * ($value / 100));
									$tax_item[$key] = $tax_amount;
									$grand_total = round($total + $tax_amount); 
							}	
							foreach($tax_item as $key => $value){
								$list_tax .= $key. ' : '. $currency.number_format($value,2).'<br />';
							}	
							//$shipping_cost = ($shipping_cost)?'Costo de envio : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
							//$shipping_cost
							$cart_box .= "<span style='text-transform:none;'>SubTotal: $currency ".number_format ($total,2)."  </span><br><span >$list_tax  </span><hr> <span >Monto Total : $currency ".sprintf("%01.2f", $grand_total)."</span>";	
							?>
							</li>
							<li style="    list-style: none;" class="clearfix total"><span style="float:right;" class="col"><?php echo $cart_box; ?></span>
							
						</ul>
						
						<a href="checkout.php" style="margin-bottom: 9px;" class="btn btn-primary btn-block"> Confirmar <i class="fa fa-chevron-right"></i> </a>
						<a style="float:left; color:white;     margin-right: 7px;"  href='cotizacion.php' class='btn btn-warning'><i class='fa fa-chevron-left'></i> Continuar Cotizando</a>
						<a style="float:right; color:white;" href='../process/limpiar_interno.php' class='btn btn-danger'><i class='fa fa-trash'></i> Limpiar Cotizador</a>
		   	
					<?php } ?>
					<?php		
					} else {
						echo "
						<table style='margin:0%;' class='table table-striped cart-list shopping-cart'>
							<thead>
								<tr>
									<th>
										Producto
									</th>
									<th>
										Precio
									</th>
									<th>
										Cantidad
									</th>
									<th>
										Descuento
									</th>
									<th>
										SubTotal
									</th>
									<th>
										Remove
									</th>
								<th>&nbsp;</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<tr>
							<td>
								<h3>Cotizador Vacio </h3>
							</td>
							<td>
								
							</td>
							<td>
								
									
							</td>
							<td>
						  
							</td>
							<td class='options'>
								
								</td>
						</tr>
			 
							<tfoot>
			<br>
			<br>
			<tr>
			<td><a href='cotizacion.php' class='btn btn-warning ' id='necio' ><i class='fa fa-chevron-left'></i> Continuar Cotizando</a></td>
			<td colspan='4'></td>
			
			
			<td></td>
			
					
			
			<tfoot>
			<br>
			<br>
			
			
						
					</tbody>
				</table>
				
				
				";
			?>
		   				<?php } ?>	
						
						
					</div>
				</div>
			</div>
		</div><!--/container-->
	</main><!-- End main -->

 
 </div></div></div>
	  
<?php include '../inc/scripts.php' ?>


</body></html>




