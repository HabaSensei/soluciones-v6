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


<head>
    <?php include 'inc/links.php'; ?>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>



    </nav>
    </div>


    <main>
        <div class="container margin_60_35" id="view_cart">
            <div class="breadcrumbs">
                <div class="container">

                </div>
            </div>
            <h3> Articulos Cotizados (<span id="cart-items-count">
                    <?PHP if (isset($_SESSION["products"])) {
						echo count($_SESSION["products"]);
					} ?></span>)</h3>

            <div class="cart-section">
                <?php
				if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
					?>
                <div class="table-responsive">
                    <table class="table table-striped cart-list shopping-cart" id="shopping-cart-results"
                        style="    margin-top: -4%;">
                        <thead>
                            <tr>
								
                                <th>
                                    Articulos.
                                </th>
                                <th>
                                    Precio Unit.
                                </th>
                                <th>
                                    Cant.
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Remover.
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
									$cart_box = '<ul class="cart-products-loaded">';
									$total = 0;

									foreach ($_SESSION["products"] as $product) {
										$product_img = $product["Imagen"];
										$product_name = $product["NombreProd"];
										$product_price = $product["Precio"];
										$product_code = $product["CodigoProd"];
										$product_qty = $product["product_qty"];


										$ordenU =  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.* FROM `producto` , `perfil`;");

										while ($ordenP = mysqli_fetch_assoc($ordenU)) {

											$product_ganancia = $ordenP['ganancia'];
											$product_medio = $ordenP['medio'];
											$product_price_total = ($product_price * ($product_ganancia + $product_medio) / 100 + $product_price);
											$igv_total = ($product_price_total * $product_qty) / 1.18;
										}
										$subtotal = ($product_price_total * $product_qty);
										$total = ($total + $subtotal);
										?>

                            <tr>
                                <td>
                                    <div class="thumb_cart hidden-xs">
                                        <a href="#"><img src="assets/img-products/<?php echo $product_img; ?>" alt="">
                                        </a>
                                    </div>
                                    <span class="item_cart"><?php echo $product_name; ?></span>
                                </td>
                                <td>
                                    <?php echo $currency;
													echo number_format($product_price_total, 2); ?>
                                </td>
                                <td>
                                    <input type="number" data-code="<?php echo $product_code; ?>"
                                        class="form-control  text-center quantity " style="border: 2px solid #6b6363;"
                                        value="<?php echo $product_qty; ?>">
                                </td>
                                <td>
                                    <?php echo $currency;
													echo sprintf("%01.2f", round($product_price_total * $product_qty / 1.18)); ?>

                                </td>
                                <td colspan="2" class="options">
                                    <a href="#" class="btn btn-danger remove-item"
                                        data-code="<?php echo $product_code; ?>"><i
                                            class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        <tfoot>
                            <br class="hidden-xs">
                            <br class="hidden-xs">




                            <tfoot>
                                <br class="hidden-xs">
                                <br>



                                </tbody>
                    </table>
                </div>
                <div class="cart-options clearfix" style="    margin-top: -28px;">

                    <div class="row">
                        <div class="column pull-right2 col-md-4 col-sm-6 col-xs-12 add_bottom_30">
                            <?php

									if (isset($total)) {

										?>
                            <ul class="totals-table" style=" border: none; ">

                                <?php



												$grand_total = $total;
												foreach ($taxes as $key => $value) {
													$import = 1.18;
													$tax_amount = round($total - ($total / $import));
													$tax_item[$key] = $tax_amount;
													$grand_total = round($total + $tax_amount);
												}
												foreach ($tax_item as $key => $value) {
													$list_tax .= $key . ' : ' . $currency . number_format($value, 2) . '<br />';
												}
												//$shipping_cost = ($shipping_cost)?'Costo de envio : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
												//$shipping_cost
												$total_format = round($total / 1.18);
												$cart_box .= "<span style='text-transform:none; color: #333;'>Sub Total: $currency " . number_format($total_format, 2) . "  </span><br><span style='color: #333;'>$list_tax  </span> <hr> <span style='color: #ea4335;'>Importe Total : $currency " . sprintf("%01.2f", $grand_total - $tax_amount) . "</span> ";
												?>
                                </li>
                                <li class="clearfix total"><span style="float:right;"
                                        class="col"><?php echo $cart_box; ?></span>

                            </ul>

                            <a style="    margin-top: 11px;" href="checkout.php" class="btn_full">Confirmar Cotizacion
                                <i class="icon-left"></i></a>
                            <?php } ?>
                            <a style="float:left;    text-transform: capitalize; " href='productos.php'
                                class='btn1 btn-success'><i class='glyphicon glyphicon-menu-left'></i> SEGUIR
                                COTIZANDO</a>
                            <a href='process/limpiar.php' style="float:right;   text-transform: capitalize; "
                                class='btn1 btn-danger'><i class=''></i> LIMPIAR COTIZADOR</a>

                            <?php
							} else {
								echo "
				<div class='table-responsive'>   
				<table style='margin:0%;' class='table table-striped cart-list shopping-cart'>
					<thead>
						<tr>
							<th>
								Articulos.
							</th>
							<th>
								Precio Unitario.
							</th>
							<th>
								Cantidad.
							</th>
							<th>
								OP Gravada.
							</th>
							<th>
								Remover.
							</th>
						
				</tr>
				</thead>
				<tbody>
				<tr>
							<tr>
							<td style='border-bottom:none;'>
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
			<br class='hidden-xs'>
			<br class='hidden-xs'>
			<tr>
			<td ><a href='productos.php' style='text-transform: capitalize;' class='btn1 btn-warning'><i class='glyphicon glyphicon-menu-left'></i> Agregar productos</a></td>
			<td ><a href='productos.php' style='text-transform: capitalize;' class='btn1 btn-warning'><i class='glyphicon glyphicon-menu-left'></i> Continuar Cotizando</a></td>
			<td colspan='4'></td>
			
			
			<td></td>
			
					
			
			<tfoot>
			<br class='hidden-xs'>
			<br>
			
			
						
					</tbody>
				</table>
				</div>
				<br><br>
				
				";
								?>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
    </main><!-- End main -->

    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>
