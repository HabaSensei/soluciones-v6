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
				<li class="breadcrumb-item active">Confirmar Cotización </li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Confirmar Cotización  <small> Modulo de Almacen</small></h1>
            
        
       
	<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Datos del Cliente</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
	 <main>
        <div >
			<div class="checkout-page">

		

			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="billing-details">
						<div class="shop-form">
							<form method="post" role="form"  id="datos_cotizacion" > 
								<!--action="process/RegCotiza.php" onsubmit="return envia()" --> 
								
								<div class="row animated fadeInUp" >
									<div class="form-group col-md-6 col-sm-6 col-xs-12" style="    margin-bottom: 0px;">
										<fieldset style=" float: left; width: 100%; ">
										  <label>Ruc <sup>*</sup></label>
										  <div class="input-group">
											<input class="form-control" id="ruc" name="ruc" value="" maxlength="11" placeholder="Buscar Cliente" autocomplete="off" pattern="[0-9]{11}" required autofocus>
												<span class="input-group-addon "><button type="submit" onclick="busqueda(this); return false" ><i class="fa fa-search"></i></span></button>
												<img src="ajax.gif" class="ajaxgif hide" style="position: absolute; margin-top: -10px; margin-left: 13px;">
													 </div>
													
										</fieldset>
										
									</div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label>Razón Social<sup>*</sup></label>
										<input type="text" name="nombre" id="nombre"  placeholder="Razón Social" class="form-control" required>
									</div>

									
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label>Correo <sup>*</sup></label>
										<input type="email" name="correo" id="correo" value="" placeholder="jhon@gmail.com" class="form-control" required>
									</div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label>Telefono <sup>*</sup></label>
										<input type="text" name="telefono" id="telefono" value="" placeholder="0044 43345523" class="form-control" required>
									</div>
									
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<label>Dirección <sup>*</sup></label>
										<input type="text" name="direccion" id="direccion" value="" placeholder="Dirección" class="form-control" required>
									</div>
										<label>&nbsp;&nbsp;&nbsp;&nbsp;Todos los campos <sup>(*)</sup> son obligatorios</label>
									<?php 
													 $cod1=ejecutarSQL::consultar("SELECT RIGHT(id_cotizacion,6) as coti FROM cotizacion");
													 $verifica1 = mysqli_num_rows($cod1);
													 if($verifica1<=0){
														 $code1="C000000";
														 }else {
													 while($array=mysqli_fetch_assoc($cod1)){
													 $code1=$array['coti']+1;
													 $repo1   = str_pad($code1, 6, "0", STR_PAD_LEFT);
													 $code1 = "C$repo1";
													 //print_r($code1);
													  } }
											
									
											 
									$perfil=  ejecutarSQL::consultar("select * from perfil");
									while($per=mysqli_fetch_array($perfil)){ 
									$prefijo=$per['prefijo'];
											 }
									?>
									<?php
									$cod=ejecutarSQL::consultar("SELECT RIGHT(numero_factura,6) as Codfactura FROM facturas");
									$verifica = mysqli_num_rows($cod);
									if($verifica<=0){
									$code="000001";
									//print_r($code);
									}else {
									while($codigo=mysqli_fetch_assoc($cod)){
									$code2=$codigo['Codfactura']+1;
									$repo   = str_pad($code2, 6, "0", STR_PAD_LEFT);
									$code = "$repo";
									//print_r($verifica);
									} }
									
									
										?>
									
									<input type="hidden" name="numero_fact" id="numero_fact" value="<?php echo $code ?>">	
									<input type="hidden" name="prefijo" id="prefijo" value="<?php echo $prefijo ?>">
									<input type="hidden" name="CodCotiza" id="CodCotiza" value="<?php echo $code1 ?>">
									<input type="hidden" name="fecha" id="fecha" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
									
								</div>
							
						</div>
					</div><!--End Billing Details-->
				</div><!--End Col-->

				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="place-order add_bottom_30">
						<div class="default-title">
							<h2>Confirmar Cotización</h2>
						</div>
						<div class="payment-options" style="        margin-bottom: 41px;">
						
						
						<style>
							
							.rule {
  margin: 10px 0;
  border: none;
  height: 1.5px;
  background-image: linear-gradient(left, #f0f0f0, #c9bbae, #f0f0f0);
}

/* ===== Select Box ===== */
.sel {
  font-size: 12px;
  display: inline-block;
  margin: 3em 2em;
  width: 350px;
  background-color: transparent;
  position: relative;
  cursor: pointer;
}

.sel::before {
  position: absolute;
  content: '\f063';
  font-family: 'Font Awesome\ 5 Free;';
  font-size: 2em;
  color: #ffffff;
  right: 20px;
  top: calc(50% - 0.5em);
}

.sel.active::before {
  transform: rotateX(-180deg);
}

.sel__placeholder {
  display: block;
  font-family: 'Quicksand';
  font-size: 2.3em;
  color: #838e95;
  padding: 0.2em 0.5em;
  text-align: left;
  pointer-events: none;
  user-select: none;
  visibility: visible;
}

.sel.active .sel__placeholder {
  visibility: hidden;
}

.sel__placeholder::before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0.2em 0.5em;
  content: attr(data-placeholder);
  visibility: hidden;
}

