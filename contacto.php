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


	<head>
	    <?php include 'inc/links.php'; ?>
	</head>

	<body>
	    <?php include 'inc/navbar.php'; ?>

	    </nav>
	    </div>

</section>
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container  animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Estamos Cada Vez más Cerca de Ti Ubicanos ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='sucursal.php'"><span>¿ SUCURSALES ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Datos de Contactos Soluciones " ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Listo para empezar un proyecto con nosotros? Contáctenos a través de nuestros Formulario de Contactar. o por otros medios de contactos, números
     telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>

</section>
	   

	        <div class="col-md-12" style="background:white; padding-bottom: 20px;   padding-top: 10px;">
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;     padding-top: 23px;">
	                    <div class="icon-bx-sm  m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-map-marker"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5> Tienda Villa el Salvador</h5>
	                        <p>Av. el Sol / Av. Revolución </p>
	                        <p>Lt. 13 - Mz. H - Gp. 15 - St. 1</p>
	                        <p>Villa el Salvador - Lima Peru </p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm  m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;    width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 34px;"
	                                class="fa fa-phone"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Telefonos Tienda Villa el Salvador</h5>
	                        <p>Informes / Asesoria +51 968-933-814</p>
	                        <p>Ventas / Soporte +51 986-838-333</p>
	                        <p>Averias / Garantia +51 996-727-562</p>

	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;    width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-envelope"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Correos Electronicos Soluciones</h5>
	                        <p>ventas@solucionescctvysistemas.com</p>
	                        <p>soporte@solucionescctvysistemas.com</p>
	                        <p>gerencia@solucionescctvysistemas.com</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm  m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Cuentas Bancarias Soluciones</h5>
	                        <p> BCP: 194-357-125-00-0-31 <br>BBVA:0011-0323-0200389677 <br>
	                             ScotiaBank: 009-022-00000-6192980-58</p>

	                    </div>
	                </div>
	            </div>
	            </section>
	            
 </style>

	        <div class="col-md-12" style="    margin-top: 19px;margin-bottom: 28px;">
	            <div class="header-wrap text-center">
	                <h3 style="    font-size: 28px; color:red;">Asesores De Ventas</h3>
	                <hr style="margin-bottom: 8px solid #333;">
	                <p class="description">Si Decea Solicitar un Servicio o contactarnos, Por favor Contactanos Mediante de Nuestro Formulario de Contactar.
	            o por otros medios de contactos, números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
	            </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/1.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                   
                      
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhonny Olarte </h4>
                 <p>Numero Telefonico:986838333</p>
                 
                <p>Contactar Asesor de Ventas </p>
                <p> Tienda Lima Cercado</p>
                <h4> </a>
                 <a href="https://www.facebook.com/Soluciones-cctv-sistemas-sac-1626920177570816">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                   
                      <a href="https://www.instagram.com/solucionescctvysistemas/">
                        <i class="fa fa-instagram"></i>
                      </a></h4>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/2.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    
                      
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Enoc Peña</h4>
                 <p>Numero Telefonico:996727562</p>
                 
                 <p>Contactar Asesor de Ventas </p>
                <p> Tienda Villa el Salvador</p>
                <h4> </a>
                 <a href="https://www.facebook.com/Soluciones-cctv-sistemas-sac-1626920177570816">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                   
                      <a href="https://www.instagram.com/solucionescctvysistemas/">
                        <i class="fa fa-instagram"></i>
                      </a></h4>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/3.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jesus Crespo</h4>
                 <p>Numero Telefonico:996727562</p>
                 
                <p>Contactar Asesor de Ventas </p>
                <p> Tienda Pachacamac</p>
                <h4> </a>
                 <a href="https://www.facebook.com/Soluciones-cctv-sistemas-sac-1626920177570816">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                   
                      <a href="https://www.instagram.com/solucionescctvysistemas/">
                        <i class="fa fa-instagram"></i>
                      </a></h4>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/4.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>David Olarte</h4>
                 <p>Numero Telefonico:986838333</p>
                
                 <p>Contactar Asesor de Ventas </p>
                <p> Tienda Villa el Salvador</p>
                 <h4> </a>
                 <a href="https://www.facebook.com/Soluciones-cctv-sistemas-sac-1626920177570816">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                   
                      <a href="https://www.instagram.com/solucionescctvysistemas/">
                        <i class="fa fa-instagram"></i>
                      </a></h4>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->
    </section>



	        <style>
	        .a {
	            ::placeholder {
	                /* Chrome, Firefox, Opera, Safari 10.1+ */
	                color: red;
	                opacity: 1;
	                /* Firefox */
	            }

	            :-ms-input-placeholder {
	                /* Internet Explorer 10-11 */
	                color: red;
	            }

	            ::-ms-input-placeholder {
	                /* Microsoft Edge */
	                color: red;
	            }
	        }
	        </section>
	        </style>

	        <div class="col-md-12" style="    margin-top: 19px;margin-bottom: 28px;">
	            <div class="header-wrap text-center">
	                <h3 style="    font-size: 28px; color:red;">Por Favor sus Datos</h3>
	                <hr style="margin-bottom: 8px solid #333;">
	                <p class="description">Si Decea Solicitar un Servicio o contactarnos, Por favor Contactanos Mediante de Nuestro Formulario de Contactar.
	            o por otros medios de contactos, números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
	            </div>
	        </div>
	        </div>
	        </div>
	        <div class="contact-form-wrapper" style="background: #f5f5f5; padding-bottom: 26px;    padding-top: 26px;">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">

	                        <form id="contactForm" method="POST" action="send_mail_contactanos.php" class="contact-form"
	                            data-toggle="validator">
	                            <div class="row">
	                                <div class="col-md-6 col-xs-12">
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group ">
	                                                <input type="text" class="form-control ha"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="nombre"
	                                                    name="nombre" placeholder=" Nombre y Apellidos" required
	                                                    data-error="Porfavor introduzca su nombre">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <input class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" type="email"
	                                                    id="correo" name="correo" placeholder=" Correo Electronico"
	                                                    required data-error="Porfabor introduzca su correo">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <input type="text" class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="telefono"
	                                                    name="telefono" placeholder="Numero de Celular" required
	                                                    data-error="Porfavor introduzca su telefono">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-xs-12">
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <textarea class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="mensaje"
	                                                    name="mensaje" placeholder="Por Favor Escriba su Mensaje" rows="9"
	                                                    data-error="Escriba su mensaje" required></textarea>
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-xs-12">
	                                    <button type="submit" class="btn btn-common">Enviar mensaje</button>
	                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                </div>
			            
             </section>

	              </div>
	                <h2 align="center" style=" color:red;   font-size: 28px;     margin: 0.5em 1px 9px 10px !important;">Nuestra Ubicacion</h2> 
	                <hr style="margin-bottom: 1px solid #333;">
	                <p align="center" class="mb-5">Estamos en diferentes distritos de Lima, Nuestras sucursales toda nuestras tiendas estan ubicados en Google maps para ver otras sucursales
	                 mas cerca a usted ingresasar a ver sucursales .</p>

	                <div id="google-map" style="    margin-top: 25px;">  
	                    <iframe
	                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.5385969082613!2d-76.93922278584533!3d-12.21176719135753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105bb274902c075%3A0xeaf78596f47e208d!2ssoluciones+cctv+y+sistemas!5e0!3m2!1ses!2spe!4v1547750528633"
	                        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
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

	            <?php include 'inc/slider_bottom.php'; ?>


	            <?php include 'inc/footer.php'; ?>
	            <?php include 'inc/scripts.php'; ?>


	</body>

	</html>
