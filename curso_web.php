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
	<link rel="stylesheet" href="assets/css/forum.css" type="text/css">
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
						<h3 class="hidden-xs">¿ Cursos Técnicos Rentables Empieza Ya ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='formulario_cursos.php'"><span>¿ RESERVAR ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Curso de Paginas Webs HTML5 - PHP" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Los cursos técnico, son programas cortos (mínimo de 1 mes), con una alta empleabilidad y de buenos ingresos, que permiten mejorar de manera 
    significativa la calidad de vida, Debido a la gran demanda de talento en el sector empresarial, los cursos técnicos tienen mayores posibilidades de inserción laboral.</p>
</section>
<style>

 .button {
	 display: inline-block;
	 font-family: "Montserrat", "Trebuchet MS", Helvetica, sans-serif;
	 -webkit-font-smoothing: antialiased;
	 position: relative;
	 padding: .8em 1.4em;
	 padding-right: 4.7em;
	 background: #009ED8;
	 border: none;
	 color: white;
	 transition: .2s;
}
 .button:before, .button:after {
	 position: absolute;
	 top: 0;
	 bottom: 0;
	 right: 0;
	 padding-top: inherit;
	 padding-bottom: inherit;
	 width: 2.8em;
	 content: "\00a0";
	 font-family: 'FontAwesome', sans-serif;
	 font-size: 1.2em;
	 text-align: center;
	 transition: .2s;
	 transform-origin: 50% 60%;
}
 .button:before {
	 background: rgba(0,0,0,0.1);
}
 .button:hover {
	 background: #0079a5;
}
 .button:active, .button:focus {
	 background: #002e3f;
	 outline: none;
}
 .button {
	 min-width: 16.7em;
}
 .arrow {
	 background: #005a8f;
}
 .arrow:hover {
	 background: #005a8f;
}
 .arrow:active, .arrow:focus {
	 background: #005a8f;
}
 .arrow:after {
	 content: "\f07a";
}
 .arrow:hover:after {
	 -webkit-animation: bounceright .3s alternate ease infinite;
	 animation: bounceright .3s alternate ease infinite;
}
 .phone {
	 background: #139675;
}
 .phone:hover {
	 background: #0d6952;
}
 .phone:active, .phone:focus {
	 background: #083b2e;
}
 .phone:after {
	 content: "\F095";
}
 .phone:hover:after {
	 -webkit-animation: wiggle .05s alternate ease infinite;
	 animation: wiggle .05s alternate ease infinite;
}
 .email {
	 background: #f44336;
}
 .email:hover {
	 background: #f44336;
}
 .email:active, .email:focus {
	 background: #f44336;
}
 .email:after {
	 content: "\F0E0";
}
 .email:hover:after {
	 -webkit-animation: none;
	 -webkit-transform: skew(-20deg);
	 animation: none;
	 transform: skew(-20deg);
	 text-indent: .1em;
}
 .search:after {
	 content: "\f002";
}
 .search:hover:after {
	 -webkit-animation: none;
	 -webkit-transform: scale(1.4);
	 animation: none;
	 transform: scale(1.4);
}
 @-webkit-keyframes bounceright {
	 from {
		 -webkit-transform: translateX(0);
	}
	 to {
		 -webkit-transform: translateX(3px);
	}
}
 @-webkit-keyframes wiggle {
	 from {
		 -webkit-transform: rotate(0deg);
	}
	 to {
		 -webkit-transform: rotate(30deg);
	}
}
 @keyframes bounceright {
	 from {
		 transform: translateX(0);
	}
	 to {
		 transform: translateX(3px);
	}
}
 @keyframes wiggle {
	 from {
		 transform: rotate(0deg);
	}
	 to {
		 transform: rotate(30deg);
	}
}
 
@media (max-width: 767px) {
    .button {
	 min-width: 17.7em;
}
}
/* asdasda */
.timeline{
    list-style-type:none;
    margin:0;
    padding:0;
    position:relative;
   
}