.sel.active .sel__placeholder::before {
  visibility: visible;
}

.sel__box {
  position: absolute;
  top: calc(100% + 4px);
  left: -4px;
  display: none;
  list-style-type: none;
  text-align: left;
  font-size: 1em;
  background-color: #FFF;
  width: calc(100% + 8px);
  box-sizing: border-box;
}

.sel.active .sel__box {
  display: block;
  animation: fadeInUp 500ms;
}

.sel__box__options {
  display: list-item;
  font-family: 'Quicksand';
  font-size: 1.5em;
  color: #838e95;
  padding: 0.5em 1em;
  user-select: none;
}

.sel__box__options::after {
  content: '\f00c';
  font-family: 'FontAwesome';
  font-size: 0.5em;
  margin-left: 5px;
  display: none;
}

.sel__box__options.selected::after {
  display: inline;
}

.sel__box__options:hover {
  background-color: #ebedef;
}

/* ----- Select Box Black Panther ----- */
.sel {
  border-bottom: 4px solid rgb(0, 108, 255);
}

.sel--black-panther {
  z-index: 3;
}

/* ----- Select Box Superman ----- */
.sel--superman {
/*   display: none; */
  z-index: 2;
}

/* ===== Keyframes ===== */
@keyframes fadeInUp {
  from {
    opacity: 1;
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}
</style>
					<div class="sel sel--black-panther animated fadeInUp" style="margin-top: 0px;">
						  <select name="option" id="option">
							<option value="" style="color:red;" disabled>Tipo de Comprobante</option>
							<option value="1">Factura</option>
							<!--<option value="2">Boleta</option>-->
							<option value="3">Nota de venta</option>
						  </select>
						</div>
						<hr class="rule">
						</div>
						<!--<a type="button" href="#" value="Confirmar" target="_blank" class='btn btn-success'  onClick="document.form.action='process/RegCotiza.php'; document.form.submit();"></a>-->
							<div class="sel sel--black-panther animated fadeInUp" style="margin-top: 0px;     margin-bottom: 65px;">
						  <select name="estatus" id="estatus">
							<option value="" disabled>Estatus</option>
							<option value="1">Aprobado</option>
							<!--<option value="2">Boleta</option>-->
							<option value="3">A la espera de revisión</option>
						  </select>
						</div>
						<hr class="rule">
						</div>	
							
							
							
							
							
							
							
							
							
						<button type="submit"  class="btn btn-primary btn-block" style="color: #fdfdfd;    font-weight: 600; font-size: 18px;"> Confirmar <i class="fa fa-chevron-right"></i></button>
						<a style="float:left; width:100%;     color: #fdfdfd;    font-weight: 600;     font-size: 14px;" href='cotizacion.php' class='btn btn-warning'><i class="fa fa-chevron-left"></i> CONTINUAR COTIZANDO</a>
						
					</div><!--End Your Order-->
					</div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 " style=" display:none;    margin-top: 3%;">
					<div class="your-order">
						
						<?php
						if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
							$total = 0;
							$list_tax = '';
							?>	
						<div class="default-title" style="margin-bottom:0;">
							<h2>Tu Cotización</h2>
						</div>
						<ul class="orders-table"><?php			
						$cart_box = '';
						
						foreach($_SESSION["products"] as $product){
							$product_img = $product["Imagen"]; 
							$product_name = $product["NombreProd"];
							$product_sku = $product["Sku"];
							$product_qty = $product["product_qty"];
							$product_price = $product["Precio"];
							$product_code = $product["CodigoProd"];
							$product_descPorc = $product["product_descPorc"];
							$product_ganancia = $product["ganancia"];
							$product_medio = $product["medio"];
					
							$result = ($product_medio + $product_ganancia );
					
				            $product_price_total= round($product_price * $result / 100 + $product_price);		
							$item_price = sprintf("%01.2f",($product_price_total * $product_qty)); 
							$descPorcVer = ( $item_price * $product_descPorc / 100 );	
							
								
							?>
							<li class="clearfix">
							<div class="col" style="text-transform:none;">
							<?php echo $product_name; ?>&nbsp;&nbsp; 
							</div>
							<div class="col second" style="text-transform:none;">
								<strong style="float:left;">Precio Unid. <?php echo   $currency; echo $product_price_total; ?></strong>
								
								<strong style="padding-right: 15%;">Unid. ( <?php echo $product_qty; ?> ) </strong>
								
								<strong style="padding-right: 5%;">Desc. ( <?php echo $product_descPorc; ?> % ) </strong>
								
								<strong>SubTotal.</strong><strong><?php echo $currency; echo sprintf("%01.2f", ($item_price - $descPorcVer)); ?></strong>
							</div>
							</li>
							
							
						<?php		
						$subtotal = ($product_price_total * $product_qty - $descPorcVer);
						$total = ($total + $subtotal);
						}	
						//+ $shipping_cost
						$grand_total = $total ;
						foreach($taxes as $key => $value){
								$tax_amount = round($total * ($value / 100));
								$tax_item[$key] = $tax_amount;
								$grand_total = $grand_total + $tax_amount; 
						}	
						foreach($tax_item as $key => $value){
							$list_tax .= $key. ' : '. $currency.number_format($value,2).'<br />';
						}	
						//$shipping_cost = ($shipping_cost)?'Costo de envio : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
						//$shipping_cost
						$cart_box .= "<span style='text-transform:none;'>SubTotal: $currency ".number_format ($total,2)."  </span><br><span>$list_tax  <hr>Monto Total : $currency ".sprintf("%01.2f", $grand_total)."</span>";	
						?>
							<li class="clearfix total">
							<div class="col">
								<strong></strong>
								<input type="hidden" name="total" id="total" value="<?php echo $grand_total ?>">
								<input type="hidden" name="impuesto" id="impuesto" value="<?php echo $value ?>">
							</div>
							<div class="col second">
								<strong><?php echo $cart_box; ?></strong>
							
							</div>
							
							</li>
							
						</ul>
						
						
						
					
</div>
					
						
					</form>
					</div><!--End Place Order-->
<?php	
} else {
	header("Location: view_cart.php");
	
}
?>
				</div>
			</div>
		</div>
    </div><!--/container-->
	</main><!-- End main -->

	


  </div></div></div>
 
	<?php include '../inc/scripts.php';  ?>


	
	


