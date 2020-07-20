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
						<h3 class="hidden-xs">¿ Empieza tu Futuro con Nosotros Separe su Vacante ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='formulario_servicios.php'"><span>¿ CONTACTANOS ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Por Favor Sus Datos de Registro" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Los cursos técnico, son programas cortos (mínimo de 1 mes), con una alta empleabilidad y de buenos ingresos,
     que permiten mejorar de manera significativa la calidad de vida, Debido a la gran demanda de talento en el sector empresarial, los cursos técnicos tienen mayores posibilidades de inserción laboral.
       </section> 
	 
	 <style>
             .wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
        padding-left: 15px;
    padding-right: 15px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width: 480px ) {
 .jode {font-size: 1.1em !important;}
}
@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}

input, textarea{
    background: none;
    color:#333;
   
    padding: 10px 10px 10px 5px;
    
    width: 100%;
    border:none;
    border-bottom: 1px solid #c6c6c6;
    resize: none;
}

input:focus,textarea:focus{
    outline: none;
    color: #333;
}

input:focus~label, 
input:valid~label,
textarea:focus~label, textarea:valid~label{
    position: absolute;
    top: -14px;
        font-size: 16px;
    color: #3f51b5;
}

label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top:10px;
    transition: 0.5s ease all;
    pointer-events: none;
}


input:focus~.barra::before, textarea:focus~.barra::before{
    width: 100%;
}

/* select starting stylings ------------------------------*/
.select {
  font-family:
    'Roboto','Helvetica','Arial',sans-serif;
	position: relative;
    margin-bottom: 50px;
}

.select-text {
	position: relative;
	font-family: inherit;
	background-color: transparent;
	    width: 100%;
	padding: 10px 10px 10px 0;
	font-size: 18px;
	border-radius: 0;
	border: none;
	border-bottom: 1px solid rgba(0,0,0, 0.12);
	border-radius: 4px 4px 4px 4px;
    overflow: hidden;
    border-color: rgba(12,113,195,0.25);
    border-bottom-width: 3px;
        background: #005a8f0d;
        height: 4em;
    font-size: 1em;
    font-weight: 700;
}

/* Remove focus */
.select-text:focus {
	outline: none;
	border-bottom: 1px solid rgba(0,0,0, 0);
}

	/* Use custom arrow */
.select .select-text {
	appearance: none;
	-webkit-appearance:none;
	    color: #8e8888;
	 padding-left: 18px;
}

.select:after {
	position: absolute;
	top: 18px;
	right: 10px;
	/* Styling the down arrow */
	width: 0;
	height: 0;
	padding: 0;
	content: '';
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid rgba(0, 0, 0, 0.12);
	pointer-events: none;
}


/* LABEL ======================================= */
.select-label {
	color: rgba(0,0,0, 0.26);
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 0;
	top: 10px;
	transition: 0.2s ease all;
}

/* active state */
.select-text:focus ~ .select-label, .select-text:valid ~ .select-label {
	color: #2F80ED;
	top: -20px;
	transition: 0.2s ease all;
	font-size: 14px;
}

/* BOTTOM BARS ================================= */
.select-bar {
	position: relative;
	display: block;
width: 100%;
}

.select-bar:before, .select-bar:after {
	content: '';
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #6A82FB, #FC5C7D);
    transition: 0.3s ease all;
    left: 0%;
}

.select-bar:before {
	left: 50%;
}

.select-bar:after {
	right: 50%;
}

/* active state */
.select-text:focus ~ .select-bar:before, .select-text:focus ~ .select-bar:after {
	width: 50%;
}

/* HIGHLIGHTER ================================== */
.select-highlight {
	position: absolute;
	height: 60%;
	width: 100px;
	top: 25%;
	left: 0;
	pointer-events: none;
	opacity: 0.5;
}


.barra{
    position: relative;
    display: block;
    width: 100%;
}
.barra::before{
    content: '';
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #6A82FB, #FC5C7D);
    transition: 0.3s ease all;
    left: 0%;
}