.timeline>li{
    position:relative;
    min-height:50px;
    padding:20px 0
}
.timeline .timeline-time{
    position:absolute;
    left:0;
    width:18%;
    text-align:right;
    top:30px
}
.timeline .timeline-time .date,.timeline .timeline-time .time{
    display:block;
    font-weight:600
}
.timeline .timeline-time .date{
    line-height:16px;
    font-size:12px
}
.timeline .timeline-time .time{
    line-height:24px;
    font-size:20px;
    color:#242a30
}
.timeline .timeline-icon{
    left:15%;
    position:absolute;
    width:10%;
    text-align:center;
    top:40px
}
.timeline .timeline-icon a{
    text-decoration:none;
    width:20px;
    height:20px;
    display:inline-block;
    border-radius:20px;
    background:#d9e0e7;
    line-height:10px;
    color:#fff;
    font-size:14px;
    border:5px solid #2d353c;
    transition:border-color .2s linear
}
.timeline .timeline-body{
    margin-left: 2%;
    margin-right: 2%;
    background: #ffffff;
    position: relative;
    padding: 20px 25px;
    
    border-radius: 6px;
}

.timeline .timeline-body>div+div{
    margin-top:15px
}
.timeline .timeline-body>div+div:last-child{
    margin-bottom:-20px;
    padding-bottom:20px;
    border-radius:0 0 6px 6px
}
.timeline-header{
    padding-bottom:10px;
    border-bottom:1px solid #e2e7eb;
    line-height:30px
}
.timeline-header .userimage{
    float:left;
    width:34px;
    height:34px;
    border-radius:40px;
    overflow:hidden;
    margin:-2px 10px -2px 0
}
.timeline-header .username{
    font-size:16px;
    font-weight:600
}
.timeline-header .username,.timeline-header .username a{
    color:#2d353c
}
.timeline img{
    max-width: 100%;
    display: block;
    
}

.timeline .img-prim{
    max-width: 100%;
    display: block;
    height: 300px;
    width: 100%;
}
.timeline-content{
    letter-spacing:.25px;
    line-height:18px;
    font-size: 15px;
}
.timeline-content:after,.timeline-content:before{
    content:'';
    display:table;
    clear:both
}
.timeline-title{
    margin-top:0
}
.timeline-footer{
    background:#ffffff;
    border-top:1px solid #e2e7ec;
    padding-top:15px
}
.timeline-footer a:not(.btn){
    color:#575d63
}
.timeline-footer a:not(.btn):focus,.timeline-footer a:not(.btn):hover{
    color:#2d353c
}
.timeline-likes{
    color:#6d767f;
    font-weight:600;
    font-size:12px
}
.timeline-likes .stats-right{
    float:right
}
.timeline-likes .stats-total{
    display:inline-block;
    line-height:20px
}
.timeline-likes .stats-icon{
    float:left;
    margin-right:5px;
    font-size:9px
}
.timeline-likes .stats-icon+.stats-icon{
    margin-left:-2px
}
.timeline-likes .stats-text{
    line-height:20px
}
.timeline-likes .stats-text+.stats-text{
    margin-left:15px
}
.timeline-comment-box{
    background:#f2f3f4;
    margin-left:-25px;
    margin-right:-25px;
    padding:20px 25px
}
.timeline-comment-box .user{
    float:left;
    width:34px;
    height:34px;
    overflow:hidden;
    border-radius:30px
}
.timeline-comment-box .user img{
    max-width:100%;
    max-height:100%
}
.timeline-comment-box .user+.input{
    margin-left:44px
}