<script type="text/javascript">

   (function($){
   $.ajaxblock    = function(){
      $("body").prepend("<div id='ajax-overlay'><div id='ajax-overlay-body' class='center'><i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span></div></div>");
      $("#ajax-overlay").css({
         position: 'absolute',
         color: '#FFFFFF',
         top: '0',
         left: '0',
         width: '100%',
         height: '100%',
         position: 'fixed',
         background: 'rgba(39, 38, 46, 0.67)',
         'text-align': 'center',
         'z-index': '9999'
      });
      $("#ajax-overlay-body").css({
         position: 'absolute',
         top: '40%',
         left: '50%',
         width: '120px',
         height: '48px',
         'margin-top': '-12px',
         'margin-left': '-60px',
         //background: 'rgba(39, 38, 46, 0.1)',
         '-webkit-border-radius':   '10px',
         '-moz-border-radius':      '10px',
         'border-radius':        '10px'
      });
      $("#ajax-overlay").fadeIn(50);
   };
   $.ajaxunblock  = function(){
      $("#ajax-overlay").fadeOut(100, function()
      {
         $("#ajax-overlay").remove();
      });
   };
})(jQuery);
		function busqueda(ruc){
               //$this.button('loading');
               $.ajaxblock();
               $.ajax({
                  data: { "nruc" : $("#ruc").val() },
                  type: "POST",
                  dataType: "json",
                  url: "../process/sunat/consulta.php",
               }).done(function( data, textStatus, jqXHR ){
                  if(data['success']!="false" && data['success']!=false)
                  {
                     $("#json_code").text(JSON.stringify(data, null, '\t'));

                     var res = JSON.stringify(data['result']['RUC']);
                    // alert(data['result']['RUC']);
                              //console.log(JSON.stringify(respuesta));
                     $('#direccion').val(data['result']['Direccion']);
                     $('#nombre').val(data['result']['RazonSocial']);
                     $('#tipo').val(data['result']['Tipo']);
                     if(typeof(data['result'])!='undefined')
                     {

                        //$("#tbody").html("");
                        $.each(data['result'], function(i, v)
                        {
                           //$("#tbody").append('<tr><td>'+i+'<\/td><td>'+v+'<\/td><\/tr>');
                           
                        });
                     }

                     $.ajaxunblock();
                  }else{
                     if(typeof(data['msg'])!='undefined')
                     {
                        alert(data['msg']);
                        $('#direccion').val('');
                        $('#tipo').val('');
                        $('#nombre').val('');
                     }
                     //$this.button('reset');
                     $.ajaxunblock();
                  }
               }).fail(function( jqXHR, textStatus, errorThrown ){
                  alert( "Solicitud fallida:" + textStatus );
                  $.ajaxunblock();
               });
   }


</script>


	<script language="JavaScript" type="text/JavaScript">
		$('.sel').each(function() {
  $(this).children('select').css('display', 'none');
  
  var $current = $(this);
  
  $(this).find('option').each(function(i) {
    if (i == 0) {
      $current.prepend($('<div>', {
        class: $current.attr('class').replace(/sel/g, 'sel__box')
      }));
      
      var placeholder = $(this).text();
      $current.prepend($('<span>', {
        class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
        text: placeholder,
        'data-placeholder': placeholder
      }));
      
      return;
    }
    
    $current.children('div').append($('<span>', {
      class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
      text: $(this).text()
    }));
  });
});

// Toggling the `.active` state on the `.sel`.
$('.sel').click(function() {
  $(this).toggleClass('active');
});

// Toggling the `.selected` state on the options.
$('.sel__box__options').click(function() {
  var txt = $(this).text();
  var index = $(this).index();
  
  $(this).siblings('.sel__box__options').removeClass('selected');
  $(this).addClass('selected');
  
  var $currentSel = $(this).closest('.sel');
  $currentSel.children('.sel__placeholder').text(txt);
  $currentSel.children('select').prop('selectedIndex', index + 1);
});
		
		
		
		
		
		
		
		
		</script>
		
	








