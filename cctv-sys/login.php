<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	 <?php
    
    include 'library/configServer.php';
?>
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	 <title>SOLUCIONES CCTV Y SISTEMAS</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" type="image/png" href="img/icono.png" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/transparent/style.min.css" rel="stylesheet" />
	<link href="assets/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="../assets/css/extra/login.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-black-darker">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		
	    <!-- begin login -->
        <div class="login login-with-news-feed">
			
            <!-- begin news-feed -->
            <div class="news-feed">
				
                <div class="news-image" style="background-image: url(assets/img/login-bg/login-bg-6.jpg)"></div>
                <div class="news-caption">
					<h4 id="index" class="caption-title" style="    margin-top: -78%;    margin-bottom: 54%; display:none;"><b>Selecciona un Modulo para Ingresar</b></h4>
					<h4 id="AL" class="caption-title" style="    margin-top: -78%;    margin-bottom: 54%; display:none;"><b>Modulo de Almacen seleccionado</b></h4>
					<h4 id="CA" class="caption-title" style="    margin-top: -78%;    margin-bottom: 54%; display:none;"><b>Modulo de Caja seleccionado</b></h4>
				<form action="process/login.php" method="post" role="form" class="FormCatElec margin-bottom-0" data-form="login">	
					<div id="login-button" class="hidden-sm" style="display:none;">
			<label style="display:none;">
			  <input type="radio" name="optionsRadios" value="option1"  onchange="mostrar(this.value);">
			  <img src="../assets/img/login-icons/almacen.png">
		  </img>
		      
			</label>
		 
		</div>
		<h2 style="color:white;      color: white;
    position: absolute;
    top: -213px;
    left: 80px; display:none;">Almacen</h2>
		<div id="login-button3" class="hidden-sm" style="display:none;">
			<label style="display:none;">
			  <input style="display:none;" type="radio" name="optionsRadios" value="option2"  onchange="mostrar(this.value);" checked>
		  <img src="../assets/img/login-icons/contabilidad.png" style="display:none;">
		 </img>
			</label>
		</div>
		 <h2 style="color:white;   display:none;   color: white;
    position: absolute;
    top: -213px;
    left:  493px;">Ventas</h2>
                                    </div>
            
						 </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <br>
                         <b>SOLUCIONES CCTV & SISTEMAS</b> 
                        <small>Por Favor digite Usuario y Contraseña Para Ingresar.</small>
                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                  
                        <div class="form-group m-b-15">
                            <input type="text"  name="nombre-login" id="email"  class="form-control form-control-lg" placeholder="Usuario" required autocomplete="off"/>
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="clave-login"  id="password"  class="form-control form-control-lg" placeholder="Contraseña" required autocomplete="off"/>
                        </div>
                        
                      
                        <div class="login-buttons">
                            <button type="submit" style="font-size: 19px;" class="btn btn-primary btn-block btn-lg">Iniciar Session</button>
                            
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                           <div class="ResFormL animated fadeInDown"> </div>
                        </div>
                        <hr />
                       <p class="text-center">
                            &copy; Admin Panel 2019 bajo terminos de uso limitado.
                        </p>
                        <p class="text-center">
                            Informes. 968-933-814 / Ventas. 986-838-333 / Soporte. 996-727-562
                        </p>
                        <p class="text-center">
                            Lt. 13 - Mz. H - Gp. 15 - St. 1 - Villa el Salvador - Lima - Peru
                        </p>
                         <p class="text-center">
                            Soporte y Asesoria Permanente.
                        </p>
                        <p class="text-center">
                         <a  class="btn btn-warning" href="../index.php" style="    margin-left: 40px; font-size: 19px;">VOLVER AL INICIO</a>
                        </p>
                       </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
        
        <!-- begin theme-panel -->
        
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/transparent.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	
	<script src="js/login.js" type="text/javascript"></script>
	
	<!-- ================== END BASE JS ================== -->
     <script>
     function mostrar(dato) {
  if (dato == "option1") {
    document.getElementById("AL").style.display = "block";
    document.getElementById("CA").style.display = "none";
    document.getElementById("index").style.display = "none";
  }
  if (dato == "option4") {
    document.getElementById("AL").style.display = "none";
    document.getElementById("CA").style.display = "block";
    document.getElementById("index").style.display = "none";
  }
  
}
     
     </script>
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
