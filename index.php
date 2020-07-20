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
include 'library/config-cctv.php';


?>

<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'inc/links.php'; ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link href="assets/js/bootstrap-touch-slider.css" rel="stylesheet" media="all">
</head>

<body>
    <?php include 'inc/navbar.php'; ?>

    <?php include 'inc/slider.php'; ?>
    </nav>
    </div>





    <section style="    background: #f5f5f5;     padding-bottom: 1%;">
        <div id="get_quote" class="ajuste">
            <div class="container  animated fadeInUp">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="hidden-xs">¿Estas Buscando un Producto Para su Hogar, Empresa?</h3>
                    </div>
                    <div class="col-md-3">
                        <button class="button-two bton-serv hidden-xs"
                            onclick="window.location.href='productos.php'"><span>¿ COTIZA AQUI ?</span></button>
                        <button class="button-two bton-serv hidden-lg"
                            onclick="window.location.href='productos.php'"><span>¿ COMPRA AQUI ?</span></button>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div>
        <div class="container" id="service" style="    margin-top: -11px;">
            <h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Pida su Soporte Tecnico Especializado" ]'>
            </h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Conozca Cada Uno de Nuestros Servicios o Soporte Tecnico Especializados que Brindamos En las
                Diferentes Areas del Mundo De la Tecnologia De la Informacion, y de Seguridad,Telecomunicaciones Si Decea Solicitar un Servicio Por favor Contactarnos Mediante de Nuestro Formulario de Contactar.</p>


            <ul id="filters_index" class="clearfix alinear">
             
                <li><span class="filter ajuste-serv ajuste-serv2" data-filter=".sist"><img src="assets/img/laptop.png"
                            height="50" width="50"> <b>&nbsp;&nbsp; INFORMATICA <i class="icon-right-open-mini"
                                style="float:right;"></i></b></span></li>
                <li><span class="filter wi" data-filter=".segu" style="margin-left: 22px; padding-right: 73px;"><img
                            src="assets/img/escudo.png" height="50" width="50"><b>&nbsp;&nbsp; SEGURIDAD<i
                                class="icon-right-open-mini" style="float:right;"></i></b></span></li>
                <li><span class="filter wi serv-cand ajuste-serv3" data-filter=".acce"><img src="assets/img/candado.png"
                            height="50" width="50"><b>&nbsp;&nbsp; ACCESO Y CONTROL<i class="icon-right-open-mini"
                                style="float:right;"></i></b></span></li>
                <!--<li><span class="filter" data-filter=".capa"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp; Capacitaciónes<i class="icon-right-open-mini" style="float:right;"></i></span></li>-->
                <li><span class="filter serv-otro wi" data-filter=".otro"><img src="assets/img/servicio-al-cliente.png"
                            height="50" width="50"><b>&nbsp;&nbsp; MAS SERVICIOS<i class="icon-right-open-mini"
                                style="float:right;"></i></b></span></li>
            </ul>

            <div id="portfoliolist">

                <div class="portfolio sist" data-cat="sist">

                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_webs.php">
                            <div class="icono-atel icon-01"></div>
                        </a>
                        <h4>PAGINAS WEBS</h4>

                        <p><a href="servicio_webs.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>


                <div class="portfolio sist" data-cat="sist">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_computo.php">
                            <div class="icono-atel icon-02"></div>
                        </a>
                        <h4>COMPUTO Y SISTEMAS</h4>

                        <p><a href="servicio_computo.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-02">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio sist" data-cat="sist">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_cableado.php">
                            <div class="icono-atel icon-03"></div>
                        </a>
                        <h4>CABLEADO EIA/TIA</h4>

                        <p><a href="servicio_cableado.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-03">Ver Mas</a> &nbsp;&nbsp;
                                 <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>
                <div class="portfolio sist" data-cat="sist">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_radioenlace.php">
                            <div class="icono-atel icon-04"></div>
                        </a>
                        <h4>RADIO ENLACES 5.8</h4>

                        <p><a href="servicio_radioenlace.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-04">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>
                <div class="portfolio segu" data-cat="segu">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_camarascctv.php">
                            <div class="icono-atel icon-05"></div>
                        </a>
                        <h4>CAMARAS CCTV-IP</h4>

                        <p><a href="servicio_camarascctv.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-05">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio segu" data-cat="segu">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_alarmas.php">
                            <div class="icono-atel icon-06"></div>
                        </a>
                        <h4>ALARMAS DE SEGURIDAD</h4>

                        <p><a href="servicio_alarmas.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-06">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>
                <div class="portfolio segu" data-cat="segu">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_automatizacion.php">
                            <div class="icono-atel icon-07"></div>
                        </a>
                        <h4>AUTOMATIZACIÓN</h4>

                        <p><a href="servicio_automatizacion.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-07">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio acce" data-cat="acce">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_autos.php">
                            <div class="icono-atel icon-08"></div>
                        </a>
                        <h4>SEGURIDAD VEHICULAR</h4>

                        <p><a href="servicio_autos.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-08">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio segu" data-cat="segu">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_cerco.php">
                            <div class="icono-atel icon-09"></div>
                        </a>
                        <h4>CERCO ELECTRICO</h4>

                        <p><a href="servicio_cerco.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-09">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio acce" data-cat="acce">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_biometrico.php">
                            <div class="icono-atel icon-10"></div>
                        </a>
                        <h4>ACCESO BIOMETRICO</h4>

                        <p><a href="servicio_biometrico.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-10">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio acce" data-cat="acce">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_videoporteros.php">
                            <div class="icono-atel icon-11"></div>
                        </a>
                        <h4>VIDEO PORTEROS</h4>

                        <p><a href="servicio_videoporteros.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-10">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio acce" data-cat="acce">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_intercomunicador.php">
                            <div class="icono-atel icon-12"></div>
                        </a>
                        <h4>INTERCOMUNICADORES</h4>

                        <p><a href="servicio_intercomunicador.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-12">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>
                <div class="portfolio otro" data-cat="otro">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_paneles.php">
                            <div class="icono-atel icon-13"></div>
                        </a>
                        <h4>PANELES SOLARES</h4>

                        <p><a href="servicio_paneles.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-13">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio otro" data-cat="otro">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_aireacondicionado.php">
                            <div class="icono-atel icon-14"></div>
                        </a>
                        <h4>AIRE ACONDICIONADO</h4>

                        <p><a href="servicio_aireacondicionado.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-14">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio otro" data-cat="otro">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_electronica.php">
                            <div class="icono-atel icon-15"></div>
                        </a>
                        <h4>ELECTRONICA</h4>

                        <p><a href="servicio_electronica.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-15">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

                <div class="portfolio otro" data-cat="otro">
                    <div class="services-item text-center wow flipInX" data-wow-offset="10"
                        style="visibility: visible; animation-name: flipInX;">
                        <a href="servicio_electricidad.php">
                            <div class="icono-atel icon-16"></div>
                        </a>
                        <h4>ELECTRICIDAD</h4>

                        <p><a href="servicio_electricidad.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-16">Ver Mas</a> &nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                    </div><!-- /.row -->
                </div>

            </div>
            <div class="d" style=" ">
                <a class="btonA ajustes" style="color:white;     margin-top: 12px;"><span
                        class="filter active text-category"
                        data-filter=".sist, .segu, .acce, .capa, .otro"><b>&nbsp;&nbsp; VER MAS SERVICIOS
                            </b></span></a>
            </div>
            <div>


            </div>

        </div>

        </div><!-- container -->




        </div>



        </div>
        </div>


    </section>



    <section class="section" style="    padding-bottom: 22px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "Productos Informaticos en Oferta" ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Productos en Oferta por Liquidacion 10% de Descuento al Publico en General 20%
                de Descuento solo Tecnicos Instaladores, Que Esten Registrado en Nuestra Web y si es Un Cliente Que Compra en Nuestra Tienda en Linea o Web Tiene un 30% de descuento en Toda Nuestras Sucursales.</p>

            <div class="row">

                <?php include 'inc/slider_prod.php'; ?>

    </section>

     <section class="section" style="    padding-bottom: 1px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "Pida su Sistema de Venta POS" ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Soluciones de Factura Electrónica para Desarrolladores y Emprendedores. Todo
        nuestro sistemas Genera con rapidez Facturas Boletas Cotizaciones Notas Guias de Remision Defrente a Sunat ERP Actualizado,Incluye Certificado Digital Por 1 Año Gratis, Cuenta con un Soporte Permanente Pida su Visita Tecnica.</p>

    </section>


    <section id="content-area">
        <div class="container ajuste-container">
            <a href="http://efact.solucionescctvysistemas.com">
                <div class="opacidad3 hidden-xs" style="display:block;"><span class="lab2">S/.400</span></div>
            </a>
            <div class="hero-land clearfix">
                <div class="landing caption ">
                    <h1 style="color:white;" class="txt-rotate reduceme" data-period="2000"
                        data-rotate='[ "! Facturacion Electronica ERP Sunat - Ose ¡" ]'></h1>
                    <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-1">
                    <a href="http://demo.nubefactsoluciones.com" class="btn btn-primary fact-btn" >VER DEMO  </a>
                    <a href="http://nubefact.solucionescctvysistemas.com" class="btn btn-common">VER MAS </a> 
                    </p>
                </div>
            </div>
        </div>


    </section>
    
    
    

    <section id="services" class="section" style="     padding-bottom: 30px;
    padding-top: 30px;   background: #f5f5f5;">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://demo.nubefacpro.com">Acceso al sistema Facturador</a></h4>
                            <p>
                                 Accesos Usuario = demo@gmail.com Pasword = 123456 Pida su Sistema
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-screen-desktop"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://factpro.solucionescctvysistemas.com">Desarrollo de Software</a></h4>
                            <p>
                                Basados en Laravel - PHP 7.2 - JavaScript - Bootstrap y Otros Lenguajes de Programacion
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-basket-loaded"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://factpro.solucionescctvysistemas.com">Elementos de Ecommerce</a></h4>
                            <p>
                                Adaptamos tu Tienda Online - Pagina Webs atu Medida con Certificados SSL.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="    margin-top: -18px;">


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-layers"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://factpro.solucionescctvysistemas.com">Procesos Administrativos </a></h4>
                            <p>
                                Facturacíon , Control , Inventario , Productos Compuestos Almacen Ventas Compras.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-screen-tablet"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://factpro.solucionescctvysistemas.com">Full Responsive</a></h4>
                            <p>
                                Adaptados para Cualquier Resolución de Pantalla modo Escritorio - Movil .
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-keyboard-o"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://factpro.solucionescctvysistemas.com">Sistemas Actuales</a></h4>
                            <p>
                                Sistemas de Gestion para Ferreterias, Restaurantes,y Otros Rubros en General.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    
    <section>
        <section class="sec-title" style=" background: #1361b6; color: #fff; padding: 10px 0;">
            <h3  style="text-align: center; font-size: 1.2em; margin:0px!important;"> Nuestro Planes Hosting Cloud..</h3>
        </section>
  <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel"  data-interval="false">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- first Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="assets/img/hosting/1.jpg" alt="Bootstrap Touch Slider" style="height: 400px" class="slide-image" />
                <div class="bs-slider-overlay"></div>

               
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <h3 data-animation="animated zoomInRight" class="servidor"> Venta de Hosting Cloud</h3>
                            <p data-animation="animated fadeInLeft" class="servidor-label-1" align="justify">Brindamos servicio de alojamiento con acceso a cPanel lo que nos hace una empresa de Hosting confiable y seguro para las pymes peruanas y latinoamericanas.

                           Gracias a esto tenemos un contacto directo con el soporte técnico de cPanel .</p>
                    <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-1"><a href="http://www.solucionescctvysistemas.com/cpanel" class="btn btn-primary fact-btn">VER DEMO  </a>
                    <a href="http://hosting.solucionescctvysistemas.com" class="btn btn-common">VER MAS </a> 
                    </p>
                    
                        </div>
                    </div>
               
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="assets/img/hosting/2.webp" alt="Bootstrap Touch Slider" style="height: 400px" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_left">
                   <h2 data-animation="animated zoomInRight" class="servidor">Venta de Dominios.com </h2>
                   <p data-animation="animated fadeInLeft" class="servidor-label-1" align="justify">Grandes ahorros en comparación con otros registradores de domios Asistencia técnica 24/7 de primera clase para ayudarte a crear tu empresa en línea</p>
                  <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-1"><a href="http://www.solucionescctvysistemas.com/cpanel" class="btn btn-primary fact-btn">VER DEMO  </a>
                    <a href="http://hosting.solucionescctvysistemas.com" class="btn btn-common">VER MAS </a> 
                    </p>
                
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="assets/img/hosting/3.jpg" alt="Bootstrap Touch Slider" style="height: 400px" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_left">
                   <h2 data-animation="animated zoomInRight" class="servidor"> Servidores VPS - Cloud </h2>
                            <p data-animation="animated fadeInLeft" class="servidor-label-1" align="justify">Simplemente deseas más control, un servidor privado virtual (VPS) es el paso lógico para tus necesidades de hosting. Te entrega accesos root y la administración de Apache y PHP. Puedes instalar un certificado SSL.</p>
                            <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-1"><a href="http://www.solucionescctvysistemas.com/cpanel" class="btn btn-primary fact-btn">VER DEMO  </a>
                    <a href="http://hosting.solucionescctvysistemas.com" class="btn btn-common">VER MAS </a> 
                    </p>
                </div>
            </div>
           
            <!-- End of Slide -->
 <!-- five Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="assets/img/hosting/4.jpg" alt="Bootstrap Touch Slider" style="height: 400px"  class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_left">
                   <h2 data-animation="animated zoomInRight" class="servidor"> Nuestro Datacenter </h2>
                            <p data-animation="animated fadeInLeft" class="servidor-label-1" align="justify">Tenemos nuestro propio datacenter en Peru, por lo cual tus sitios web y sistemas estan seguros, ademas la carga sera mas rapida. Agenda una reunion con nosotros y podras visitarlo y conocer nuestra infraestructura en Peru.</p>
                           <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-1"><a href="http://www.solucionescctvysistemas.com/cpanel" class="btn btn-primary fact-btn">VER DEMO  </a>
                    <a href="http://hosting.solucionescctvysistemas.com" class="btn btn-common">VER MAS </a> 
                    </p>
                
                </div>
            </div>
            <!-- End of Slide -->

        </div>
        <!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    
     </section>
    
    
    

    <section id="services" class="section" style="     padding-bottom: 30px;
    padding-top: 30px;   background: #f5f5f5;">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://www.solucionescctvysistemas.com/cpanel">Acceso al Cpanel Cloud</a></h4>
                            <p>
                                Usuario = soluci12 Pasword = )tB@bc7k49C7EB Pida su Demo
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-screen-desktop"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://hosting.solucionescctvysistemas.com">Desarrollo de Webs</a></h4>
                            <p>
                                Basados en Laravel - PHP 7.2 - JavaScript - Bootstrap Html5 
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-basket-loaded"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="http://hosting.solucionescctvysistemas.com">Venta de Dominios</a></h4>
                            <p>
                                .com.cl.co.pe.com.mx.com.ar.us.net.org.biz, certificados SSL. 
                            </p>
                        </div>
                    </div>
                </div>

