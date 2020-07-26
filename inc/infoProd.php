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

$CodProd = $_GET['CodigoProd'];
                 
$productoinfo2 =  ejecutarSQL::consultar("SELECT * FROM producto WHERE `producto`.`CodigoProd` = '$CodProd';");
while ($fila2 = mysqli_fetch_array($productoinfo2)) {
     
    $imagen =  $fila2['Imagen'];
    $nombre =  $fila2['NombreProd'];
    $detalle =  $fila2['TecDetalle'];
    $codigoCat =  $fila2['CodigoCat'];
    
    
    
  


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <div id="fb-root"></div>
    <script crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ecommerce">


    <meta property="og:url"
        content="http://solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $CodProd; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $nombre; ?>" />
    <meta property="og:description" content="<?php echo $detalle; ?> " />
    <meta property="og:image" content="http://solucionescctvysistemas.com/assets/img-products/<?php echo $imagen; ?>" />
    <meta property="fb:app_id" name="fb_app_id" content="116012569850580" />

    <?php }  ?>

    <title>:: SOLUCIONES CCTV & SISTEMAS S.A.C ::</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <?php include 'inc/links.php'; ?>
    <link rel="stylesheet" media="screen, projection" href="assets/zoom/drift-basic.css">
    <link rel="stylesheet" media="screen, projection" href="assets/css/producto.css">
    <link rel="stylesheet" href="assets/infoprod/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.theme.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.transitions.css">
    <!-- nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="assets/infoprod/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- jquery-ui CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/jquery-ui.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/normalize.css">
    <link rel="stylesheet" href="assets/infoprod/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/responsive.css">
    <script src="assets/infoprod/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .ajuste_infoprod {
        padding-top: 7px !important;
    }

    .ajuste2_infoprod {
        padding: 10px 5px !important;
    }
    </style>
</head>