.btn-activo{    
    
    background: #4bea0b;
    
}
.btn-inactivo{    
    
    background: #ea170b;
    
}
.h4-ajust{    font-size: 20px;
    margin: 0.6em 0;}

 .span-ajust{color: #0a0a0a;
    }   
   
    .close-ribbon{
  position: absolute;
  top: 0;
  right: 2em;
  z-index: 1;
  color: #eee;
  font-size: 2em;
 
  width: 2em;
  line-height: 0.5em;
  -webkit-transition: line-height 0.5s;
  transition: line-height 0.5s;
}
.close-ribbon:after {
    content: "";
    font-size: 0.5em;
    position: absolute;
    height: 8.2em;
    border: 1.5em solid #F44336;
    z-index: -1;
    top: -1em;
    border-left-width: 2.5em;
    border-right-width: 2.5em;
    border-top-width: 1.5em;
    border-bottom-width: 2em;
    border-bottom-color: transparent;
    right: 0;
    -webkit-transition: height 0.5s;
    transition: height 0.5s;
}
.close-ribbon:before {
  content: "";
  font-size: 0.5em;
  position: absolute;
  border-style: solid;
  border-color: transparent transparent #B71C1C transparent;
  top: -1em;
  right: 5em;
  border-width: 0 0 1em 0.7em;
  z-index: -1;
}

.btn-icon.btn-xs {
    width: 16px;
    height: 16px;
    font-size: 8px;
    line-height: 16px;
    top: -21px;
    right: -627px;
}
.btn-sm {
    font-size: 1.3em!important;
    padding: 10px 18px!important;
    margin-bottom: 5px;
    border: none;
}
.what-you-get__items {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: wrap;
}
.what-you-get {
    background-color: #f9f9f9;
    border: 1px solid #dedfe0;
    padding: 10px 15px;
    border-radius: 9px;
}
{
    max-height: none;
}
.js-simple-collapse--what-you-get {
    max-height: 301px;
}
.js-simple-collapse {
    overflow: hidden;
    position: relative;
}
.what-you-get__content {
    margin-bottom: 5px;
}
.what-you-get__title {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 10px;
}
.what-you-get__items {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: wrap;
}