</section>
    
    
    


    <section class="section" style="    padding-bottom: 1px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "Pida su Monitoreo GPS Las 24/H" ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Nuestros Servicio de GPS Incluye; Vigilancia Permanente Durante las
        Horas Contratadas, Asumiendo la Responsabilidad de Prevenir Robos de su Vehiculo. Nuestro Personal Expecializado Monitoreara Permanente Por 12/24 Horas, Si ya Cuenta con un Sistema de GPS Pida su Visita Tecnica.</p>
    <style>


    </style>
    
    </section>
    <section id="content-area2">


        <div class="container ajuste-container">
			 <a href="formulario_servicios.php">
            <div class="opacidad2 hidden-xs"><span class=" lab">S/.50 </span></div>
              <div class="hero-land clearfix">
                <div class="landing caption ">
                    <h2 class="txt-rotate reduceme2" data-period="2000" data-rotate='[ "! Tu Vehiculo Siempre Protegido Las 24/H ¡" ]'>
                    </h2>
                    <p class="p-19 p-reduceme"></p>

                    <p class="boton-n-1">
                        <a href="http://192.95.18.68:8080/track/Track" class="btn btn-primary fact-btn2">VER DEMO  </a>
                        <a href="http://gps.solucionescctvysistemas.com/" class="btn  btn-common">VER MAS </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section" style="     padding-bottom: 30px;
    padding-top: 30px;   background: #f5f5f5;">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-people"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">Monitoreo Permanente</a></h4>
                            <p>
                                Nuestro Personal Estara Constantemente Monitoreando la Ubicacion del Vehiculo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">GPS Plataforma</a></h4>
                            <p>
                                Es un Sistema de Seguimiento GPS de uso Fácil a través de PC y Celular.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">GPS Personal Portatil</a></h4>
                            <p>
                                Es un Dispositivo que Sirve para Localizar Ancianos, Niños y Mercancias.
                                
                            </p>
                        </div>
                    </div>
                </div>
                                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">GPS Para Camiones</a></h4>
                            <p>
                                GPS Satelital Para Camiones en Tiempo Real Transmsion a SUTRAN MTC.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-taxi"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">GPS Para Taxis </a></h4>
                            <p>
                                GPS Satelital Para Taxis o Alquileres de Autos transmision cada 30 segundos.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">GPS Accesorios</a></h4>
                            <p>
                               Boton de Panico Audio en cabina Rele Corte de Motor Sensor de Encendido y Apagado.
                                
                            </p>
                        </div>
                    </div>
                </div>
                
                </section>

    </section>
    <section class="section" style="    padding-bottom: 22px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "Productos de Seguridad en Oferta" ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
           <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Productos en Oferta por Liquidacion 10% de Descuento al Publico en General 20% de Descuento 
    solo Tecnicos Instaladores, Que Esten Registrado en Nuestra Web y si es Un Cliente Que Compra en Nuestra Tienda en Linea o Web Tiene un 30% de descuento en Toda Nuestras Sucursales.</p>

            <div class="row">


                <?php include 'inc/slider_cctv.php'; ?>
                
                
                    </section>

     <section class="section" style="    padding-bottom: 1px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "Empieza Tu Futuro Con Nosotros " ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center"> Los cursos técnico, son programas cortos (mínimo de 1 mes), con una alta empleabilidad y de buenos ingresos, que permiten mejorar de manera 
    significativa la calidad de vida, Debido a la gran demanda de talento en el sector empresarial, los cursos técnicos tienen mayores posibilidades de inserción laboral.</p>

    </section>


    <section id="content-area4">
        <div class="container ajuste-container-fact">
            <a href="cursos.php">
                <div class="opacidad hidden-xs" style="display:block;"><span class="lab2">S/.200</span></div>
            </a>
            <div class="hero-land clearfix">
                <div class="">
                    <h1 style="color:white;" class="txt-rotate reduceme" data-period="2000"
                        data-rotate='[ "! Cursos Técnicos Online Rentables Empieza ya ¡" ]'></h1>
                    <p class="p-19 p-reduceme"></p>
                    <p class="boton-n-2"><a href="cursos.php" class="btn btn-primary fact-btn">CURSOS </a>
                    <a href="cursos.php" class="btn  btn-common">VER MAS</a>
                    </p>
                </div>
            </div>
        </div>


    </section>
    
    
    

    <section id="services" class="section" style="     padding-bottom: 30px;
    padding-top: 30px;   background: #f5f5f5;">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">De Corta Duracion</a></h4>
                            <p>
                                Nuestros Cursos Practicos que Brindamos Son de Poco Tiempo de Duracion
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">Metodologia Practica</a></h4>
                            <p>
                                Nuestro Personal Tecnico que Brinda los Cursos esta Capacitado y con Experiencia
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="glyphicon glyphicon-book"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">Cursos Con Alta Demanda</a></h4>
                            <p>
                                Nuestros Cursos que Brindamos son Altamente Demandado En el Mundo Laboral.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="    margin-top: -18px;">


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">Crecimiento En Tu Empresa </a></h4>
                            <p>
                                Con Nuestros Cursos su Empresa Tendra un Personal Altamente Capacitado.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="glyphicon glyphicon-briefcase"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">Enfocado en Los Negocios</a></h4>
                            <p>
                                Nuestros Cursos Estan Enfocados en los Negocios Actuales y Competitivos .
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-people"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="cursos.php">Actractivo En El Trabajo</a></h4>
                            <p>
                                Nuestros Cursos Son muy Actractivos En el Mundo Laboral y Empresarial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

     </section>
     
        
    <section class="section" style="    padding-bottom: 1px;">
        <div class="container">
            <h1 class="section-title txt-rotate" data-period="2000"
                data-rotate='[ "La Niebla de Seguridad PROTECT" ]'></h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5" style="margin-top: 17px;
    margin-bottom: 23px;" align="center"> Niebla de Seguridad este es el único sistema de seguridad activo que puede protegerlo y prevenir a usted y a su hogar, empresa de robos al paso 
    si ya cuenta con  un sistema de alarma o de video de vigilancia este sistema de seguridad es el complemento perfecto que se complementa con los demas sistemas de seguridad.

    </section>
               
    <section id="content-area3" style="margin-bottom:0%">
        <div class="container">
           <a href="formulario_servicios.php">
            <div class="opacidad2 hidden-xs"><span
                    style=" color: white; font-weight: 700; font-size: 2em;  position: relative;  top: 28px;  left: 14px;">S/.900 </span></div>
 




            <div class="hero-land clearfix">
                <div class="landing caption" >
                    <h2 class="txt-rotate reduceme2" data-period="2000"
                        data-rotate='[ "! No Pueden Llevar lo Que No Puedan Ver ¡" ]'></h2>
                    <p class="p-19 p-reduceme2"> </p>
                    <p class="boton-n-1">
                        <a href="formulario_servicios.php" class="btn btn-primary fact-btn">VER DEMO</a>
                        <a href="formulario_servicios.php" class="btn  btn-common">VER MAS</a>
                    </p>


    </section>

    <section id="services" class="section" style="     padding-bottom: 30px;
    padding-top: 30px;   background: #f5f5f5;">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-people"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">Protección Inmediata</a></h4>
                            <p>
                                Un cañón de Niebla PROTECT Llenará el Lugar Con una Niebla Densa,
                                Para Evitar Que el Intruso Pueda ver Algo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-rocket"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">Efectivo</a></h4>
                            <p>
                                ¡El Sistema de Seguridad por Niebla PROTECT Es el Método más Efectivo Para la Prevención
                                de Robos y Vandalismo!
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="icon-chemistry"></i>
                        </div>
                        <div class="services-content">
                            <h4><a href="formulario_servicios.php">Inocuo</a></h4>
                            <p>
                                La Niebla de Seguridad No deja Residuo y es Completamente Inocua Para Humanos y
                                No daña Equipos.
                            </p>
                        </div>
                    </div>
                </div>
                    

    </section>



    <?php include 'inc/slider_bottom.php'; ?>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts.php'; ?>
    
    
    <script type="text/javascript">
        $('#bootstrap-touch-slider').bsTouchSlider();
    </script>
    
    
    <script type="text/javascript">
    $(function() {

        var filterList = {

            init: function() {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.sist'
                    }
                });

            }

        };

        // Run the show!
        filterList.init();


    });
    </script>
    <script>
    $(document).ready(function() {
        $("#mostrarmodal").modal("show");
    });
    </script>

    <script>
    /*
You can check Florin's challenges here: https://www.florin-pop.com/blog/2019/03/weekly-coding-challenge/
*/

    // UI Elements
    const startButton = document.querySelector(".button-alt"),
        modalWrapper = document.querySelector(".wrapper");

    startButton.addEventListener("click", () => {
        modalWrapper.classList.add("show");

        // Closing modal
        document.addEventListener("keyup", (e) => {
            if (e.keyCode === 27) {
                modalWrapper.classList.remove("show");
            }
        });

        modalWrapper.addEventListener("click", (e) => {
            if (
                e.target.classList.contains("close-button") ||
                e.target.classList.contains("wrapper")
            ) {
                modalWrapper.classList.remove("show");
            }
        })
    });
    </script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
    (function() {
        var options = {
            facebook: "1626920177570816", // Facebook page ID
            whatsapp: "-51 996727562", // WhatsApp number
            call_to_action: "Hola, Estamos en Linea las 24h ?", // Call to action
            button_color: "#FF0000", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
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
    <!-- /WhatsHelp.io widget -->

</body>


</html>
