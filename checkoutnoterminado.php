<!--
Author: SOLUCIONES
Empresa: SOLUCIONES CCTV Y SISTEMAS 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
	<?php
	error_reporting(E_PARSE);
	session_start();
	include 'library/configServer.php';
	include 'library/consulSQL.php';
     include 'library/config.php';
     include_once("library/config.inc.php");


	?>
	
	<!DOCTYPE html>
	<html lang="en">


	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include 'inc/links.php';?>
	
	</head>
	<body>
	<?php include 'inc/navbar.php';?>
	


</nav>
</div>


	 <main>
        <div class="container margin_60_35" style="    margin-top: 34px;
    margin-bottom: 42px;">
			<div class="checkout-page">

			

			<div class="row">
				<div class="breadcrumbs">
		<div class="container">
			
		</div>
	</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="billing-details">
						<div class="shop-form">
							<form method="post" action="process/regCotiza.php">
								<div class="default-title">
									<h2>POR FAVOR DIGITE SUS DATOS:</h2>
								</div>
								<div class="row">
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<fieldset style=" float: left; width: 100%; ">
										  <label>Ruc / Dni <sup>*</sup></label>
										  <div class="input-group">
											<input class="form-control" id="ruc" name="ruc" value=""  placeholder="Buscar Cliente" autocomplete="off" required>
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
										<label>Correo<sup>*</sup></label>
										<input type="email" name="correo" value="" placeholder="jhon@gmail.com" class="form-control" required>
									</div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label>Numero de Celular <sup>*</sup></label>
										<input type="text" name="telefono" value="" placeholder="0044 43345523" class="form-control" required>
									</div>
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<label>Dirección Fiscal <sup>*</sup></label>
										<input type="text" name="direccion" id="direccion" value="" placeholder="Dirección" class="form-control" required>
									</div>
										<label>&nbsp;&nbsp;&nbsp;&nbsp;Todos los Campos <sup>(*)</sup> son Obligatorios</label>
									<?php 
													 $cod=ejecutarSQL::consultar("SELECT RIGHT(id_cotizacion,6) as CodCotiza FROM cotizacion_online");
													 $verificaltotal = mysqli_num_rows($cod);
													 if($verificaltotal<=0){
														 $codigo1="ON000000";
														 }else {
													 while($codigo=mysqli_fetch_assoc($cod)){
													 $codigo=$codigo['CodCotiza']+1;
													 $repo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
													 $codigo1 = "ON$repo";
													 //print_r($codigo);
													  } }
													 ?>	
									<input type="hidden" name="CodCotiza" value="<?php echo $codigo1 ?>">
									<input type="hidden" name="fecha" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                
								</div>
							
						</div>
					</div><!--End Billing Details-->
				</div><!--End Col-->
<style>
    input[type="checkbox"],