ul, ol {
    margin-top: 0;
    margin-bottom: 10.5px;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.what-you-get__item--columns {
    width: 45%;
}
.what-you-get__item {
    display: inline-flex;
    align-items: center;
    margin-bottom: 10px;
    width: 45%;
}
.what-you-get__icon {
    align-self: flex-start;
    color: #a1a7b3;
    font-size: 16px;
    margin-right: 15px;
    margin-top: 2px;
}
.udi {
    vertical-align: -8%;
}
.udi {
    font-family: udemyicons!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.udi-check:before {
    content: "\F00C";
}
*:before, *:after {
    box-sizing: border-box;
}
.what-you-get__text {
    font-size: 15px;
}
.row--component-margin>*[class|=col]>.clp-component-render:first-child {
    margin-top: 40px;
}
.card, .card-header {
    background-color: rgba(0,0,0,.25);
}
.card, .card-title {
    margin-bottom: 15px;
}
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card-header:first-child {
    border-radius: 4px 4px 0 0;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.cursor-pointer, .pointer-cursor {
    cursor: pointer!important;
}
.card-header {
    margin-top: 0;
    border-bottom: 1px solid rgba(255,255,255,.15);
}
.card-header, .card-subtitle, .card-text:last-child {
    margin-bottom: 0;
}
.card, .card-header {
    background-color: rgba(0,0,0,.25);
}
.card-footer, .card-header {
    font-weight: 600;
    padding: 10px 15px;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.collapse.show {
    display: block;
}
.collapse {
    display: none;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
 
 


</style>

        </div>
        <!-- end container -->
    </div>
 

    <section id="content" style="    background: #00000075;">

    <div class="container">
    <div class="contact-info-wrapper clearfix">
    <div class="row">
                
    <div class="col-md-9  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
  									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-1.png" alt="" /></span>
										<span class="username">Costo de Curso S/.200</span>
									</div>
									<span class="username">Instructor: Tecnicos  </span>
									

                                                         
			    	<!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
							#1 Intalacion de Xampp Laragon
							</div>
							<div id="collapseOne" class="collapse " data-parent="#accordion" style="">
								<div class="card-body">
									......
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
								#2 Configuracion de Cpanel
							</div>
							<div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
								<div class="card-body">
									.....
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseThree">
								#3 Migracion de Hosting 
							</div>
							<div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body">
									....
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseFour">
								#4 Configuracion Firewall TCP/IP
							</div>
							<div id="collapseFour" class="collapse" data-parent="#accordion">
								<div class="card-body">
									...
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseFive">
								#5 Creacion de Webs PHP
							</div>
							<div id="collapseFive" class="collapse" data-parent="#accordion">
								<div class="card-body">
									......
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseSix">
								#6 Base de Datos Mysql SQL
							</div>
							<div id="collapseSix" class="collapse" data-parent="#accordion">
								<div class="card-body">
									.....
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseSeven">
								#7 Configuracion de DNS 
							</div>
							<div id="collapseSeven" class="collapse" data-parent="#accordion">
								<div class="card-body">
									....
								</div>
							</div>
							
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseEight">
								#8 Soporte de Base de Datos
							</div>
							<div id="collapseEight" class="collapse" data-parent="#accordion">
								<div class="card-body">
									.....
								</div>
							</div>
							
							</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseNine">
							#9 Configuracion de Dominios
							</div>
							<div id="collapseNine" class="collapse" data-parent="#accordion">
								<div class="card-body">
									.....
								</div>
							</div>
						</div>
						 
                  
                    <div class="what-you-get__title" style="    padding-left: 16px;"> Requisitos </div>     
                    <ul>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Traer Herramientas por Curso</li>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Conocimientos Basicos del Curso </li>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Laptop con Windows 8-10</li>
                    </ul>                
                                     
                    <div class="what-you-get__title" style="    padding-left: 16px;"> Beneficios </div>  
                    <ul>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Material Didactico</li>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Certificado al Merito </li>
                    <li style="    padding-left: 16px;"><i class="fa fa-check" aria-hidden="true"></i> Bolsa de Trabajo</li>
                    </ul>              
                    <br>
                   

                                  
			
</ul>
    </div>

    <div class="col-md-3  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt=""  style=""/></span>
										<span class="username">DETALLES DE CURSO</span>
                                        
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
								    <span class="pull-left span-ajust"><strong>Dia de Inicio:</strong> <br>Lunes Martes <br>Jueves Viernes <br>Sabado Domingo  </span><br><br><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Cupos de Cursos:</strong><br> Limitados 8 / 10</span><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Dia y Hora:</strong> <br>Lunes y Martes <br> 6:00 Pm a 8:00 Pm</span><br><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Dia y Hora:</strong> <br>Jueves y Viernes <br> 6:00 Pm a 8:00 Pm</span><br><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Dia y Hora:</strong> <br>Sabado y Domingo <br> 1:00 Pm a 3:00 Pm</span><br><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Vacantes de Curso:</strong><br> Vacantes Disponibles</span><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Ubicanos:</strong><br>Lt.13 - Mz.H - Gp.15 - St.1  <br>Villa el Salvador<br>Lima - Peru</span><br><br><br><br><br>
                                    <span class="pull-left span-ajust"><strong>Estado de Curso:</strong><br> Abierto todo el mes del año</span><br><br><br>
                                    <span class="pull-left span-ajust" align="justify"><i class="fa fa-info redMenu" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Nota:</strong> Si desea reservar tu matrícula consultar o contactarnos  mediante el formulario de registro, y confirmar la reserva y si decea abonar o cancelar los pagos se realizan en el mismo lugar o deposito bancario Banco de Credito BCP: 194-357-125-00-0-31 / BBVA Continental: 009-022-00000-6192980-58.</span><br><br>
                                    </div>
									<div class="timeline-footer">
                                    <div class="price-container">
   <button class="button  arrow" >COSTO S/.200 </button><br><br>
 <button class="button  email" onclick="window.location.href='formulario_cursos.php'"><span>RESERVAR </button>
 
         </div>
                                    </div> 
								</div>
								<!-- end timeline-body -->
                            </li>
</ul>
    </div>



    </div>
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

</script>
<!-- /WhatsHelp.io widget -->
    

<?php include 'inc/slider_bottom.php';?>
	<?php include 'inc/footer.php';?>
	<?php include 'inc/scripts.php';?>





	</body>
	
	
	</html>
