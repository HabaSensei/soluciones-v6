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
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container  animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Estas Buscando un Soporte Tecnico Para su Empresa ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='formulario_servicios.php'"><span>¿ CONTACTANOS ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Pida su Soporte Tecnico Especializado" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Conozca Cada Uno de Nuestros Servicios o Soporte Tecnico Especializados que Brindamos En las Diferentes Areas del Mundo De la Tecnologia 
    De la Informacion, y de Seguridad,Telecomunicaciones Si Decea Solicitar un Servicio Por favor Contactarnos Mediante de Nuestro Formulario de Contactar.</p>
        
       
		<ul id="filters_index" class="clearfix alinear">
			
			<li><span class="filter ajuste-serv ajuste-serv2" data-filter=".sist"><img src="assets/img/laptop.png"  height="50" width="50" > <b>&nbsp;&nbsp; INFORMATICA <i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<li><span class="filter wi active" data-filter=".segu" style="margin-left: 22px; padding-right: 73px;"><img src="assets/img/escudo.png"  height="50" width="50" ><b>&nbsp;&nbsp; SEGURIDAD<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<li><span class="filter wi serv-cand ajuste-serv3" data-filter=".acce" ><img src="assets/img/candado.png"  height="50" width="50" ><b>&nbsp;&nbsp; ACCESO Y CONTROL<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<!--<li><span class="filter" data-filter=".capa"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp; Capacitaciónes<i class="icon-right-open-mini" style="float:right;"></i></span></li>-->
			<li><span class="filter serv-otro wi" data-filter=".otro" ><img src="assets/img/servicio-al-cliente.png"  height="50" width="50" ><b>&nbsp;&nbsp; MAS SERVICIOS<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
		</ul>
					
            <div id="portfoliolist">
			
			<div class="portfolio sist" data-cat="sist">
			
                                    <div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_webs.php"><div class="icono-atel icon-01"></div></a>
                                        <h4>PAGINAS WEBS</h4>
                                        
	                                    <p><a href="servicio_webs.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-01">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
                                </div>
					

			<div class="portfolio sist" data-cat="sist">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_computo.php"><div class="icono-atel icon-02"></div></a>
                                        <h4>COMPUTO Y SISTEMAS</h4>
                                        
	                                    <p><a href="servicio_computo.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-02">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>		
			
			<div class="portfolio sist" data-cat="sist">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_cableado.php"><div class="icono-atel icon-03"></div></a>
                                        <h4>CABLEADO EIA/TIA</h4>
                                        
	                                    <p><a href="servicio_cableado.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-03">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			<div class="portfolio sist" data-cat="sist">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                       <a href="servicio_radioenlace.php"><div class="icono-atel icon-04"></div></a>
                                        <h4>RADIO ENLACES 5.8</h4>
                                        
	                                    <p><a href="servicio_radioenlace.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-04">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			<div class="portfolio segu" data-cat="segu">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_camarascctv.php"><div class="icono-atel icon-05"></div></a>
                                        <h4>CAMARAS CCTV-IP</h4>
                                        
	                                    <p><a href="servicio_camarascctv.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-05">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
						
			<div class="portfolio segu" data-cat="segu">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_alarmas.php"><div class="icono-atel icon-06"></div></a>
                                        <h4>ALARMAS DE SEGURIDAD</h4>
                                        
	                                    <p><a href="servicio_alarmas.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-06">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>			
			<div class="portfolio segu" data-cat="segu">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_automatizacion.php"><div class="icono-atel icon-07"></div></a>
                                        <h4>AUTOMATIZACIÓN </h4>
                                        
	                                    <p><a href="servicio_automatizacion.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-07">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			
			<div class="portfolio acce" data-cat="acce">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_autos.php"><div class="icono-atel icon-08"></div></a>
                                        <h4>SEGURIDAD VEHICULAR</h4>
                                        
	                                    <p><a href="servicio_autos.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-08">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			
			<div class="portfolio segu" data-cat="segu">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_cerco.php"><div class="icono-atel icon-09"></div></a>
                                        <h4>CERCO ELECTRICO</h4>
                                        
	                                    <p><a href="servicio_cerco.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-09">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>																																							
			
			<div class="portfolio acce" data-cat="acce">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                          <a href="servicio_biometrico.php"><div class="icono-atel icon-10"></div></a>
                                        <h4>ACCESO BIOMETRICO</h4>
                                        
	                                    <p><a href="servicio_biometrico.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-10">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>														
			
			<div class="portfolio acce" data-cat="acce">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_videoporteros.php"><div class="icono-atel icon-11"></div></a>
                                        <h4>VIDEO PORTEROS</h4>
                                        
	                                    <p><a href="servicio_videoporteros.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-10">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			
			<div class="portfolio acce" data-cat="acce">
			<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_intercomunicador.php"><div class="icono-atel icon-12"></div></a>
                                        <h4>INTERCOMUNICADORES</h4>
                                        
	                                    <p><a href="servicio_intercomunicador.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-12">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>			
			<div class="portfolio otro" data-cat="otro">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_paneles.php"><div class="icono-atel icon-13"></div></a>
                                        <h4>PANELES SOLARES</h4>
                                        
	                                    <p><a href="servicio_paneles.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-13">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>							

			<div class="portfolio otro" data-cat="otro">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                       <a href="servicio_aireacondicionado.php"><div class="icono-atel icon-14"></div></a>
                                        <h4>AIRE ACONDICIONADO</h4>
                                        
	                                    <p><a href="servicio_aireacondicionado.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-14">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>																								

			<div class="portfolio otro" data-cat="otro">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_electronica.php"><div class="icono-atel icon-15"></div></a>
                                        <h4>ELECTRONICA</h4>
                                        
	                                    <p><a href="servicio_electronica.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-15">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			
			<div class="portfolio otro" data-cat="otro">
				<div class="services-item text-center wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_electricidad.php"><div class="icono-atel icon-16"></div></a>
                                        <h4>ELECTRICIDAD</h4>
                                        
	                                    <p><a href="servicio_electricidad.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-16">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
				</div>
		
			</div>			
			<div class="d" style=" ">	
			<a class="btonA ajustes" style="color:white;     margin-top: 12px;"><span class="filter active text-category" data-filter=".sist, .segu, .acce, .capa, .otro"><b>&nbsp;&nbsp; VER MAS SERVICIOS</b><i class="icon-right-open-mini" style="float:right;"></i></span></a>
			</div>														
<div >
			
			
	</div>									
			
		</div>
		
	</div><!-- container -->
            
            
            
            	
            	</div>
            	
            	
            	
            	
            	
            	
            	
            	
            	</div></div>
	

	


	</section>



	<?php include 'inc/slider_bottom.php';?>
	
	
	
	<?php include 'inc/footer.php';?>
	
	
	
	
	
	<?php include 'inc/scripts.php';?>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: 'all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1626920177570816", // Facebook page ID
            whatsapp: "+51 986838333", // WhatsApp number
            line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
            call_to_action: "Hola, Estamos en Linea las 24h ?", // Call to action
            button_color: "#FF0000", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,line;", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>


</body>


</html>
