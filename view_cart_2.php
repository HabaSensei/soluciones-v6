<!--
Author: SOLUCIONES v6
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
    <style>
    /*form styles*/
    .msform {
        width: width: 100%;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }

    .msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        /* padding: 20px 30px; */
        box-sizing: border-box;
        width: 100%;
        /* margin: 0 10%; */
        position: relative;

        /*stacking fieldsets above each other*/
        position: relative;
        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    .msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    .msform input,
    .msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }

    /*buttons*/
    .msform .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    .msform .action-button:hover,
    .msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }

    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    .progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    .progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 25%;
        float: left;
        position: relative;
    }

    .progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    .progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    .progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    .progressbar li.active:before,
    .progressbar li.active:after {
        background: #27AE60;
        color: white;
    }

    /* primer slide */

    @media (max-width: 1366px) {

        .cart-checkout {
            padding-right: 43px !important;
            padding-left: 40px !important;
            margin-right: 104px !important;
            display: table-cell;
        }
    }

    .cart-checkout {
        padding-right: 43px !important;
        padding-left: 40px !important;
        margin-right: 104px !important;
        display: table-cell;
    }

    span,
    applet,
    object,
    iframe,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .cart-bottom {
        background: #fff;
        padding: 2em 2em;
    }

    .table {
        border-bottom: 1px solid #ccc;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    tr.main-heading th {
        background: #ccc;
        padding: 1em 7.6em;
        font-size: 0.9em;
    }

    tr.cake-top {
        border-bottom: 1px solid #ccc;
        position: relative;
    }

    td.cakes {
        /* padding: 1em 0em !important; */
        padding: 1em 3em !important;
    }

    td.cakes_de {
        /* padding: 1em 0em !important; */
        padding: 1em 3em !important;
    }

    td {
        vertical-align: middle;
    }

    td.quantity {
        vertical-align: middle;
    }

    td.quantity {
        text-align: center;
    }

    td.price {
        padding: 0em 1em;
    }

    td.top-remove {
        position: relative;
    }

    .vocher {
        padding: 1.1em 0em 0em 0em;
    }

    .img-inside {
        width: 134px;
    }

    .close-btm {
        position: absolute;
        top: 66%;
        right: 28%;
    }

    .close-btm h5 {
        font-size: 0.75em;
        color: #fff;
        cursor: pointer;
        background: #0c517d;
        padding: 0.5em 1em;
        border-radius: 3px;
    }

    .dis-card {
        float: left;
        width: 50%;
    }

    .dis-total {
        float: right;
        width: 50%;
        text-align: right;
    }

    .dis-total h1 {
        font-size: 1.1em;
        color: #000;
        padding: 0.8em 2em;
        margin: 0.7em auto;
        background: rgba(255, 255, 255, .15);
        display: inline-block;
        text-align: right;
    }

    .tot-btn {
        margin-top: 1.3em;
    }

    .clear {
        clear: both;
    }

    .tot-btn a.shop {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #3f3f3f;
        border-radius: 3px;
    }

    .tot-btn a.check {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #0b507c;
        border-radius: 3px;
    }

    .table-fixed {
        width: 100%;

    }

    .table-fixed tbody {
        height: 350px;
        overflow-y: auto;
        width: 100%;
    }

    .table-fixed thead,
    .table-fixed tbody,
    .table-fixed tr,
    .table-fixed td,
    .table-fixed th {
        display: inline-block;
    }

    .table-fixed thead tr th {
        float: left;

    }

     .payment-options li .radio-option label .small-text {
        position: relative;
        display: block;
        margin-top: 15px;
        margin-left: -30px;
        padding: 10px 15px;
        letter-spacing: 0;
        text-transform: none;
        font-weight: 400;
        font-size: 14px;
        color: #888;
        line-height: 20px;
        background: #fff;
    }



    /* fin del primer slide */
    </style>

    <main>
    

        <div class="container margin_60_35" style="    height: 175vh;" id="view_cart">
        
            <!-- multistep form -->
            <form class="msform" method="post" action="process/ver_cotiza_2.php">
                <!-- progressbar -->
                <ul class="progressbar">
                    <li class="active" style="color:black!important;">Carrito</li>
                    <li style="color:black!important;">Opciones</li>
                    <li style="color:black!important;">Detalles</li>
                    <li style="color:black!important;">Final</li>
                </ul>
 
                <!-- fieldsets 1 -->
                <fieldset>
                    <div class="cart-bottom">
                        <div class="table table-fixed">
                            <table>
                                <thead>
                                    <tr class="main-heading">
                                        <th>Imagen</th>
                                        <th class="long-txt">Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
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
                                        $modelo_prod = $product["Modelo"];
                                        $marca_prod =  $product["Marca"];


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
                                
								<input type="hidden" name="total" value="<?php echo $total ?>">
								<input type="hidden" name="nro_cot" value="<?php echo $product_qty ?>">


                                    <tr class="cake-top">
                                        <td class="cakes">
                                            <div class="product-img">
                                                <img class="img-inside"
                                                    src="assets/img-products/<?php echo $product_img; ?>">
                                            </div>
                                        </td>
                                        <td class="cakes_de cake-text" align="left">
                                            <div class="product-text">
                                                <h3><?php echo $product_name; ?></h3>
                                                <p>Modelo: <?php echo $modelo_prod; ?></p>
                                                <p>Marca: <?php echo $marca_prod; ?></p>
                                                <p>Codigo: <?php echo $product_code; ?></p>
                                            </div>
                                        </td>
                                        <td class="cakes quantity">
                                            <div class="product-right">
                                                <input type="number" data-code="<?php echo $product_code; ?>"
                                                    class="form-control  quantity " style="border: 2px solid #6b6363;"
                                                    value="<?php echo $product_qty; ?>">
                                            </div>
                                        </td>
                                        <td class="cakes price">
                                            <?php echo $currency;
													echo sprintf("&nbsp; %01.2f", number_format($product_price_total, 2) ); ?></h4>

                                        </td>
                                        <td class="cakes top-remove">
                                            <h4><?php echo $currency;  
													echo sprintf("&nbsp; %01.2f", round($product_price_total * $product_qty)); ?></h4>
                                            <div class="close-btm">
                                                <a href="javascript:" class=" remove-item"
                                                    data-code="<?php echo $product_code; ?>">
                                                    <h5>Remover</h5>
                                                </a>


                                            </div>
                                        </td>

                                    </tr>
                                    <div class="clear"> </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="vocher">
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
                        ?>




                            <div class="dis-total">
                                <h1>Sub Total:&nbsp; <?php echo $currency. number_format($total_format, 2);  ?></h1>

                            </div>
                            <div class="clear"> </div>
                            <div class="dis-total">
                                <h1><?php echo $list_tax; ?></h1>

                            </div>
                            <div class="clear"> </div>
                            <div class="dis-total">
                                <h1>Total:&nbsp;
                                    <?php echo $currency. sprintf("%01.2f", $grand_total - $tax_amount);  ?></h1>

                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Continuar" />
                </fieldset>


                <!-- fieldsets 2-->
                <fieldset>
                    <h2>¿Que Desea Realizar?</h2>
                    <br><br>
                    <div class="payment-method" align="center">
                        <label for="comprar" class="method cart-checkout">

                            <img style="width: 200px;" src="assets\img\comprar2.svg" />
                            <div class="radio-input">
                                <input id="comprar" type="radio" name="opciones" onclick="javascript:yesnoCheck();">
                                Comprar Productos
                            </div>
                        </label>

                        <label for="cotizar" class="method cart-checkout">
                            <img style="width: 200px;" src="assets\img\cotizar2.svg" />
                            <div class="radio-input">
                                <input id="cotizar" type="radio" name="opciones" onclick="javascript:yesnoCheck();">
                                Cotizar Productos
                            </div>
                        </label>

                    </div>
                    <br><br>
                    <input type="button" name="previous" class="previous action-button" value="Retroceder" />
                    <input type="button" name="next" class="next action-button" value="Continuar" />
                </fieldset>


                <!-- fieldsets 3-->
                <fieldset>
                    <div id="TituloCompras" style="display:none">
                        <h2 class="fs-title">Compras</h2>
                    </div>
                    <div id="TituloCotiza" style="display:none">
                        <h2 class="fs-title">Cotizar</h2>
                    </div>
                    <div class="shop-form">

                        <div class="default-title">
                            <h2>DATOS DE CLIENTE:</h2>
                        </div>
                        <div class="row" align="left" style="padding-right: 50px; padding-left: 50px;">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Ruc - Dni <sup>*</sup></label>
                                <input class="form-control" id="ruc" name="ruc" value="" placeholder="Buscar Cliente"
                                    autocomplete="off" >
                                <span class="input-group-btn">
                                    <button class="btn btn-default" style="    color: #f5f5f5; background: #27ae60; top: -48px; left: 26.5em;font-weight: 600; position: absolute;
                                        font-size: 17px;" type="submit" onclick="busqueda(this); return false"><i
                                            class="fa fa-search" aria-hidden="true"></i> SUNAT</button>
                                </span>
                                <img src="ajax.gif" class="ajaxgif hide"
                                    style="position: absolute; margin-top: -10px; margin-left: 13px;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Correo<sup>*</sup></label>
                                <input type="email" name="correo" value="" placeholder="jhon@gmail.com"
                                    class="form-control" >
                            </div><!-- /input-group -->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Razón Social<sup>*</sup></label>
                                <input type="text" name="nombre" id="nombre" placeholder="Razón Social"
                                    class="form-control" >
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Numero de Celular <sup>*</sup></label>
                                <input type="text" name="telefono" value="" placeholder="0044 43345523"
                                    class="form-control" >
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label>Dirección Fiscal <sup>*</sup></label>
                                <input type="text" name="direccion" id="direccion" value="" placeholder="Dirección"
                                    class="form-control" >
                            </div>

                        </div>
                        <div id="ifYes" style="display: none;">
                            <div class="shop-form">

                                <div class="default-title">
                                    <h2>DATOS DE COMPRA</h2>
                                </div>

                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-xs-6 " style="padding-left: 50px;">
                                <label style="float:left">Forma de Entrega <sup>*</sup></label>
                                <select class="form-control" id="F_entrega">
                                    <option>Despacho en Tienda</option>
                                    <option>Delivery Lima (S/ 15.00)</option>
                                    <option>Delivery Provincia (S/ 35.00)</option>


                                </select>

                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-xs-6">

                                <label style="float:left">Forma de Pago <sup>*</sup></label>
                                <select class="form-control" id="F_pago">
                                    <option>Efectivo </option>
                                    <option>Pago Electronico</option>

                                </select>
                            </div>

                            <div class="form-group col-md-3 col-sm-3 col-xs-6">

                                <label style="float:left">Fecha de Despacho <sup>*</sup></label>
                                <input type="text" name="F_despacho" id="F_despacho" class="form-control "
                                    placeholder="dd/mm/yy" >


                            </div>






                            <div class="form-group col-md-3 col-sm-3 col-xs-6" style="padding-right: 50px;">

                                <label style="float:left">Horarios de Entrega <sup>*</sup></label>
                                <select class="form-control" id="H_entrega">
                                    <option>10:00 Am - 12:00 Pm </option>
                                    <option>1:00 Pm - 5:00 Pm</option>

                                </select>
                            </div>



                        </div>


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
                        <input type="hidden" name="fecha" min="<?php echo date("Y-m-d");?>"
                            max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">

                    </div>

                    <div class="col-md-12" align="center">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Todos los Campos <sup>(*)</sup> son Obligatorios</label>

                    </div>
                    <div class="clear"> </div>
                    <br>
                    <input type="button" name="previous" class="previous action-button" value="Retroceder" />
                    <input type="button" name="next" class="next action-button" value="Continuar" />






                </fieldset>


                <!-- fieldsets 4-->
                <fieldset>
                    <div id="descarga_cotiza" style="display:none">
                    <div class="default-title">
                                        <h2>TERMINOS DE COTIZACIÓN</h2>
                                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="payment-method" align="center">
                                    <label for="comprar" class="method cart-checkout">

                                        <img style="width: 400px;" src="assets\img\cotizar.svg" />

                                        </label>
                                        Gracias por cotizar
                                </div>

                               

                            </div>
                            <div class="col-md-6">
                                <div class="place-order ">
                                    
                                    <div class="payment-options">
                                        <ul style="list-style-type: none;">
                                        <br>
                                            <li >
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Revise Su Correo, y
                                                            Descargue su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Aperturarse a la
                                                            Tienda, Con su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Cancelar El Importe
                                                            Total de su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Recoger Su
                                                            Productos Comprados En Almacen.</span></label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>



                                </div>
                            </div>





                        </div>
                    </div>
                    <div id="descarga_compras" style="display:none">
                    <div class="default-title">
                                        <h2>TERMINOS DE COMPRA </h2>
                                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="payment-method" align="center">
                                    <label for="comprar" class="method cart-checkout">

                                        <img style="width: 400px;" src="assets\img\comprar2.svg" />

                                        </label>
                                        Gracias por su Compra
                                </div>

                               

                            </div>
                            <div class="col-md-6">
                                <div class="place-order ">
                                    
                                    <div class="payment-options">
                                        <ul style="list-style-type: none;">
                                        <br>
                                            <li >
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Revise Su Correo, y
                                                            Descargue su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Aperturarse a la
                                                            Tienda, Con su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Cancelar El Importe
                                                            Total de su Orden de Compra.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <label for="payment-1"><span class="small-text">*Recoger Su
                                                            Productos Comprados En Almacen.</span></label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>



                                </div>
                            </div>





                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Retroceder" />
                   
                    <button type="submit" target="_blank"   class="btn_full"  >Enviar </button>
                </fieldset>
            
            </form>
        
     

        




    </main><!-- End main -->

    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script>