<body>
    <?php 
    $paddin = "padding: 4px 18px 0px!important;";
    include 'inc/navbar.php'; ?>
    </nav>
    </div>
    </nav>
    </div>
    <section style="    background: #f5f5f5;     padding-bottom: 1%;">
        <div id="get_quote" class="ajuste">
            <div class="container  animated fadeInUp">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="hidden-xs">¿ Compra Tus Productos + Envio a Domicilio o Recojo en Tienda ?</h3>
                    </div>
                    <div class="col-md-3">
                        <button class="button-two bton-serv hidden-xs"
                            onclick="window.location.href='view_cart.php'"><span>¿ COMPRA AQUI ?</span></button>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div>
        <div class="container" id="service" style="    margin-top: -11px;">
            <h1 class="section-title txt-rotate hidden-xs" data-period="2000" data-rotate='[ "Compra Tus Productos en Linea" ]'>
            </h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5 hidden-xs" style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Las programaciones de entrega se realizaran progresivamente una vez hecho la
  compra usando los protocolos de seguridad. Únicamente ingresan los envíos por compras de ( $.150 a mas ) Las compras minimas realizadas solo recojo en tienda  tus pagos de compra 
  puedes realizar a través de transferencia o pago efectivo en nuestras tiendas ( consultar al asesor de ventas ).</p>

    </section>

    <?php
                $CodProd = $_GET['CodigoProd'];
                //print_r($CodProd);
                $productoinfo =  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoProd`, `perfil`.*
FROM `producto`
	, `perfil`
WHERE `producto`.`CodigoProd` = '$CodProd';");
                while ($fila = mysqli_fetch_array($productoinfo)) {
                    $disponible = $fila['Stock'];
                    $imagen =  $fila['Imagen'];
                    $categoria =  $fila['CodigoCat'];

                    $res = ($fila['Precio'] * ($fila['ganancia'] + $fila['medio']) / 100 + $fila['Precio']);
                    
                   
                    ?>
 
    <!-- sdasda -->
    <form class="product-form">
        <section class="sin-product-page" style="    padding-top: 3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-sm-5 col-md-5 ">
                                <div class="product-image ">
                                    <div class=" product-full">
                                    <div class="label_new" style="width: 88px!important; left: 16px!important;"><span>DISPONIBLE</span></div>
                                        <img id="product-zoom" style="border: 1px solid #005a8f66;  padding: 1px;"
                                            src="assets/img-products/<?php echo $fila['Imagen']; ?>"
                                            data-zoom-image="assets/img-products/<?php echo $fila['Imagen']; ?>"
                                            alt="image-prod">

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-7 col-md-7">
                                <div class="product-laft-info">
                                    <h2 class="pro-name"><?php echo $fila['NombreProd']; ?> </h2>
                                   
                                    <ul class="list-info-product">
                                       
                                        </li>
                                        <li><strong>MODELO :</strong> <span><?php echo $fila['Modelo']; ?> </span></li>
                                        
                                        <li><strong>MARCA :</strong> <span> <?php echo $fila['Marca']; ?> </span></li>
                                        
                                        <li><strong>SKU :</strong> <span> <?php echo $fila['CodigoProd']; ?> </span></li>
                                        
                                       <li><strong>ESTADO :</strong> <span><?php echo $fila['Detalle']; ?></span></li>
                                                                                                                       
                                        <li><strong>PESO :</strong> <span><?php echo $fila['Peso']; ?></span></li>
                                         
                                       <li><strong>STOCK :</strong> <span><?php echo $fila['Stock']; ?> </span></li>
                                        
                                                                                                                       
                                         <li><strong>PRECIO :</strong> <span>INCLUYE IGV</span></li>
                                         
                                         <span class="label label-success" style=" font-size: 12px;">Consultar Stock</span>
                                         
                                        </li>

                                    </ul>
                                    <div class="price">
                                        <span class="price-new"> <?php echo $fila['Simbolo']; ?>
                                            <?php echo $fila['Precio'] * ($fila['ganancia'] + $fila['medio']) / 100 + $fila['Precio']; ?>.00
                                        </span> 
                                        <span class="price" style="text-decoration: line-through;">
                                            <?php echo $fila['Simbolo']; ?>
                                            <?php echo $fila['Precio'] * ($fila['ganancia'] + $fila['medio']) / 100 + $fila['Precio'] * 25 / 100 + $fila['Precio'] ?>
                                        </span><br>
                                        <span class="">$  <?php 
                                        $precio_sol = ( $fila['Precio'] * ($fila['ganancia'] + $fila['medio']) / 100 + $fila['Precio']);
                                        $precio_dolar_sin_f = $precio_sol / $globalTasaCambio_dolar;
                                        $precio_dolar = round($precio_dolar_sin_f, 2);
                                        
                                        echo $precio_dolar;
                                        ?></span>
                                    </div>
                                    <div class="group-two-btn">

                                        <div class="btn-group">
                                            <input name="product_qty" type="hidden" value="1">
                                            <input name="CodigoProd" type="hidden" value="<?php echo $CodProd ?>">
                                            <button class="btn  btn-lg btn-cart  my-cart-btn boton_cotizar  btn-common"
                                                type="submit" style="font-size: inherit;"> <i class="icon-basket-loaded"></i>&nbsp;&nbsp; Añadir Producto</button>
                                            <button class="btn  btn-lg boton_cotizar" id="button-cart"
                                                type="submit" style="font-size: inherit;"> <i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp; Reservar Producto </button>
                                        </div>
                                    </div>


                                    <div id="wrap">
                                        <a class="button facebook" target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A//solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>">
                                            <i class="fa fa-facebook"></i>  
                                        </a>
                                        <a class="button twitter" target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A//solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>">

                                            <i class="fa fa-twitter"></i>  


                                        </a>
                                        <a class="button whatsapp" target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A//solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>">

                                            <i class="fa fa-whatsapp"></i> 
                                        </a>

                                        <a class="button instagram" target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A//solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>">

                                            <i class="fa fa-instagram"></i>  
                                        </a>
                                    </div>




                                    <a href="javascript:" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#modal_puedo_pagarlo2">
                                        <img src="assets/infoprod/img/camion.svg" class="delivery" alt="">
                                    </a>
                                    <a href="javascript:" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#modal_puedo_pagarlo">
                                        <img src="assets/infoprod/img/shield.svg" class="escudo" alt="">
                                    </a>
                                    <a href="javascript:" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#modal_como_comprar">
                                        <img src="assets/infoprod/img/money.svg" class="dinero" alt="">
                                    </a>
                                    <a href="javascript:" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#modal_tiene_garantia">
                                        <img src="assets/infoprod/img/garantia.svg" class="garantia" alt="">
                                    </a>
                                    <a href="javascript:" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#modal_como_envian">
                                        <img src="assets/infoprod/img/owner.svg" class="copyright" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="review-wrapper">
                                    <ul class="review-menu">


                                    </ul>
                                    <div class="con tab-content">
                                        <div class="tab-pane fade in active" id="pr-description">
                                            <!--ORDER AREA START-->
                                            <div class="order-area">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12" style="    padding-left: 0px!important;">
                                                            <div
                                                                class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                                                                <div class="add_info">
                                                                    <ul id="product-detail-tab"
                                                                        class="nav nav-tabs product-tabs">
                                                                        <li class="active"> <a
                                                                                href="#product_tabs_description"
                                                                                data-toggle="tab"> Detalles Tecnicos Del
                                                                                Articulo</a> </li>
                                                                       
                                                                    </ul>
                                                                    <div id="productTabContent" class="tab-content">
                                                                        <div class="tab-pane fade in active"
                                                                            id="product_tabs_description">
                                                                            <div class="std">
                                                                                <p><strong><?php echo $fila['TecDetalle']; ?></strong>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--ORDER AREA END-->
                                        </div>
                                        <div class="tab-pane fade" id="pr-reviews">
                                            <div class="product-comment">
                                                <div class="reviewer-name">
                                                    <span>jack sparrow</span>
                                                    <span class="floatright">10/11/2015</span>
                                                </div>
                                                <div class="comment-a">
                                                    <p>It is part of Australia's network of offshore processing centres
                                                        for
                                                        irregular migrants who arrive by boat, and also houses New
                                                        Zealanders facing deportation from Australia.</p>
                                                    <div class="comment-text">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add-review">
                                                    <h2>Write a review</h2>
                                                    <form id="form-review" class="form-horizontal">
                                                        <p class="comment-form-author">
                                                            <label>Name <span class="required">*</span></label>
                                                            <input type="text" class="form-control"
                                                                aria-required="true">
                                                        </p>
                                                        <p class="comment-form-email"><label>Email <span
                                                                    class="required">*</span></label>
                                                            <input type="text" class="form-control">
                                                        </p>
                                                        <p class="product-form-comment">
                                                            <label>Your Review</label>
                                                            <textarea class="form-control" cols="45" rows="8"
                                                                aria-required="true"></textarea>
                                                        </p>
                                                    </form>
                                                    <div class="pull-right">
                                                        <button class="btn btn-primary" data-loading-text="Loading..."
                                                            id="button-review" type="button">Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="title-with-bg style-three">
                            <span style="color:red;">OFERTAS</span>
                        </div>
                        <div class="sidebar-product" style="z-index: -1!important; margin-bottom: 15%;">
                            <!--single product-->
                            <?php 
 
                        $ordenCat=  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoCat`
                        FROM `producto`
                        WHERE `producto`.`CodigoCat` = 'C000008' ORDER BY RAND() LIMIT 6;");
                                            
                        while($ordenC=mysqli_fetch_assoc($ordenCat)){
                            $CodigoProducto1=$ordenC['CodigoProd'];
                            $NombreProductoCat=$ordenC['NombreProd'];
                            $Imagen_slider=$ordenC['Imagen'];
                            $Precio_slider=$ordenC['Precio'];
                            $Modelo_slider=$ordenC['Modelo'];
                            $Marca_slider=$ordenC['Marca'];

                            $total_prod = $Precio_slider ;
                            $p_p = ($Precio_slider * 25 / 100);
                            $p_p_a =  $total_prod + $p_p;
                            $p_p_r = round($p_p_a, 0, PHP_ROUND_HALF_DOWN);


                            
                        ?>


                            <!--single product-->
                            <div class="sin-product " style="padding-top: 13px!important; padding-bottom: 0px!important;">
                            <div class="product-top" style="  border: 1px solid #005a8f!important;  
    padding: 30px!important;
    position: relative;
    text-align: center;">
                                <div class="pro-img">
                                    <a href="infoProd.php?CodigoProd=<?php echo  $CodigoProducto1; ?>">
                                        <img alt="" style="height:150px!important; border-bottom: 1px solid #005a8f;"
                                            src="assets/img-products/<?php echo  $Imagen_slider; ?>">
                                    </a>
                                </div>
                                <div class="label_new"><span>Nuevo</span></div>
                                <div class="name"><a href="#"><?php echo  $NombreProductoCat; ?></a></div><br>
                                <div class="name"><a href="#"><?php echo  $Modelo_slider." - ".$Marca_slider; ?></a></div><br>
                                <div class="rating">
                                <span class="price-new" style="text-decoration-line: line-through;"><?php echo "Antes: S/ ".$p_p_r; ?>.00 </span>&nbsp; &nbsp; <strong> 25% DCTO</strong>
                                </div>
                                 
                                <div class="price_slider">
                                    <span class="price-new"><?php echo "S/ ".$Precio_slider; ?>.00</span>
                                </div>
                                 <a href="servicio_webs.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-01">Ver Mas</a>&nbsp;&nbsp;
                               
                            </div>
                        </div>




                            <?php }  ?>




                        </div>
                    </div>
                </div>
        </section>
    </form>
    <!--SINGLE PRODUCT AREA END-->
    <!--RELATED PRODUCT AREA START-->
    <div class="related-product hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-with-bg">
                        <span style="color:red;">Otros Productos Relacionados</span>
                    </div>
                </div>
                <div class="related-pro-carousel">
                    <?php 
 
 $ordenSlider=  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoCat`
 FROM `producto`
 WHERE `producto`.`CodigoCat` = '$categoria' ORDER BY RAND() LIMIT 12;");
                     
 while($ordenSli=mysqli_fetch_assoc($ordenSlider)){
    $CodigoProducto=$ordenSli['CodigoProd'];
     $NombreProductoCat2=$ordenSli['NombreProd'];
     $ModeloProd=$ordenSli['Modelo'];
     $MarcaProd=$ordenSli['Marca'];
     $Imagen_slider2=$ordenSli['Imagen'];
     $Precio_slider2=$ordenSli['Precio'];
     $p_p = ($Precio_slider2 * 25 / 100);
     $p_p_a = $Precio_slider2 + $p_p;
     $p_p_r = round($p_p_a, 0, PHP_ROUND_HALF_DOWN);
     
 ?>
 

                    <!--single product-->
                    <div class="col-md-12">
                        <div class="sin-product">
                            <div class="product-top">
                                <div class="pro-img">
                                    <a href="infoProd.php?CodigoProd=<?php echo  $CodigoProducto; ?>">
                                        <img alt="" style="height:268px!important; border-bottom: 1px solid #005a8f;"
                                            src="assets/img-products/<?php echo  $Imagen_slider2; ?>">
                                    </a>
                                </div>
                                <div class="label_new"><span>Nuevo</span></div>
                                <div class="name"><a href="#"><?php echo  $NombreProductoCat2; ?></a></div><br>
                                <div class="name"><a href="#"><?php echo $ModeloProd." - ".$MarcaProd; ?></a></div><br>
                                 
                                <div class="rating">
                                <span class="price-new" style="text-decoration-line: line-through;"><?php echo "Antes: S/ ".$p_p_r; ?>.00 </span>&nbsp; &nbsp; <strong> 25% DCTO</strong>
                                </div>
                                <div class="price">
                                    <span class="price-new"><?php echo "S/ ".$Precio_slider2; ?>.00</span>
                                </div>
                                <a href="infoProd.php?CodigoProd={$row['CodigoProd']}'>" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-01">Ver Mas</a>&nbsp;&nbsp;
                                
                            </div>
                        </div>
                    </div>
                    <!--single product-->
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
    <!--RELATED PRODUCT AREA END-->



    <!-- sdadasda-->

    

    </div>
    <!--RELATED PRODUCT AREA END-->

    <!-- asdasdas -->
    <div class="modal fade" id="modal_como_comprar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 23px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Medios y Formas de Pago
                    </h4>
                </div>
                <div class="modal-body">

                    <p align="justify">Paga fácil tu compra a través de las siguientes opciones:
                    </p>


                    <p align="justify">• Tarjetas de crédito y débito VISA a través de la pasarela de pago disponible en
                        nuestra web.</p>
                    <p align="justify">• Depósitos y transferencias a nuestras cuentas bancarias. Ver más información.
                    </p>
                    <p align="justify">• Pago presencial en nuestra tienda física: Puede pagar en efectivo o con
                        Tarjetas de Crédito Aceptamos todas las tarjetas que tengan los stickers de Visa, MasterCard,
                        American Express, incluyendo Ripley Y CMR Falabella que
                        lo contengan.</p>

                    <p align="justify">• Opcional: Pagos con Tarjetas de Crédito VISA en su domicilio a través de un POS
                        inalámbrico.</p>
                    En caso deposite o transfiera a cualquiera de nuestras Cuentas Corrientes, no olvide enviar su
                    constancia o voucher de su operación bancaria vía correo electrónico a
                    soporte@solucionescctvysistemas.com Para mayor detalle por favor tenga en cuenta la siguiente
                    información adicional:
                    </p>
                    <p align="justify">I. Transferencias y Depósitos:</p>
                    <p align="justify">SOLUCIONES CCTV & SISTEMAS S.A.C., posee cuentas corrientes en los bancos más
                        importantes de nuestro país, donde usted podrá depositar o transferir el importe de su compra. A
                        continuación, le damos las instrucciones para un
                        pago exitoso; no olvide que en esta modalidad de pago deberá remitir la constancia o voucher
                        escaneado de su operación bancaria, vía correo electrónico a soporte@solucionescctvysistemas.com
                        haciendo referencia a su pedido.
                        </li>


                        <p align="justify">1. Banco de Crédito del Perú (BCP)</p>
                        <p align="justify">En esta entidad bancaria SOLUCIONES CCTV & SISTEMAS S.A.C., posee una cuenta
                            recaudadora a su nombre, todos los depósitos y transferencias se realizarán únicamente a
                            través de dicha Cuenta Recaudadora.</p>

                        <p align="justify">Para pagos a través de Depósitos en Ventanilla: indicar al cajero que desea
                            depositar en la cuenta Recaudadora de SOLUCIONES CCTV & SISTEMAS S.A.C., el cajero le
                            solicitará su DNI o RUC de ser el caso y le entregará el
                            voucher respectivo donde se consigna el número de operación de su depósito.</p>

                        <p align="justify">Para pagos a través de Transferencia en Línea Via BCP : Una vez que ingrese a
                            la web del banco vaya a la opción "Pago de Servicios", “Nuevo Pago”, elija la opción
                            Empresas Diversas y luego seleccione a SOLUCIONES CCTV &
                            SISTEMAS S.A.C.; para pagos en Nuevos Soles elija la opción Pago en Soles y para Dólares
                            Americanos la opción Pago en Dólares.</p>

                        <p align="justify">2. Otros Bancos</p>
                        <p align="justify">Todas nuestras Cuentas Corrientes indicadas a continuación están a nombre de
                            SOLUCIONES CCTV & SISTEMAS S.A.C.
                        </p>

                        <p align="justify">Cuentas Bancarios </p>

                        <p align="justify">• Banco BCP</p>
                        <p align="justify">Nuevos Soles: 194-357-125-00-0-31</p>
                        <p align="justify">Banco Continental</p>
                        <p align="justify">• Nuevos Soles: 4551 0381 8087 3916</p>

                        <p align="justify">• Banco Scotiabank</p>
                        <p align="justify">Nuevos Soles: 009-022-00000-6192980-58</p>
                        <p align="justify">• Banco BN</p>
                        <p align="justify">Nuevos Soles: 000-610-973-84 </p>
                        <p align="justify">Cuentas Interbancarias</p>

                        <p align="justify">• Banco BCP</p>
                        <p align="justify">Nuevos Soles: 219413571250003000</p>
                        <p align="justify">Banco Continental</p>
                        <p align="justify">• Nuevos Soles: 011-323-000200389677-32</p>

                        <p align="justify">III. Pagos con Crédito Directo (aplica solo a empresas previa coordinación)
                        </p>
                        <p align="justify">• Cheques Diferidos, Letras de Cambio o Pagarés.
                        </p>
                        <p align="justify">• Los Cheques diferidos serán aceptados hasta 30 días sin intereses.</p>
                        <p align="justify">• Las Letras serán aceptadas para financiamientos hasta en 6 meses, los
                            montos de las cuotas serán calculados en base al plazo acordado.</p>
                        <p align="justify">IV. Pago en Tienda</p>
                        <p align="justify">Para pagar un pedido solicitado vía web o un producto visualizado en el
                            catálogo web; usted puede pagar en tienda en soles o dólares al tipo de cambio del día de
                            las siguientes maneras:</p>
                        <p align="justify">• En efectivo.
                            <p align="justify">• Tarjeta de crédito (aceptamos todas las tarjetas que tengan los sticker
                                de Visa, MasterCard, American Express, incluyendo Ripley Y CMR Falabella que lo
                                contengan).
                            </p>
                            <p align="justify">• Tarjeta de Débito.</p>

                        </p>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_puedo_pagarlo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 23px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Despachos y formas de envío
                    </h4>
                </div>
                <div class="modal-body">
                    <p align="justify">SOLUCIONES CCTV & SISTEMAS S.A.C. envía sus productos a Lima Metropolitana y a
                        todo el país, utilizando sus propias unidades móviles o contratando los servicios de empresas
                        dedicadas al servicio de transporte terrestre o Courier
                        que son confiables y con amplia experiencia en el rubro del transporte de mercancías, lo que
                        garantiza que su compra se encontrará debidamente resguardada hasta que ésta llegue a sus manos.
                    </p>
                    <p align="justify">Despachos en Lima Metropolitana</p>

                    <p align="justify">Para las compras vía internet y otras modalidades, la entrega de los productos se
                        realizará con un intervalo de 24 a 48 horas. Si su pedido es de urgencia puede solicitarlo a su
                        Operador Online por correo electrónico a soporte@solucionescctvysistemas.com
                        o comuníquese al 986 838 333</p>

                    <p align="justify">Antes de que su compra le sea entregada nuestros representantes le solicitarán su
                        Documento Nacional de Identidad - DNI en físico para con ello autenticar su titularidad y
                        proceder luego a solicitarle su firma en la Guía de
                        Remisión respectiva donde deberá consignar su nombre completo y el número de su DNI, para
                        finalmente entregarle su pedido y confirmar la recepción del mismo.
                    </p>
                    <p align="justify">Despachos a Provincias</p>

                    <p align="justify">Para las compras vía internet y otras modalidades, los pedidos serán
                        recepcionados hasta las 12m para proceder a su despacho mediante la agencia de transportes de su
                        elección. Debe considerar que los envíos de los productos
                        a provincia irán debidamente embalados y rotulados según la información que usted consignó en el
                        proceso de compra, teniendo estos un tiempo de entrega de 05 días hábiles en promedio,
                        dependiendo del destino de entrega;
                        pudiendo en algunos casos llegar antes de lo establecido.
                    </p>
                    <p align="justify">Un representante nuestro, le enviará a su correo electrónico la constancia de la
                        entrega del producto solicitado a la agencia de transportes elegida por usted, donde se
                        detallará la hora y fecha de recepción; de esta manera
                        usted podrá comunicarse con la agencia para coordinar el recojo de sus productos, quien a su vez
                        le solicitará su DNI para realizar la entrega de la compra en el destino de llegada.</p>
                    <p align="justify">Otras modalidades de Despacho</p>
                    <p align="justify">Los despachos también pueden ser enviados vía la empresa Courier que usted elija
                        o a través de transporte aéreo, previa coordinación. Los costos de envío para esta modalidad
                        variarán según los destinos y la empresa elegida.</p>
                    <p align="justify">Para Considerar</p>

                    <p align="justify">• Los envíos y despacho se realizan una vez tengamos confirmado o coordinado su
                        pago.</p>
                    <p align="justify">• Los despachos en Lima Metropolitana de equipos de cómputo o de seguridad cctv ,
                        otro tipo de artículos tendrán un costo de entrega de S/. 15.00 nuevos soles.</p>
                    <p align="justify">• Los despachos a Provincias vía terrestre tendrán un costo de entrega de S/.
                        29.00 Nuevos Soles.</p>
                    <p align="justify">• No se realizan envíos los días domingos ni feriados.
                    </p>
                    <p align="justify">• SOLUCIONES CCTV & SISTEMAS S.A.C., cuenta con amplia experiencia para sus
                        envíos en el ámbito del territorio nacional , con un porcentaje de éxito del 99.9%</p>
                    <p align="justify">** Cualquier duda o consulta comuníquese al 986 838 333 / 996 7275 62 donde un
                        representante gustosamente lo atenderá, o de lo contrario puede escribirnos a
                        soporte@solucionescctvysistemas.com
                    </p>



                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_puedo_pagarlo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 23px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Cambios, Devoluciones y Reembolsos
                    </h4>
                </div>
                <div class="modal-body">
                    <p align="justify">Los productos comprados en solucionescctvysistemas.com pueden ser devueltos y
                        reembolsados previa aceptación por SOLUCIONES CCTV & SISTEMAS S.A.C. de ser el caso, dentro del
                        plazo de siete (7) días calendarios contados desde
                        la fecha en que se recibió el/los producto/s.</p>
                    <p align="justify">Para poder realizar el reembolso o cambio el producto debe:
                    </p>
                    <p align="justify">• Estar en las mismas condiciones en que se entregó, deberá conservar el embalaje
                        original y estar acompañado de la factura de compra respectiva.</p>
                    <p align="justify">El envío estará a cargo del Usuario. solucionescctvysistemas.com realizará la
                        devolución del dinero, en caso que correspondiere mediante depósito del monto pagado por el
                        producto en cuenta bancaria del Usuario o en efectivo
                        en su Oficina Principal.
                    </p>
                    <p align="justify">Asimismo solucionescctvysistemas.com no garantiza una cantidad específica del
                        stock de los productos publicitados en su portal web; esto debido a que puede darse el caso de
                        compras simultáneas que podrían acabar con el stock
                        de los productos para su venta.
                    </p>
                    <p align="justify">En tal sentido, dado el caso que no se cuente con el stock de alguno de los
                        productos publicitados en el portal web y se haya realizado la compra del mismo se realizará el
                        reintegro del monto pagado por el Usuario de la siguiente
                        forma:
                    </p>
                    <p align="justify">• En caso el Usuario haya realizado una transferencia de dinero en la cuenta
                        bancaria de SOLUCIONES CCTV & SISTEMAS S.A.C. desde una cuenta bancaria de su propiedad, ésta se
                        obliga a realizar al reembolso del dinero pagado
                        realizando un abono de dinero en la cuenta bancaria del Usuario en el lapso de 48 horas de haber
                        realizado el pago del producto por el Usuario.</p>
                    <p align="justify">• En caso el Usuario haya realizado un depósito de dinero en la cuenta bancaria
                        de SOLUCIONES CCTV & SISTEMAS S.A.C. en efectivo, ésta se obliga a realizar al reembolso del
                        dinero pagado en sus oficinas dentro del lapso de 48 horas de haber realizado
                        el pago del producto por parte del Usuario.</p>
                    <p align="justify">• En caso el Usuario haya usado como medio de pago una Tarjeta de Crédito o
                        Débito, SOLUCIONES CCTV & SISTEMAS S.A.C. se obliga a tramitar la anulación de la operación
                        frente a la empresa que procesa el medio de pago y a enviarle
                        al Usuario mediante correo electrónico el Código de la Operación por concepto de Anulación
                        dentro del lapso que la empresa estime conveniente.</p>
                    <p align="justify">En caso de anulación de la compra una vez realizado el pago a través del uso de
                        Tarjeta de Crédito o Débito por el Usuario, se aplicará una penalidad del 5% del monto de la
                        transacción por comisiones o cargos por parte de la
                        entidad emisora de la tarjeta más gastos administrativos.</p>


                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_como_envian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 23px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Términos y Condiciones
                    </h4>
                </div>
                <div class="modal-body">

                    <p align="justify">A continuación se describen los Términos y Condiciones Generales (en adelante:
                        “Términos y Condiciones”) aplicables a la utilización del sitio del Portal WEB ubicado en el URL
                        www.solucionescctvysistemas.com (en adelante denominado
                        “SOLUCIONES CCTV & SISTEMAS S.A.C”) que SOLUCIONES CCTV & SISTEMAS S.A.C (en adelante denominada
                        “SOLUCIONES CCTV & SISTEMAS S.A.C”) pone a disposición de los usuarios que ingresen a su web. La
                        utilización del sitio web
                        atribuye la condición de USUARIO del mismo, e implica la aceptación plena y sin reservas de
                        todas y cada una de las disposiciones incluidas en estos Términos y Condiciones, siendo
                        obligación del USUARIO leer atentamente
                        los Términos y Condiciones antes de hacer uso del sitio y de su contenido. Por otro lado, el
                        Usuario además certifica que es mayor de 18 años de edad. Aceptación de los Términos del
                        Contrato Los siguientes son los términos
                        de un convenio legal celebrado entre el Usuario y solucionescctvysistemas.com Al acceder,
                        navegar, hojear, utilizar, realizar pedidos y/o utilizar todo el resto de funcionalidades que la
                        WEB de solucionescctvysistemas.com
                        ofrece, el Usuario admite haber leído y entendido estos términos, está de acuerdo en sujetarse a
                        los mismos y a cumplir con todas las leyes y reglamentos aplicables. Todo el material, que
                        incluye diseño, artes, imágenes,
                        contenido, interfaz suministrado en solucionescctvysistemas.com está protegido por las leyes del
                        Perú, incluyendo, más no limitado a, las leyes sobre derechos de autor y tratados
                        internacionales. Sea el caso que el Usuario
                        no esté de acuerdo con estos Términos y Condiciones, se le solicita deje de acceder y utilizar
                        el Portal WEB de solucionescctvysistemas.com El Portal WEB de solucionescctvysistemas.com es una
                        web controlada, administrada
                        y operada por SOLUCIONES CCTV & SISTEMAS S.A.C desde sus oficinas ubicadas en Lima, Perú.
                        SOLUCIONES CCTV & SISTEMAS S.A.C no se responsabiliza de la exposición y/o disponibilidad del
                        material de solucionescctvysistemas.com
                        en otros lugares, estando prohibido su acceso desde territorios donde su contenido sea ilegal
                        y/o contrario a la legislación local. Aquellos USUARIOS que decidan ingresar a
                        solucionescctvysistemas.com desde otros lugares
                        lo harán bajo su propia iniciativa, riesgo y estricta responsabilidad, al sujetarse a las leyes
                        de aquel territorio. Cualquier reclamo con relación a, y al uso de, solucionescctvysistemas.com
                        y el material de su contenido,
                        está regulado y circunscrito en estricto por las leyes del Perú. Modificaciones de los Términos
                        de Uso SOLUCIONES CCTV & SISTEMAS S.A.C es libre de actualizar, modificar y/o revisar en
                        cualquier momento sus Términos y Condiciones
                        por medio de la actualización de esta publicación y sin la necesidad de avisos previos. El
                        Usuario que utilice el Portal WEB solucionescctvysistemas.com conviene en darse por obligado por
                        cualquiera de tales revisiones
                        y/o actualizaciones, debiendo por ello visitar y navegar periódicamente por esta página para
                        determinar los Términos y Condiciones vigentes en ese momento, a los cuales el Usuario se
                        encuentra obligado. Disponibilidad del
                        Portal Web El Usuario acepta y reconoce que solucionescctvysistemas.com puede no siempre estar
                        disponible debido a dificultades técnicas o fallas de Internet, de los diversos proveedores con
                        los que trabaja el alojamiento
                        en servidores, los medios de pago, operaciones logísticas, entre otros, o por cualquier otro
                        diverso motivo ajeno a SOLUCIONES CCTV & SISTEMAS S.A.C por ello es que SOLUCIONES CCTV &
                        SISTEMAS S.A.C no garantiza al 100%
                        la disponibilidad y continuidad del funcionamiento de solucionescctvysistemas.com; como tampoco
                        garantiza al 100% su disponibilidad de uso y de los gráficos, mensajes, dibujos, medios de pago,
                        archivos de sonido y/o imagen,
                        fotografías, grabaciones, textos, funcionalidades, software y, en general, cualquier clase de
                        material accesible a través de solucionescctvysistemas.com (en adelante, los “Contenidos”), para
                        la realización de ninguna actividad
                        en particular, ni su infalibilidad y, en particular, aunque no de modo exclusivo, que los
                        Usuarios puedan efectivamente utilizar solucionescctvysistemas.com y los Contenidos. Ni
                        SOLUCIONES CCTV & SISTEMAS S.A.C ni solucionescctvysistemas.com
                        se responsabilizan por cualquier daño, perjuicio o pérdida en el equipo del Usuario originado
                        por fallas en el sistema, servidor o en Internet. De los Contenidos SOLUCIONES CCTV & SISTEMAS
                        S.A.C y solucionescctvysistemas.com
                        no asumen responsabilidad de ninguna índole, si en razón del acceso a
                        solucionescctvysistemas.com o por cualquier transferencia de datos, el equipo del Usuario se
                        viese afectado por algún virus, o por la presencia de otros
                        elementos en los contenidos que puedan producir alteraciones en su sistema informático,
                        documentos electrónicos o ficheros del Usuario. SOLUCIONES CCTV & SISTEMAS S.A.C no garantiza al
                        100% la exactitud, veracidad, exhaustividad
                        y actualidad de la información contenida en solucionescctvysistemas.com, al cual en algunos
                        casos puede contener datos inexactos, incorrectos y/o errores sustanciales o tipográficos. En
                        consecuencia, SOLUCIONES CCTV & SISTEMAS
                        S.A.C no asume responsabilidad alguna por los daños y perjuicios que puedan deberse a la falta
                        de exactitud, veracidad, exhaustividad y actualidad de los Contenidos. SOLUCIONES CCTV &
                        SISTEMAS S.A.C no se responsabiliza
                        por los daños y perjuicios de toda naturaleza que puedan deberse a la transmisión, difusión,
                        almacenamiento, puesta a disposición, recepción, obtención o acceso a los Contenidos, y en
                        particular, aunque no de modo exclusivo,
                        por los daños y perjuicios que puedan deberse a: El incumplimiento de la ley, la moral y las
                        buenas costumbres generalmente aceptadas o el orden público como consecuencia de la transmisión,
                        difusión, almacenamiento, puesta
                        a disposición, recepción, obtención o acceso a los Contenidos. La infracción de los derechos de
                        propiedad intelectual e industrial, de los secretos empresariales, de compromisos contractuales
                        de cualquier clase, de los
                        derechos al honor, a la intimidad personal y familiar y a la imagen de las personas, de los
                        derechos de propiedad y de toda otra naturaleza pertenecientes a un tercero como consecuencia de
                        la transmisión, difusión, almacenamiento,
                        puesta a disposición, recepción, obtención o acceso a los Contenidos. La realización de actos de
                        competencia desleal y publicidad ilícita como consecuencia de la transmisión, difusión,
                        almacenamiento, puesta a disposición,
                        recepción, obtención o acceso a los Contenidos. La inadecuación para cualquier clase de
                        propósito y la defraudación de las expectativas generadas por los Contenidos. El incumplimiento,
                        retraso en el cumplimiento, cumplimiento
                        defectuoso o terminación por cualquier causa de las obligaciones contraídas por terceros y
                        contratos realizados con terceros a través de o con motivo del acceso a los Contenidos. Los
                        vicios y defectos de toda clase de los
                        Contenidos transmitidos, d</section>

	            </script>

	            <!-- WhatsHelp.io widget -->
	            <script type="text/javascript">
	            (function() {
	                var options = {
	                    facebook: "1626920177570816", // Facebook page ID
	                    whatsapp: "+51 986838333", // WhatsApp number
	                    line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
	                    call_to_action: "Hola, Estamos en Linea las 24h ?", // Call to action
	                    button_color: "#FF0000", // Color of button
	                    position: "right", // Position may be 'right' or 'left'
	                    order: "facebook,whatsapp,line;", // Order of buttons
	                };
	                var proto = document.location.protocol,
	                    host = "whatshelp.io",
	                    url = proto + "//static." + host;
	                var s = document.createElement('script');
	                s.type = 'text/javascript';
	                s.async = true;
	                s.src = url + '/widget-send-button/js/init.js';
	                s.onload = function() {
	                    WhWidgetSendButton.init(host, proto, options);
	                };
	                var x = document.getElementsByTagName('script')[0];
	                x.parentNode.insertBefore(s, x);
	            })();
	            </script>

	            </script>
	            <!-- /WhatsHelp.io widget -->ifundidos, almacenados, puestos a disposición o de otra forma
                        transmitidos o puestos a disposición, recibidos, obtenidos o a los que se haya accedido a través
                        de solucionescctvysistemas.com Derecho
                        de Revocación de SOLUCIONES CCTV & SISTEMAS S.A.C SOLUCIONES CCTV & SISTEMAS S.A.C se reserva el
                        derecho, en cualquier momento y sin necesidad de darle notificación previa a los Usuarios, de
                        denegar o retirar el acceso
                        a solucionescctvysistemas.com a cualquier Usuario, denegar el acceso a los Contenidos, o dar por
                        concluida su calidad de Usuario, por violación de los Términos y Condiciones o las condiciones
                        particulares que resulten de
                        aplicación. Obligaciones del Usuario El Usuario se obliga a hacer un uso correcto de
                        solucionescctvysistemas.com y de los Contenidos que contiene el Portal WEB. El Usuario se
                        compromete a utilizar Magitech.pe y los Contenidos
                        de conformidad con la ley, estos Términos y Condiciones, así como con la moral, buenas
                        costumbres y el orden público. El Usuario se obliga a abstenerse de utilizar
                        solucionescctvysistemas.com y los Contenidos con fines
                        o efectos ilícitos, contrarios a lo establecido en estos Términos y Condiciones, lesivos de los
                        derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar
                        o deteriorar los mismos, o
                        impedir su normal utilización o disfrute por parte de los Usuarios. En especial, el Usuario se
                        obliga a abstenerse de realizar cualquiera de los siguientes actos: a) Conducta general Queda
                        prohibido: Utilizar solucionescctvysistemas.com
                        directa o indirectamente, para violar cualquier ley aplicable a la República del Perú,
                        cualquiera fuese su naturaleza, ya sea provincial, nacional o internacional. Enviar o transmitir
                        material pornográfico, sexual u obsceno.
                        Transmitir, distribuir o almacenar cualquier tipo de información, datos o materiales que violen
                        leyes o regulaciones provinciales, nacionales o internacionales. Enviar o transmitir información
                        cuyo contenido sea, directa
                        o indirectamente, y sin que lo siguiente se considere limitativo, trasgresor, profano, abusivo,
                        difamatorio y/o fraudulento, o que revele asuntos privados o personales que afecten a persona
                        alguna, o de lo contrario violen
                        los derechos de los demás. Acceder a solucionescctvysistemas.com utilizando un nombre o datos
                        falsos, erróneos o inexistentes, ya sea como persona natural o jurídica. Enviar o transmitir
                        material alguno que el Usuario no
                        tenga derecho a transmitir con arreglo a la ley (ya sea de Copyright, marca registrada, secreto
                        comercial, patentes u otros derechos de la propiedad de terceros) o con arreglo a relaciones
                        contractuales o fiduciarias (tales
                        como los contratos de no divulgación). Efectuar acciones que restrinjan, denieguen o impidan a
                        cualquier individuo, grupo, entidad u organización, el uso de los Contenidos, productos o
                        servicios ofrecidos a través de solucionescctvysistemas.com
                        b) Seguridad Queda prohibido: Violar los sistemas de autenticación, verificación de identidad y
                        seguridad del servidor, redes o cuentas de Usuarios; esto incluye y no se limita a tratar de
                        acceder a datos no destinados
                        al Usuario, intentar ingresar en el servidor o cuentas sin contar con la expresa autorización
                        para hacerlo, o intentar probar la seguridad de las redes de SOLUCIONES CCTV & SISTEMAS S.A.C
                        utilizando herramientas avanzadas.
                        Intentar interrupciones en las comunicaciones de Internet, tales como alterar información de
                        ruteo, sobrecargar deliberadamente un servicio, efectuar ataques informáticos a otras
                        computadoras sobre Internet, entre otros.
                        Utilizar cualquier programa, comando o grupo de comandos, o enviar mensajes de cualquier tipo,
                        destinados a interferir con la sesión establecida por un Usuario en cualquier punto de Internet.
                        Efectuar cualquier tipo de
                        monitoreo que implique la intercepción de información no destinadas al Usuario. Enviar o
                        transmitir archivos que contengan virus u otras características destructivas que puedan afectar
                        de manera adversa el funcionamiento
                        de una computadora, smarthphone, o equipo electrónico ajeno y/o puedan afectar el correcto
                        funcionamiento de los mismos y/o de solucionescctvysistemas.com De las condiciones El acceso a
                        ciertas páginas de solucionescctvysistemas.com
                        no tendrá restricciones. Sin perjuicio de esto ciertas páginas o funciones de
                        solucionescctvysistemas.com de acceso restringido, con lo cual sólo podrán acceder a las mismas
                        aquel autorizado y registrado como Usuario por
                        parte de SOLUCIONES CCTV & SISTEMAS S.A.C El Usuario puede registrarse en
                        solucionescctvysistemas.com en cualquier momento, llenando los datos correspondientes que le
                        sean solicitados al momento de la inscripción. El Usuario
                        registrado debe asegurarse que los datos personales proporcionados al momento de efectuar la
                        Solicitud de Registro o en cualquier otro momento sean correctos, verdaderos y completos. Al
                        registrarse correctamente, se le
                        informará al Usuario registrado vía correo electrónico la conformidad del registro. No obstante
                        lo anterior, solucionescctvysistemas.com se reserva el derecho de verificar los datos del
                        Usuario y de comprobar que no son
                        verídicos para dar por terminado el registro. El Usuario registrado se obliga a preservar la
                        confidencialidad de su contraseña. En consecuencia, el Usuario registrado será responsable por
                        el acceso a solucionescctvysistemas.com
                        y las operaciones que se realicen con su nombre de usuario y contraseña, y se obliga a
                        indemnizar y mantener indemne a SOLUCIONES CCTV & SISTEMAS S.A.C y/o los demás Usuarios por todo
                        costo, gasto, daño o perjuicio (incluyendo
                        los honorarios de abogados) que SOLUCIONES CCTV & SISTEMAS S.A.C y/o los demás Usuarios pudieren
                        tener que pagar o pudieren sufrir como consecuencia, directa o indirecta, de cualquier acceso a
                        solucionescctvysistemas.com
                        y/u operación realizada con su nombre de usuario y contraseña. SOLUCIONES CCTV & SISTEMAS S.A.C
                        se reserva el derecho a modificar unilateralmente, en cualquier momento y sin aviso previo, la
                        presentación y configuración
                        de solucionescctvysistemas.com, así como las condiciones requeridas para utilizar
                        solucionescctvysistemas.com Medios para la obtención de contenidos El Usuario deberá abstenerse
                        de obtener e incluso de intentar obtener
                        cualquier tipo de Contenido a través de solucionescctvysistemas.com, empleando para ello medios
                        o procedimientos distintos a los que según los casos se hayan puesto a disposición o se hayan
                        indicado para este efecto en
                        las páginas web donde se encuentren o, en general, de los que se empleen habitualmente en
                        Internet, siempre que no entrañen un riesgo de daño o inutilización de
                        solucionescctvysistemas.com, o de los Contenidos. Uso correcto
                        de los Contenidos El Usuario se obliga a usar los Contenidos de forma diligente, correcta y
                        lícita y, en particular se compromete a abstenerse de: Utilizar los Contenidos de forma, con
                        fines o efectos contrarios a la ley,
                        a la moral y a las buenas costumbres generalmente aceptadas o al orden público. Reproducir o
                        copiar, distribuir, permitir el acceso del público a través de cualquier modalidad de
                        comunicación pública, transformar o modificar
                        los Contenidos, a menos que se cuente con la autorización del titular de los correspondientes
                        derechos o ello resulte legalmente permitido. Suprimir, eludir o manipular el “Copyright” y
                        demás datos identificativos de los
                        derechos de autor de SOLUCIONES CCTV & SISTEMAS S.A.C o de sus titulares incorporados a los
                        Contenidos, así como los dispositivos técnicos de protección, las huellas digitales o
                        cualesquiera mecanismos de información que
                        pudieren contener los Contenidos. Emplear los Contenidos y, en particular, la información de
                        cualquier clase obtenida a través de Magitech.pe, para comercializar o divulgar de cualquier
                        modo dicha información. Indemnizaciones
                        El Usuario defenderá y mantendrá indemne a SOLUCIONES CCTV & SISTEMAS S.A.C y sus controlantes,
                        así como también a sus afiliadas, funcionarios, directores, empleados, representantes, presentes
                        o futuros, contra todo daño
                        y/o perjuicio, cualquiera fuese su naturaleza, inclusive los gastos razonables por honorarios de
                        abogados, que pudiera surgir con motivo u ocasión de cualquier acción o demanda iniciada por un
                        tercero como consecuencia
                        del incumplimiento del Usuario de cualquiera de las cláusulas de los presentes Términos y
                        Condiciones, o de la violación por el mismo de cualquier ley o derecho de un tercero por la
                        utilización de solucionescctvysistemas.com
                        y/o los Contenidos, cuando se deriven o sean ocasionados, directa o indirectamente, del
                        incumplimiento del Usuario de cualquiera de las cláusulas de los presentes Términos y
                        Condiciones, o de la violación por el mismo de
                        cualquier ley o derecho de un tercero. En lo que respecta a la utilización de
                        solucionescctvysistemas.com bajo exclusiva responsabilidad, el Usuario es consciente y acepta
                        voluntariamente que el uso de la misma y sus Contenidos
                        los realiza en todo caso bajo su única y exclusiva responsabilidad Restricciones de Uso Los
                        derechos de autor de todo el material suministrado en solucionescctvysistemas.com son propiedad
                        de SOLUCIONES CCTV & SISTEMAS S.A.C
                        o del creador original de este material. Exceptuando lo expresamente estipulado en este
                        documento, nada de este material puede ser copiado, reproducido, distribuido, vuelto a publicar,
                        desplegado, anunciado o transmitido
                        de ninguna manera o por ningún medio, incluyendo, más no limitado a, medios electrónicos,
                        mecánicos, de fotocopiado, de grabación o de cualquier otra índole, sin el permiso previo por
                        escrito de SOLUCIONES CCTV & SISTEMAS
                        S.A.C o del titular de los derechos de autor. Se otorga permiso para desplegar en pantalla,
                        copiar y distribuir el material de solucionescctvysistemas.com únicamente para uso personal no
                        comercial, con la condición de que
                        el Usuario no modifique el material y que conserve todas las leyendas de derechos de autor y de
                        otro tipo de propiedad contenidas en este material. Este permiso termina automáticamente si el
                        Usuario viola cualquiera de
                        los Términos y Condiciones. A su terminación, el Usuario destruirá de manera inmediata cualquier
                        material que haya reproducido o impreso. El Usuario tampoco puede, sin el permiso de SOLUCIONES
                        CCTV & SISTEMAS S.A.C, hacer
                        réplicas en otro servidor de cualquier material contenido en solucionescctvysistema.com
                        Cualquier uso no autorizado de cualquier material contenido en solucionescctvysistemas.com puede
                        constituir una violación de las leyes
                        de derechos de autor, de las leyes de marcas comerciales, de las leyes de privacidad y
                        publicidad y de las leyes y los reglamentos de comunicaciones. Procedimiento de cambios,
                        devoluciones y reembolsos Los productos comprados
                        en solucionescctvysistemas.com pueden ser devueltos y reembolsados previa revisión técnica o
                        aceptación por SOLUCIONES CCTV & SISTEMAS S.A.C de ser el caso, dentro del plazo de siete (7)
                        días calendarios contados desde
                        la fecha en que se recibió el/los producto/s. Para poder realizar el reembolso o cambio el
                        producto debe: Estar en las mismas condiciones en que se entregó, deberá conservar el embalaje
                        original y estar acompañado de la
                        factura de compra respectiva. El envío estará a cargo del Usuario. solucionescctvysistemas.com
                        realizará la devolución del dinero, en caso que correspondiere mediante depósito del monto
                        pagado por el producto en cuenta
                        bancaria del Usuario o en efectivo en su Oficina Principal. Asimismo solucionescctvysistemas.com
                        no garantiza una cantidad específica del stock de los productos publicitados en su portal web;
                        esto debido a que puede darse
                        el caso de compras simultáneas que podrían acabar con el stock de los productos para su venta.
                        En tal sentido, dado el caso que no se cuente con el stock de alguno de los productos
                        publicitados en el portal web y se haya
                        realizado la compra del mismo se realizará el reintegro del monto pagado por el Usuario de la
                        siguiente forma: En caso el Usuario haya realizado una transferencia de dinero en la cuenta
                        bancaria de SOLUCIONES CCTV & SISTEMAS
                        S.A.C desde una cuenta bancaria de su propiedad, ésta se obliga a realizar al reembolso del
                        dinero pagado realizando un abono de dinero en la cuenta bancaria del Usuario en el lapso de 48
                        horas de haber realizado el pago
                        del producto por el Usuario. En caso el Usuario haya realizado un depósito de dinero en la
                        cuenta bancaria de SOLUCIONES CCTV & SISTEMAS S.A.C en efectivo, ésta se obliga a realizar al
                        reembolso del dinero pagado en sus
                        oficinas dentro del lapso de 48 horas de haber realizado el pago del producto por parte del
                        Usuario. En caso el Usuario haya usado como medio de pago una Tarjeta de Crédito o Débito,
                        SOLUCIONES CCTV & SISTEMAS S.A.C se
                        obliga a tramitar la anulación de la operación frente a la empresa que procesa el medio de pago
                        y a enviarle al Usuario mediante correo electrónico el Código de la Operación por concepto de
                        Anulación dentro del lapso que
                        la empresa estime conveniente. En caso de anulación de la compra una vez realizado el pago a
                        través del uso de Tarjeta de Crédito o Débito por el Usuario, se aplicará una penalidad del 5%
                        del monto de la transacción por
                        comisiones o cargos por parte de la entidad emisora de la tarjeta más gastos administrativos.
                        Despachos de los Productos Los productos adquiridos a través del sitio se sujetarán a las
                        condiciones de despacho y entrega elegidas
                        por el Usuario y disponibles en solucionescctvysistemas.com. La información del lugar de envío
                        es de exclusiva responsabilidad del Usuario. Los plazos elegidos para el despacho y entrega, se
                        cuentan desde que el Usuario
                        haya validado la orden de compra y el medio de pago utilizado, y se consideran días hábiles para
                        el cumplimiento de dicho plazo. solucionescctvysistemas.com comunicará por mail a los
                        compradores los datos para que pueda
                        realizar el seguimiento del estado del envío por Internet. Si el Usuario y/o titular consignado
                        en la información de envío y datos de facturación del comprobante de compra se encontrara
                        ausente cuando se le visita para
                        dejar el pedido, nuestro transportista dejará un aviso en el que figure la hora de la visita. En
                        caso de que por segunda vez no se encuentre, el envío será reintegrado a
                        solucionescctvysistemas.com, debiendo el Usuario
                        ponerse en contacto con nuestras oficinas para coordinar una nueva entrega cuyo costo estará a
                        exclusivo cargo del Usuario. Jurisdicción y Competencia Cualquier divergencia sobre la validez,
                        existencia, interpretación,
                        cumplimiento, incumplimiento o ejecución de estos Términos y Condiciones será dirimida
                        exclusivamente ante la jurisdicción de los jueces y tribunales del distrito judicial de Lima
                        Cercado, especializados en lo comercial.
                        Marcas Comerciales Las marcas comerciales, las marcas de servicio y los logos (en adelante
                        "Marcas Comerciales") usados y desplegados en solucionescctvysistemas.com son registradas y no
                        registradas de SOLUCIONES CCTV &
                        SISTEMAS S.A.C y otros. Nada en solucionescctvysistemas.com deberá ser interpretado como
                        concesión, por implicación, por exclusión, o de ninguna otra manera, de ninguna licencia o
                        derecho de uso de cualquier Marca Comercial
                        desplegada en solucionescctvysistemas.com, sin el permiso por escrito del titular de los
                        derechos de la Marca Comercial. SOLUCIONES CCTV & SISTEMAS S.A.C hace cumplir de manera enérgica
                        sus derechos de propiedad intelectual
                        en toda la extensión de la ley. Los nombres de las marcas usadas y desplegadas en
                        solucionescctvysistemas.com, sea registradas y no registradas de SOLUCIONES CCTV & SISTEMAS
                        S.A.C, o el logo de SOLUCIONES CCTV & SISTEMAS
                        S.A.C, no pueden ser usados de manera alguna, incluyendo anuncios o publicidad relacionados con
                        la distribución del material en solucionescctvysistemas.com, sin permiso previo por escrito.
                        SOLUCIONES CCTV & SISTEMAS S.A.C
                        prohíbe el uso de los logos de su propiedad en forma de enlace ("hot" link) a cualquiera de los
                        sitios de SOLUCIONES CCTV & SISTEMAS S.A.C, a menos que el establecimiento de un enlace de tal
                        naturaleza sea aprobado por
                        SOLUCIONES CCTV & SISTEMAS S.A.C, Responsabilidad Limitada Bajo ninguna circunstancia,
                        incluyendo, pero no limitando a, negligencia, será SOLUCIONES CCTV & SISTEMAS S.A.C o
                        solucionescctvysistemas.com responsable por cualquier
                        daño directo, indirecto, especial, incidental, consecuente, incluyendo, mas no limitado a,
                        pérdida de información o utilidades, resultado del uso, o la incapacidad para usar el material
                        en la misma, aún en el caso en que
                        SOLUCIONES CCTV & SISTEMAS S.A.C o un representante autorizado de SOLUCIONES CCTV & SISTEMAS
                        S.A.C haya sido puesto al tanto de la posibilidad de tal daño. En el caso en que el uso del
                        material de Magitech.pe dé como resultado
                        la necesidad de dar servicio a, reparar o corregir un equipo o información, el Usuario deberá
                        asumir cualquier costo derivado por ello. Aplicación Los presentes Términos y Condiciones no
                        podrán ser interpretados como un
                        contrato de sociedad, mandato, agencia, y no generan ningún tipo de relación entre SOLUCIONES
                        CCTV & SISTEMAS S.A.C y el Usuario. Si alguna de las condiciones que anteceden fuera declarada
                        nula, dicha nulidad no afectará
                        en modo alguno la validez o exigibilidad del resto de las condiciones previstas en estos
                        Términos y Condiciones. Estos Términos y Condiciones no podrán ser enmendados o modificados por
                        el Usuario, a excepción de que sea
                        por medio de un documento escrito y firmado tanto por el Usuario como por el representante legal
                        de SOLUCIONES CCTV & SISTEMAS S.A.C. La falta de acción de SOLUCIONES CCTV & SISTEMAS S.A.C con
                        respecto a una violación de
                        los Términos y Condiciones por parte del Usuario u otros, no afecta el derecho de SOLUCIONES
                        CCTV & SISTEMAS S.A.C de actuar frente a una violación posterior y/o similar. Los acápites de
                        los presentes Términos y Condiciones
                        están puestos únicamente como referencia, y de ninguna manera definen, limitan, delimitan o
                        describen el ámbito o la extensión de dicha sección. SOLUCIONES CCTV & SISTEMAS S.A.C tiene la
                        facultad de actualizar estos términos
                        en cualquier momento. Este acuerdo será gobernado e interpretado de acuerdo a las leyes del
                        Perú, sin dar efecto a cualquier principio de conflictos de ley. Si alguna disposición de este
                        acuerdo es ilegal, o presenta un
                        vacío, o por cualquier razón resulta inaplicable, la misma deberá ser interpretada centro del
                        marco del acuerdo y en cualquier caso no afectará la validez y la aplicabilidad de las
                        provisiones restantes. Contáctenos Si
                        desea contactarnos por cualquier motivo y conocer más sobre nuestras prácticas, por favor
                        visítenos a la siguiente dirección: Av. el Sol / Av. Revolución Lt. 13 - Mz. H - Gp. 15 - St. 1
                        Villa el Salvador - Lima - Peru ;
                        También puede escribirnos a: soporte@solucionescctvysistemas.com o comunicarse con nuestro Call
                        Center al 986838333.</p>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_tiene_garantia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 23px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Garantías</h4>
                </div>
                <div class="modal-body">
                    <p align="justify">La Garantía de su Equipo adquirido en SOLUCIONES CCTV & SISTEMAS S.A.C cubre mano
                        de obra y cambio o reparación de partes de la configuración original del Equipo (Hardware) que
                        presente problemas bajo condiciones de uso y manejo
                        normales indicados en el manual del usuario y que eventualmente presente defectos de fabricación
                        durante 12 meses a partir de la fecha de compra. Cualquier cobertura adicional podrá constar en
                        la Factura o Boleta de Venta.</p>
                    <p align="justify">Cabe indicar que el Manual de Usuario vendrá dentro del empaque del Equipo o será
                        enviado de forma digital a la dirección de correo electrónico que usted nos indique a nuestro
                        correo electrónico soporte@solucionescctvysistemas.com
                        con el asunto “Solicitud de Manual Digital” y el número de su comprobante de pago.
                    </p>
                    <p align="justify">Es imprescindible que el usuario nos indique su dirección de correo electrónico
                        para dirigir las comunicaciones de caso.
                    </p>
                    <p align="justify">Información General</p>
                    <p align="justify">• Centro de Servicio Técnico de </p>
                    <p align="justify">Av. el Sol / Av. Revolución Lt. 13 - Mz. H - Gp. 15 - St. 1 Villa el Salvador -
                        Lima - Peru</p>
                    <p align="justify">• Lima y Provincia: 986 838 333</p>
                    <p align="justify">• Mail: soporte@solucionescctvysistemas.com Garantía del Servicio Técnico de
                        SOLUCIONES CCTV & SISTEMAS S.A.C.</p>
                    <p align="justify">Dentro del período y según la modalidad de garantía ofrecida en el Comprobante de
                        Pago, el cliente será atendido por el Centro de Servicio Técnico de SOLUCIONES CCTV & SISTEMAS
                        S.A.C para efectuar la reparación.</p>
                    <p align="justify">Toda solicitud de reparación, cambio o devolución de dinero por un equipo
                        defectuoso, debe ser comunicada por escrito al Centro de Servicio Técnico de SOLUCIONES CCTV &
                        SISTEMAS S.A.C a través de la Orden de Servicio, la cual
                        será llenada en las instalaciones de SOLUCIONES CCTV & SISTEMAS S.A.C en presencia del personal
                        de la empresa generando un número de atención con el cual podrá hacerle el seguimiento
                        respectivo.</p>
                    <p align="justify">El software preinstalado originalmente cuenta con una garantía de treinta (30)
                        días a partir de la fecha de la adquisición inicial del equipo. En caso de falla del software
                        preinstalado en el equipo, éste será reinstalado a
                        su condición original.</p>
                    <p align="justify">El cliente será quien proporcione el Software más los CD de Drivers originales de
                        su equipo.</p>
                    <p align="justify">Una vez transcurrido el Período de Garantía del Software, SOLUCIONES CCTV &
                        SISTEMAS S.A.C podrá cobrar el servicio de reinstalación de dicho Software y la reconfiguración
                        del equipo.
                    </p>
                    <p align="justify">El computador podría incluir software de demostración por tiempo limitado: Por
                        ejemplo: Antivirus con 30 días u otros que no están incluidos en el servicio post venta.</p>
                    <p align="justify">Accesorios Periféricos</p>
                    <p align="justify">Sólo los accesorios vendidos por SOLUCIONES CCTV & SISTEMAS S.A.C que forman
                        parte del equipo están cubiertos por esta Garantía.
                        <p align="justify">Garantía de Partes</p>
                        <p align="justify">Todos los repuestos tienen una garantía de 90 días. Una vez instalado el
                            repuesto en un Equipo vendido por SOLUCIONES CCTV & SISTEMAS S.A.C, contará con la mayor
                            garantía que pueda corresponderle, es decir, los 90 días
                            o el resto de la garantía de la unidad en donde se colocó.
                            <p align="justify">Todas las partes serán suministradas sin costo adicional en base a
                                intercambio y serán partes nuevas estándar o partes de igual calidad o de las mismas
                                condiciones operativas. Todas las partes removidas para ser reemplazadas
                                serán propiedad de SOLUCIONES CCTV & SISTEMAS S.A.C.
                                <p align="justify">Transferencia de Garantía</p>
                                <p align="justify">La Garantía podrá ser transferida junto con el equipo cuando éste sea
                                    vendido o cedido a un tercero distinto al propietario inicial, siempre y cuando se
                                    haya notificado por escrito de esta situación a SOLUCIONES
                                    CCTV & SISTEMAS S.A.C siguiendo el efecto de las formalidades establecidas en las
                                    condiciones de este Certificado. La transferencia de garantía no aplica a
                                    distribuidores.
                                    <p align="justify">La Garantía terminará automáticamente cuando no se hubiere
                                        notificado esta transferencia dentro de los 30 días naturales siguientes a que
                                        esta ocurra.
                                        <p align="justify">Garantía por pixeles encendidos o apagados.
                                        </p>
                                        <p align="justify">Procede por 90 días desde la adquisición del equipo si
                                            presenta en su pantalla más de 4 pixeles apagados, o más de 4 pixeles
                                            permanentemente encendidos, o la combinación de más de 4 pixeles de ambos,
                                            en
                                            un área de una pulgada cuadrada.
                                            <p align="justify">Garantía por Equipos Remanufacturados.
                                            </p>
                                            <p align="justify">Los equipos remanufacturados están cubiertos por la
                                                garantía ofrecida por SOLUCIONES CCTV & SISTEMAS S.A.C, de acuerdo al
                                                período y según la modalidad ofrecida en el Comprobante de Pago, sin
                                                embargo
                                                el cliente debe considerar en cuanto a la idoneidad y calidad de los
                                                equipos de esta naturaleza lo siguiente:
                                                <p align="justify">“Un equipo remanufacturado viene a ser un equipo
                                                    reparado o repotenciado por el mismo fabricante o por terceros y
                                                    obviamente se comercializan a un precio menor, en tal sentido en
                                                    algunos casos su
                                                    vida útil puede ser menor a la de un equipo nuevo. Estos equipos han
                                                    sido devueltos al fabricante por diferentes causas: no pasó los
                                                    niveles de calidad en la línea de producción, fueron usados
                                                    de prueba, en exhibiciones de ventas, y cancelaciones de órdenes,
                                                    finalmente estos luego del proceso de calidad han pasado todas las
                                                    pruebas y son puestos nuevamente en el mercado con todos los
                                                    accesorios y las mismas características que los artículos nuevo”.
                                                    <p align="justify">Condiciones</p>
                                                    <p align="justify">Para hacer válida esta Garantía:</p>
                                                    <p align="justify">Debe presentarse el comprobante de pago y la guía
                                                        de remisión, junto con el equipo defectuoso y el software más
                                                        los CD de los drivers de su equipo.
                                                        <p align="justify">La Garantía cubre la reparación de los
                                                            equipos informáticos y de seguridad cctv y sus accesorios
                                                            periféricos ante eventuales errores de fábrica, desde el
                                                            momento de su adquisición inicial.
                                                            <p align="justify">Para el caso de que no sea posible
                                                                realizar la reparación del equipo, SOLUCIONES CCTV &
                                                                SISTEMAS S.A.C se compromete a cambiar el equipo y/o las
                                                                partes y/o componentes defectuosos del
                                                                mismo, según proceda, sin cargo alguno para el cliente,
                                                                por un componente igual o equivalente en su
                                                                funcionalidad. En ningún caso SOLUCIONES CCTV & SISTEMAS
                                                                S.A.C contempla la devolución
                                                                de dinero hasta haber cumplido con todas las exigencias
                                                                de Ley.
                                                                <p align="justify">La presente garantía no incluye
                                                                    compensaciones y/o indemnizaciones. En todo caso, la
                                                                    responsabilidad máxima de SOLUCIONES CCTV & SISTEMAS
                                                                    S.A.C para con el cliente quedará limitada
                                                                    al precio de compra pagado por el equipo.
                                                                    <p align="justify">La ejecución de la garantía se
                                                                        realizará en los plazos más breves posible.
                                                                        Salvo en situaciones de fuerza mayor o caso
                                                                        fortuito, el tiempo de reparación en ningún caso
                                                                        será mayor
                                                                        a 30 días útiles contados a partir de la fecha
                                                                        del diagnóstico del equipo en nuestro Servicio
                                                                        Técnico el cual se informará al correo
                                                                        electrónico referido por el usuario, de
                                                                        necesitarse un plazo adicional este se
                                                                        coordinará previamente con el cliente además de
                                                                        su aceptación a dicha prórroga.
                                                                        <p align="justify">
                                                                            Es responsabilidad del cliente hacer copias
                                                                            de seguridad periódicas de datos almacenados
                                                                            en unidades de disco u otros dispositivos de
                                                                            almacenamiento, como precaución contra
                                                                            posibles fallas, alteraciones o pérdida de
                                                                            datos.
                                                                            <p align="justify">
                                                                                Como toda batería, la capacidad máxima
                                                                                de carga se reducirá con el tiempo de
                                                                                uso. La garantía de la batería no cubre
                                                                                las reducciones en capacidad de la
                                                                                misma. La batería solamente tiene
                                                                                garantía contra defectos de fabricación
                                                                                por (3) tres meses, por ser
                                                                                un elemento consumible.
                                                                                <p align="justify">
                                                                                    Para determinar si una batería tiene
                                                                                    una falla cubierta por la garantía
                                                                                    es posible que sea necesario
                                                                                    ejecutar algún diagnóstico en
                                                                                    laboratorio.
                                                                                    <p align="justify">
                                                                                        El tiempo de duración de la
                                                                                        batería podrá variar dependiendo
                                                                                        de la configuración y uso del
                                                                                        producto. Eso engloba, más no se
                                                                                        limita al modelo de producto,
                                                                                        aplicativos cargados,
                                                                                        definiciones de administración
                                                                                        de energía y recursos del
                                                                                        producto.
                                                                                        <p align="justify">
                                                                                            Exclusiones
                                                                                        </p>
                                                                                        <p align="justify">
                                                                                            Esta garantía se excluye por
                                                                                            las siguientes razones:
                                                                                        </p>
                                                                                        <p align="justify">
                                                                                            Por vencimiento del software
                                                                                            demostrativo de uso por
                                                                                            tiempo limitado que podría
                                                                                            haberse incluido con el
                                                                                            equipo.
                                                                                        </p>
                                                                                        <p align="justify">
                                                                                            Cuando el producto, número
                                                                                            de serie o sello de garantía
                                                                                            haya sido dañado, alterado o
                                                                                            borrado.
                                                                                        </p>
                                                                                        <p align="justify">
                                                                                            Cuando no se demuestre que
                                                                                            el equipo esté dentro del
                                                                                            período de Garantía.
                                                                                        </p>
                                                                                        <p align="justify">
                                                                                            Cuando el desperfecto sea
                                                                                            consecuencia del mal uso o
                                                                                            de la falta de observación
                                                                                            del manual de usuario que se
                                                                                            acompaña al equipo o causas
                                                                                            diferentes al uso normal.
                                                                                            <p align="justify">
                                                                                                Cuando haya existido
                                                                                                algún intento anterior
                                                                                                de reparación fuera del
                                                                                                Servicio Técnico de
                                                                                                SOLUCIONES CCTV &
                                                                                                SISTEMAS S.A.C.
                                                                                                <p align="justify">
                                                                                                    Cuando el equipo
                                                                                                    haya recibido golpes
                                                                                                    accidentales o
                                                                                                    intencionales o haya
                                                                                                    sido expuesto a
                                                                                                    elementos nocivos
                                                                                                    como agua, ácidos,
                                                                                                    fuego, intemperie,
                                                                                                    humedad,
                                                                                                    fluctuaciones de
                                                                                                    voltaje, o cualquier
                                                                                                    otro similar o
                                                                                                    análogo (extensiones
                                                                                                    sin conexión a
                                                                                                    tierra,
                                                                                                    cortocircuitos en la
                                                                                                    red eléctrica, etc.)
                                                                                                    o sobre voltaje en
                                                                                                    la red eléctrica.
                                                                                                    <p align="justify">
                                                                                                        Cuando la falla
                                                                                                        del equipo sea
                                                                                                        producida por
                                                                                                        falta de
                                                                                                        mantenimiento
                                                                                                        preventivo o
                                                                                                        mantenimiento
                                                                                                        inapropiado.
                                                                                                        <p
                                                                                                            align="justify">
                                                                                                            Cuando el
                                                                                                            equipo
                                                                                                            presente
                                                                                                            problemas
                                                                                                            debidos a
                                                                                                            re-configuraciones
                                                                                                            o
                                                                                                            incompatibilidades
                                                                                                            de software
                                                                                                            o hardware y
                                                                                                            otros no
                                                                                                            incluidos
                                                                                                            con el
                                                                                                            equipo.
                                                                                                            <p
                                                                                                                align="justify">
                                                                                                                Cuando
                                                                                                                por
                                                                                                                incompetencia
                                                                                                                y/o
                                                                                                                desconocimiento
                                                                                                                por
                                                                                                                parte
                                                                                                                del
                                                                                                                usuario
                                                                                                                en la
                                                                                                                instalación,
                                                                                                                configuración
                                                                                                                y
                                                                                                                operación
                                                                                                                del
                                                                                                                software
                                                                                                                se
                                                                                                                genere
                                                                                                                un mal
                                                                                                                funcionamiento
                                                                                                                o
                                                                                                                errores
                                                                                                                de
                                                                                                                activación,
                                                                                                                registro
                                                                                                                y/o
                                                                                                                personalización
                                                                                                                del
                                                                                                                equipo.
                                                                                                                <p
                                                                                                                    align="justify">
                                                                                                                    Bajo
                                                                                                                    ninguna
                                                                                                                    circunstancia
                                                                                                                    el
                                                                                                                    Soporte
                                                                                                                    Técnico
                                                                                                                    de
                                                                                                                    SOLUCIONES
                                                                                                                    CCTV
                                                                                                                    &
                                                                                                                    SISTEMAS
                                                                                                                    S.A.C
                                                                                                                    será
                                                                                                                    responsables
                                                                                                                    de
                                                                                                                    la
                                                                                                                    pérdida
                                                                                                                    de
                                                                                                                    información
                                                                                                                    del
                                                                                                                    usuario
                                                                                                                    debido
                                                                                                                    a
                                                                                                                    problemas
                                                                                                                    de
                                                                                                                    hardware
                                                                                                                    o
                                                                                                                    software.
                                                                                                                    <p
                                                                                                                        align="justify">
                                                                                                                        Cuando
                                                                                                                        el
                                                                                                                        equipo
                                                                                                                        falle
                                                                                                                        por
                                                                                                                        haber
                                                                                                                        sido
                                                                                                                        contaminado
                                                                                                                        por
                                                                                                                        virus
                                                                                                                        informáticos.
                                                                                                                        <p
                                                                                                                            align="justify">
                                                                                                                            Cuando
                                                                                                                            la
                                                                                                                            falla
                                                                                                                            se
                                                                                                                            deba
                                                                                                                            a
                                                                                                                            una
                                                                                                                            diferencia
                                                                                                                            en
                                                                                                                            las
                                                                                                                            normas
                                                                                                                            de
                                                                                                                            seguridad
                                                                                                                            o
                                                                                                                            condiciones
                                                                                                                            técnicas
                                                                                                                            locales
                                                                                                                            de
                                                                                                                            una
                                                                                                                            localidad
                                                                                                                            o
                                                                                                                            provincia
                                                                                                                            distinta
                                                                                                                            a
                                                                                                                            donde
                                                                                                                            el
                                                                                                                            equipo
                                                                                                                            fue
                                                                                                                            adquirido.
                                                                                                                            Se
                                                                                                                            debe
                                                                                                                            tener
                                                                                                                            en
                                                                                                                            cuenta
                                                                                                                            que
                                                                                                                            algunos
                                                                                                                            equipos
                                                                                                                            necesitan
                                                                                                                            condiciones
                                                                                                                            climáticas
                                                                                                                            o
                                                                                                                            ambientales
                                                                                                                            para
                                                                                                                            su
                                                                                                                            correcto
                                                                                                                            funcionamiento
                                                                                                                            según
                                                                                                                            lo
                                                                                                                            refiere
                                                                                                                            el
                                                                                                                            fabricante
                                                                                                                            en
                                                                                                                            el
                                                                                                                            Manual
                                                                                                                            de
                                                                                                                            Usuario.
                                                                                                                            <p
                                                                                                                                align="justify">
                                                                                                                                Cuando
                                                                                                                                la
                                                                                                                                falla
                                                                                                                                se
                                                                                                                                deba
                                                                                                                                al
                                                                                                                                uso
                                                                                                                                de
                                                                                                                                accesorios,
                                                                                                                                cargadores
                                                                                                                                o
                                                                                                                                consumibles
                                                                                                                                que
                                                                                                                                no
                                                                                                                                sean
                                                                                                                                proporcionados
                                                                                                                                por
                                                                                                                                SOLUCIONES
                                                                                                                                CCTV
                                                                                                                                &
                                                                                                                                SISTEMAS
                                                                                                                                S.A.C
                                                                                                                                o
                                                                                                                                no
                                                                                                                                diseñados
                                                                                                                                para
                                                                                                                                el
                                                                                                                                producto.
                                                                                                                                <p
                                                                                                                                    align="justify">
                                                                                                                                    Cuando
                                                                                                                                    la
                                                                                                                                    falla
                                                                                                                                    se
                                                                                                                                    deba
                                                                                                                                    a
                                                                                                                                    la
                                                                                                                                    utilización
                                                                                                                                    de
                                                                                                                                    materiales
                                                                                                                                    y
                                                                                                                                    consumibles
                                                                                                                                    no
                                                                                                                                    recomendados
                                                                                                                                    por
                                                                                                                                    el
                                                                                                                                    fabricante
                                                                                                                                    del
                                                                                                                                    equipo.
                                                                                                                                    <p
                                                                                                                                        align="justify">
                                                                                                                                        La
                                                                                                                                        garantía
                                                                                                                                        no
                                                                                                                                        cubre
                                                                                                                                        sustitución
                                                                                                                                        o
                                                                                                                                        reparación
                                                                                                                                        debido
                                                                                                                                        al
                                                                                                                                        desgaste
                                                                                                                                        o
                                                                                                                                        rotura
                                                                                                                                        de
                                                                                                                                        elementos
                                                                                                                                        mecánicos,
                                                                                                                                        plásticos,
                                                                                                                                        gomas,
                                                                                                                                        botones,
                                                                                                                                        etc.
                                                                                                                                        así
                                                                                                                                        como
                                                                                                                                        los
                                                                                                                                        deterioros
                                                                                                                                        estéticos
                                                                                                                                        debido
                                                                                                                                        al
                                                                                                                                        uso
                                                                                                                                        normal
                                                                                                                                        del
                                                                                                                                        producto,
                                                                                                                                        tales
                                                                                                                                        como
                                                                                                                                        abolladuras,
                                                                                                                                        rayones
                                                                                                                                        en
                                                                                                                                        la
                                                                                                                                        pantalla
                                                                                                                                        u
                                                                                                                                        otras
                                                                                                                                        partes
                                                                                                                                        del
                                                                                                                                        equipo,
                                                                                                                                        conexiones
                                                                                                                                        o
                                                                                                                                        puertos
                                                                                                                                        flojos
                                                                                                                                        tales
                                                                                                                                        como
                                                                                                                                        conector
                                                                                                                                        DC,
                                                                                                                                        USB,
                                                                                                                                        HDMI,
                                                                                                                                        VGA
                                                                                                                                        o
                                                                                                                                        similares.

                </div>

            </div>
        </div>
    </div>
    <?php } ?>

    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>
    </section>

	            </script>

	            <!-- WhatsHelp.io widget -->
	            <script type="text/javascript">
	            (function() {
	                var options = {
	                    facebook: "1626920177570816", // Facebook page ID
	                    whatsapp: "+51 986838333", // WhatsApp number
	                    line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
	                    call_to_action: "Hola, Estamos en Linea las 24h ?", // Call to action
	                    button_color: "#FF0000", // Color of button
	                    position: "right", // Position may be 'right' or 'left'
	                    order: "facebook,whatsapp,line;", // Order of buttons
	                };
	                var proto = document.location.protocol,
	                    host = "whatshelp.io",
	                    url = proto + "//static." + host;
	                var s = document.createElement('script');
	                s.type = 'text/javascript';
	                s.async = true;
	                s.src = url + '/widget-send-button/js/init.js';
	                s.onload = function() {
	                    WhWidgetSendButton.init(host, proto, options);
	                };
	                var x = document.getElementsByTagName('script')[0];
	                x.parentNode.insertBefore(s, x);
	            })();
	            </script>

	            </script>
	            <!-- /WhatsHelp.io widget -->
    <script src="assets/js/cloud-zoom.js"></script>
    <script src="assets/infoprod/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="assets/infoprod/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="assets/infoprod/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="assets/infoprod/js/owl.carousel.min.js"></script>
    <!-- Nivo slider js
		============================================ -->
    <script src="assets/infoprod/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="assets/infoprod/custom-slider/home.js" type="text/javascript"></script>
    <!-- scrollUp JS
		============================================ -->

    <!-- plugins JS
		============================================ -->
    <script src="assets/infoprod/js/plugins.js"></script>
    <!--zoom plugin
        ============================================ -->
    <script src='assets/infoprod/js/jquery.elevatezoom.js'></script>
    <!-- main JS
		============================================ -->
    <script src="assets/infoprod/js/main.js"></script>
</body>

</html>