.new_form{
    border-radius: 4px 4px 4px 4px;
    overflow: hidden;
    border-color: rgba(12,113,195,0.25);
    border-bottom-width: 3px;
        background: #005a8f0d;
        height: 4em;
    font-size: 1em;
    font-weight: 700;
    padding-left: 18px;
}

    
            </style>
 
                
                     
       
					</div>
					</section>
     <main style="  margin-bottom: 0px;  z-index: 0;     background: #f5f5f5;">
        <div class="container  " style="padding-bottom: 119px; padding-right: 0px!important; padding-left: 0px!important;">
	
			
				
				
					
			
				<div class="col-md-12" style="padding-right: 0px;    padding-left: 0px;">
        <form id="custom" method="POST" action="send_mail_cursos.php">
           
	<div class="row">
	    
		<section>
		    
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Datos de Usuario">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Datos de Cursos">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Horarios de Atencion">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-time"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Enviar">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form" >
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                       
    <div class="row">
        <div class="col-md-6">
                                    <div class="form-group grupo">
                                        
                                        <input id="form_name" type="text" name="nombre" class="new_form" placeholder="Nombre y Apellidos * "  required="required" data-error="Nombres y Apellidos es requerido.">
                                        
                                    </div>
                                    
                                    <div class="form-group  grupo">
                                        
                                        <input id="form_email" type="text" name="Ruc_Dni" class="new_form" placeholder="Numero de Dni  *"  required="required" data-error="Ruc o Dni es requerido.">
                                    </div>
        </div>
        <div class="col-md-6">
                                 <div class="form-group grupo">
                                        
                                        <input id="form_email" type="tel"  name="Telefono" class="new_form" placeholder="Numero Celular *"  required="required" data-error="Telefono de Contacto es requerido.">
                                    </div>
                                    
                                    <div class="form-group grupo">
                                        <input id="form_email"  class="new_form" placeholder="Correo Electronico *" type="email" name="Correo"  required="required" data-error="Email es requerido.">
                                    </div>
            
        </div>
    </div>
    <div class="form-group grupo">
        <input id="form_email" type="text"  class="new_form" placeholder="Direccion Fiscal *" name="Dir_Fiscal"  required="required" data-error="Dir Fiscal es requerida.">
           
                                    </div>

                                    
                                
                         <ul class="list-inline " style="float: right;">
                            <li><button type="button" class="btn btn-primary next-step" style="margin-bottom: 31px;">Continuar  <i class="glyphicon glyphicon-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                       
    <div class="row">
        <div class="col-md-6">
             <div class=" select">
                                      <select name="Curso" id="Curso" class="select-text new_form " >
									       <option value="" disabled selected> &nbsp Seleciona un Curso *</option>
										 <option value="ENSAMBLAJE DE PC"> ENSAMBLAJE DE PC</option>
										  <option value="CAMARAS CCTV-IP">CAMARAS CCTV-IP</option>
										  <option value="CABLEADO EIA/TIA">CABLEADO EIA/TIA</option>
										  <option value="ALARMA DE SEGURIDAD">ALARMA DE SEGURIDAD</option>
										  <option value="RADIO ENLACES 5.8">RADIO ENLACES 5.8</option>
										  <option value="AUTOMATIZACIÓN">AUTOMATIZACIÓN</option>
										  <option value="CERCOS ELECTRICOS">CERCOS ELECTRICOS</option>
										  <option value="ACCESO BIOMETRICO">ACCESO BIOMETRICO</option>
										  <option value="VIDEO PORTEROS">VIDEO PORTEROS</option>
										  <option value="ELECTRONICA BASICA">ELECTRONICA BASICA</option>
										  <option value="ELECTRICIDAD BASICA">ELECTRICIDAD BASICA</option>
										  <option value="PAGINAS WEBS">PAGINAS WEBS</option>
								          <option value="OTROS CURSOS">OTROS CURSOS</option>
										</select>
										
							
							</div>
          
					
        </div>
        <div class="col-md-6">
             <div class=" select">
                                      
                                       
									   <select name="Tipo" id="Tipo" class="select-text new_form">
									       <option value="" disabled selected>Tipo de Contacto *</option>
										 <option value="INFORMES">RESERVAR</option>
										  <option value="INSCRIPCION">INSCRIPCION</option>
										  <option value="PAGOS">PAGOS</option>
										 </select>
										   
					
                                    </div>       
                              	</div>  
            
       
       
    </div>
    
 <ul class="list-inline ">
                            <li style="float: left;"><button type="button" class="btn btn-warning prev-step" style="margin-bottom: 31px;margin-top: 31px;"><i class="glyphicon glyphicon-arrow-left"></i>  Regresar</button></li>
                            <li style="float: right;"><button type="button" class="btn btn-primary next-step" style="margin-bottom: 31px;margin-top: 31px;">Continuar <i class="glyphicon glyphicon-arrow-right"></i></button></li>
                        </ul>
                       
                         </div> 
                        
                    <div class="tab-pane" role="tabpanel" id="step3">
                     
                                    <div class="form-group grupo">
                                        <div class=" select">
                                      
                                       
									   <select name="dia" id="dia" class="select-text new_form">
									       <option value="" disabled selected> Dias de la Semana  *</option>
									        <option value="Lunes y Martes">Lunes y Martes</option>
										    <option value="Jueves y Viernes">Jueves y Viernes</option>
										    <option value="Sabado y Domingo">Sabado y Domingo</option>
										  
										  </select>
										  </div>  
										  </div>     
                                    
                                    
                                    
                               
                                    <div class="form-group grupo">
                                       
                                         <div class=" select">
                                      
                                       
									   <select name="Horario" id="Horario" class="select-text new_form">
									       <option value="" disabled selected> Horario de Preferencia  *</option>
									        <option value="1:00 Pm a 3:00 Pm">10:00 Pm a 12:00 Pm</option>
										    <option value="1:00 Pm a 3:00 Pm">1:00 Pm a 3:00 Pm</option>
										    <option value="1:00 Pm a 3:00 Pm">6:00 Pm a 8:00 Pm</option>
										  
										  </select>
										  </div>  
										  </div>     
                                    
                                    
                                 
                               
                                    <div class="form-group">
                                        
                                        <div class=" select">
                                      
                                       
									   <select name="Turno" id="Turno" class="select-text new_form">
									       <option value="" disabled selected> Escoger Turno  *</option>
										  <option value="MAÑANA">MAÑANA</option>
										  <option value="TARDE">TARDE</option>
										  <option value="NOCHE">NOCHE</option>
										  
										  </select>
										  </div>       
                              	</div>  
                                    
                               
                       <ul class="list-inline ">
                            <li style="float: left;"><button type="button" class="btn btn-warning prev-step" style="margin-bottom: 31px;"><i class="glyphicon glyphicon-arrow-left"></i>  Regresar</button></li>
                            <li style="float: right;"><button type="button" class="btn btn-primary next-step" style="margin-bottom: 31px;">Continuar <i class="glyphicon glyphicon-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <input type="submit" class="finish " value="Enviar Formulario">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
       <p align="center" style="font-weight: 700;
    font-size: 1.1em;     position: relative;
    top: 9px;
    margin-bottom: -64px; padding-right: 15px;  
      padding-left: 15px;">Su registro de reservaciones sera confirmado en un plazo de 1 Hr como maximo por el personal del area de soporte o informes. </p>
    </section>
   </div>
</div>

</section>
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
        
			
						
		</form>
				</div>
			</div><!-- End row -->
        </div><!-- End container -->
	</main><!-- End main -->
		<?php include 'inc/slider_bottom.php';?>
	<?php include 'inc/footer.php';?>
	<?php include 'inc/scripts.php';?>
<script>
   $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
    
    
</script>




	</body>
	
	
	</html>