function ordenar()
{
     document.getElementById("form_cotiza").submit();
} 




    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $(function() {
        $("#F_despacho").datepicker();
    });

    function yesnoCheck() {
        if (document.getElementById('comprar').checked) {

            document.getElementById('TituloCompras').style.display = 'block';
            document.getElementById('TituloCotiza').style.display = 'none';

            document.getElementById('descarga_compras').style.display = 'block';
            document.getElementById('descarga_cotiza').style.display = 'none';


            document.getElementById('ifYes').style.display = 'block';
            document.getElementById('ifNo').style.display = 'none';

        } else {

            document.getElementById('TituloCompras').style.display = 'none';
            document.getElementById('TituloCotiza').style.display = 'block';

            document.getElementById('descarga_compras').style.display = 'none';
            document.getElementById('descarga_cotiza').style.display = 'block';

            document.getElementById('ifYes').style.display = 'none';
            document.getElementById('ifNo').style.display = 'block';

        }
    }




    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $(".progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $(".progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    (function($) {
        $.ajaxblock = function() {
            $("body").prepend(
                "<div id='ajax-overlay'><div id='ajax-overlay-body' class='center'><i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span></div></div>"
            );
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
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                'border-radius': '10px'
            });
            $("#ajax-overlay").fadeIn(50);
        };
        $.ajaxunblock = function() {
            $("#ajax-overlay").fadeOut(100, function() {
                $("#ajax-overlay").remove();
            });
        };
    })(jQuery);

    function busqueda(ruc) {
        //$this.button('loading');
        $.ajaxblock();
        $.ajax({
            data: {
                "nruc": $("#ruc").val()
            },
            type: "POST",
            dataType: "json",
            url: "sunat/consulta.php",
        }).done(function(data, textStatus, jqXHR) {
            if (data['success'] != "false" && data['success'] != false) {
                $("#json_code").text(JSON.stringify(data, null, '\t'));

                var res = JSON.stringify(data['result']['RUC']);
                // alert(data['result']['RUC']);
                //console.log(JSON.stringify(respuesta));
                $('#direccion').val(data['result']['Direccion']);
                $('#nombre').val(data['result']['RazonSocial']);
                $('#tipo').val(data['result']['Tipo']);
                if (typeof(data['result']) != 'undefined') {

                    //$("#tbody").html("");
                    $.each(data['result'], function(i, v) {
                        //$("#tbody").append('<tr><td>'+i+'<\/td><td>'+v+'<\/td><\/tr>');

                    });
                }

                $.ajaxunblock();
            } else {
                if (typeof(data['msg']) != 'undefined') {
                    alert(data['msg']);
                    $('#direccion').val('');
                    $('#tipo').val('');
                    $('#nombre').val('');
                }
                //$this.button('reset');
                $.ajaxunblock();
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("Solicitud fallida:" + textStatus);
            $.ajaxunblock();
        });
    }
    </script>