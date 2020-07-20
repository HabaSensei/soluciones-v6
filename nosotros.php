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
	<?php include_once 'inc/navbar.php';?>
	

</nav>
</div>
	
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container  animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Bienvenidos a Soluciones Cctv y Sistemas ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='contacto.php'"><span>¿ CONTACTANOS ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Soluciones Cctv & Sistemas" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Listo para empezar un proyecto con nosotros? Contáctenos a través de nuestros Formulario de Contactar. o por otros medios de contactos, 
    números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
		
		<div class="row">
				<div class="col-sm-4 ">
					<h3 style=" color: #fd0000;  font-size: 20px;">Nosotros:</h3>
					<p ALIGN="justify">
						Estimados Sres: 
						De nuestra consideración Para nosotros es un placer presentar nuestra empresa. Nos dirigimos  a  Usted para presentarnos  como <strong>SOLUCIONES CCTV & SISTEMAS S.A.C.</strong> Una empresa líder en el rubro de sistemas integrales, de seguridad y vigilancia, redes y conetividad, sistema informático en general.  Nuestra empresa comienza a prestar servicio a grandes y a mediana empresas de diversos rubros, consiguiendo un excelentes resultados con cada uno de nuestros clientes.
					</p>
					<h3   style="  color: #fd0000;  font-size: 20px;">Misión</h3>
					<p ALIGN="justify">
						<strong>“SOLUCIONES CCTV & SISTEMAS S.A.C.”</strong> es una empresa que brinda soluciones tecnológicas cumpliendo con las necesidades de nuestros clientes con el objetivo de trabajar con estándares de calidad, sirviendo como mejor lo podemos hacer.
						</p>
					<h3     style=" color: #fd0000;  font-size: 20px;">Visión</h3>
					<p ALIGN="justify">
						Que <strong>“SOLUCIONES CCTV & SISTEMAS S.A.C.”</strong> sea una empresa líder en la que se puede confiar para solucionar los problemas tecnológicos de todos nuestros clientes y  empresas.
						
						</p>
				</div>
				<div class="ajust-nos	"></div>
				<div class="col-sm-7 col-sm-offset-1 ">
					<ul class="feat" id="about" style="    list-style: none;">
						<li>
							<i class="icon_check_alt2"></i>
							<h4>PUNTUALIDAD</h4>
							<p>
								Nos enfocamos en cumplir con lo acordado de una manera profesional y eficiente.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>CONFIANZA</h4>
							<p>
								Todos nuestros productos y servicios estan enfocados en la economia de usted.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>COMPROMISO</h4>
							<p>
								Tenemos grandes tecnicos especializados en todas las areas de servicios ofrecidos.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>SERIEDAD</h4>
							<p>
								Ofrecemos garantias de nuestros productos y servicios de la mano con las mejores marcas del mercado. 
							</p>
						</li>
					</ul>
				</div>
			

			</div>
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
</div>
</section>



	<?php include 'inc/slider_bottom.php';?>
	
	
	
	<?php include 'inc/footer.php';?>
	
	
	
	
	
	<?php include 'inc/scripts.php';?>


</body>


</html>