input[type="radio"] {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
.label {
  position: relative;
  display: inline-block;
  padding: 0 0 0 2em;
  height: 1.5em;
  line-height: 1.5;
  cursor: pointer;
}
.label::before,
.label::after {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 1.5em;
  height: 1.5em;
}
.label::before {
  content: " ";
  border: 2px solid #bdc3c7;
  border-radius: 20%;
}
/* Checkbox */
input[type="checkbox"] + .label::after {
  content: "\2714";
  color: #2c3e50;
  line-height: 1.5;
  text-align: center;
}
/* Radio */
input[type="radio"] + .label::before {
  border-radius: 50%;
}
input[type=radio] + .label::after {
  content: " ";
  top: .25em;
  left: .25em;
  width: 1em;
  height: 1em;
  background: #fff;
  border: .2em solid #2c3e50;
  border-radius: 50%;
}
/* :checked */
input[type="checkbox"]:checked + .label::before,
input[type="radio"]:checked + .label::before {
  background: #fff;
  border-color: #fff;
}
input[type="checkbox"] + .label::after,
input[type=radio] + .label::after {
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
}
input[type="checkbox"]:checked + .label::after,
input[type=radio]:checked + .label::after {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}
/* Transition */
.label::before,
.label::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
    
    
</style>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="place-order add_bottom_30">
						<div class="default-title">
							<h2>TERMINOS DE ENTREGA: </h2>
						</div>
						<div class="payment-options">
						<section>
				<div  class="wrapper">
     
    <input id='radio-1' type="radio" value="presencial" name='r-group-1' checked='checked' />
    <label class="label" style="color:black; font-weight:600; font-size:15px;" for="radio-1">Presencial en Tienda sin costo</label>
    <br><br>
    
    <input id='radio-2' type="radio" value="Lima" name='r-group-1' />
    <label class="label" style="color:black; font-weight:600; font-size:15px;" for="radio-2">Delivery Lima costo adicional S/ 15.00</label>
    <br><br>
    
     <input id='radio-3' type="radio" value="Provincia" name='r-group-1' />
    <label class="label" style="color:black; font-weight:600; font-size:15px;" for="radio-3">Delivery Provincia costo adicional S/ 35.00</label>
  <br><br>
    <input id='checkeado' type="checkbox" value="Confirmar" name='checkeado' />
    <label class="label" style="color:black; font-weight:600; font-size:15px;" for="checkeado">Cotizacion Confirmada con anterioridad Si?</label>
   
  </div>
    
 

						</div>
						<button type="submit" target="_blank" class="btn_full" >Confirmar Cotizacion <i class="icon-left"></i></button>
					    <a style="float:left;    text-transform: capitalize; " href='productos.php' class='btn1 btn-success'><i class='glyphicon glyphicon-menu-left'></i> SEGUIR COTIZANDO</a>
		   	            <a href='view_cart.php'  style="float:right;   text-transform: capitalize; "  class='btn1 btn-danger'><i class='glyphicon glyphicon-menu-left'></i> VER COTIZADOR</a>
		   	
					
					</div><!--End Your Order-->
					</div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 hidden">
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
							$product_qty = $product["product_qty"];
							$product_price = $product["Precio"];
							$product_code = $product["CodigoProd"];
							
							
					$ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.* FROM `producto` , `perfil`;");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				
				$product_ganancia=$ordenP['ganancia'];
				$product_medio=$ordenP['medio'];
				$product_price_total=($product_price * ($product_ganancia + $product_medio) / 100 + $product_price);
				
				
				
				} 
				$item_price = sprintf("%01.2f",($product_price_total * $product_qty)); 	
						
							?>
							<li class="clearfix">
							<div class="col" style="text-transform:none;">
									<img src="assets/img-products/<?php echo $product_img; ?>" width="50" height="50" alt=""> <?php echo $product_name; ?>&nbsp;&nbsp; 
							</div>
							<div class="col second" style="text-transform:none;">
								<strong style="float:left;">Precio Unid. <?php echo   $currency; echo $product_price_total; ?></strong>
								
								<strong style="padding-right: 15%;">Unid. ( <?php echo $product_qty; ?> ) </strong>
								
								<strong>SubTotal.</strong><strong><?php echo $currency; echo sprintf("%01.2f", ($item_price)); ?></strong>
							</div>
							</li>
							
							
							<?php		
							$subtotal = ($product_price_total * $product_qty);
							$total = ($total + $subtotal);
						}	
						//+ $shipping_cost
						$grand_total = $total ;
						foreach($taxes as $key => $value){
								$tax_amount = round( $total * ($value / 100));
								$tax_item[$key] = $tax_amount;
								$grand_total = $grand_total; 
						}	
						foreach($tax_item as $key => $value){
							$list_tax .= $key. ' : '.$currency.sprintf("%01.2f",$value).'<br/>';
						}	
						//$shipping_cost = ($shipping_cost)?'Costo de envio : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
						//$shipping_cost
						$cart_box .= "<span style='text-transform:none; color: #333;'>SubTotal: $currency " .number_format($total,2)."  </span><br><span style='color: #333;'> $list_tax  </span> <span><hr>Monto Total : $currency ".sprintf("%01.2f", $grand_total)."</span>";	
						?>
							<li class="clearfix total">
							<div class="col">
								<strong></strong>
								<input type="hidden" id="fact" name="option" value="1" required checked>
								<input type="hidden" name="total" value="<?php echo $grand_total ?>">
								<input type="hidden" name="nro_cot" value="<?php echo $product_qty ?>">
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




    
	<?php include 'inc/slider_bottom.php';  ?>
	<?php include 'inc/footer.php';  ?>
	<?php include 'inc/scripts.php';  ?>



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
                  url: "sunat/consulta.php",
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


  



</html>




