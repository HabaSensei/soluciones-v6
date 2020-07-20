    
    <div class="header">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-2">
<div class="language-wrapper">
<div class="box-language ">

<div class="btn-group toggle-wrap">


</div>
<img class="hidden-xs" src="assets/img/whatsapp.svg" width="25px;"  height="33px;"><span class="hidden-xs"> Contactanos  :986-838-333</span>
</div>


</div>
<div class="clear"></div>
</div>
<div class="col-md-9 col-sm-10">

<div class="search-area">
<form  role="search" name="form" action="buscador.php" method="get">
<div class="control-group">

<input class="search-field" name="s"  placeholder=" Hola, Tecnolover, ¿Qué Estás Buscando?"  style="    /* padding: 0px 0px 0px 0px; */
    /* display: block; */">
<button class="search-button" style="<?php echo $paddin;  ?>" type="submit"><i class="icon-magnifier"></i></button>
</div>
</form>
</div>
<div class="shop-cart">
<ul>

<li>
	
<a href="view_cart.php" class="cart-icon cart-btn cart-item" ><i class="icon-basket"></i>&nbsp;&nbsp;Cotizador<span class="cart-label" id="cart-container"><?php 
		if(isset($_SESSION["products"])){
			echo count($_SESSION["products"]); 
		} else {
			echo 0; 
		}
		?></span></a>


</li>
</ul>
</div>
<div class="account link-inline">
	<?php  if(!$_SESSION['NombreAfil']==""){
							echo ' 
								 <a href="afiliado/index.php"><i class="fa fa-list-ul"></i><span class="">panel admin</span></a>		
							 ';
							}else if(!$_SESSION['Nick_ve']==""){
								
								
							echo '<a href="afiliado/index.php"><i class="fa fa-list-ul"></i><span class="">panel admin</span></a>  ';
						}
						else if(!$_SESSION['Nick_Caja']==""){
								
								
							echo '<a href="afiliado/index.php"><i class="fa fa-list-ul"></i><span class="">panel admin</span></a>  ';
						}
						else if(!$_SESSION['Nick_stock']==""){
								
								
							echo '<a href="afiliado/index.php"><i class="fa fa-list-ul"></i><span class="">panel admin</span></a>   ';
						}else {
							echo '<a href="cctv-sys/login.php"><i class="icon-user"></i><span class="">Inicio Sesion</span></a>';
							
							}
							
							
							 ?>
	
	

</div>
</div>
</div>
</div>
</div>

<style>
.b-hamb {
border-radius: 0;

-webkit-transition: all .2s linear;
-moz-transition: all .2s linear;
-o-transition: all .2s linear;
transition: all .2s linear;}

.b-hamb-btn{
	cursor: pointer;
display: block;
float: right;
height: 46px;
line-height: 50px;
top: 12px;
right: 14px;
position: relative;
vertical-align: middle;
width: 58px;
background-image: url(menu.png);
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
}
.b-hamb-btn-prod {
	cursor: pointer;
    display: block;
    float: right;
    height: 46px;
    line-height: 50px;
    top: 12px;
    right: 14px;
    position: relative;
    vertical-align: middle;
    width: 58px;
    background-image: url(menu.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;




}
</style>
<nav class="navbar navbar-default" > <!--  data-spy="affix" data-offset-top="50"-->
<div class="container ajust">
<div class="row">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<i class="fa fa-bars"></i>
</button>
<a style="z-index: 100;" class="navbar-brand" href="index.php">
<img src="assets/img/logo.png" >
</a>
<button class="b-hamb-btn b-hamb  hidden-lg js-open-left-slidebar"></button>
</div>
<div class="navbar-collapse collapse" style="    position: relative;
    left: 40px;">

<ul class="nav navbar-nav navbar-right ">
<li class="link-1"><a  href="index.php"><i class="icon-home"></i>&nbsp;&nbsp; INICIO </a></li>

<li class="link-1"><a  href="servicios.php"><i class="icon-wrench"></i>&nbsp;&nbsp; SERVICIOS</a></li>

<li class="link-1"><a href="infoCat.php?CodigoCat=C000008"><i class="icon-basket-loaded"></i>&nbsp;&nbsp; OFERTAS</a></li>

<li class="link-1"><a href="productos.php"><i class=" icon-wallet "></i>&nbsp;&nbsp; PRODUCTOS</a></li>

<li class="link-1"><a href="nosotros.php"><i class=" glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp; NOSOTROS</a></li>
 
<li class="link-1"><a href="contacto.php"><i class=" icon-people"></i>&nbsp;&nbsp; CONTACTANOS</a></li>



</ul>

</div>

</div>
</div>




</nav>
</div>


<nav class="navbar navbar-inverse navbar-fixed-bottom hidden-xs" align="center">

<ul >
				
<div style="vertical-align: super;   display: inline-block;"><i style="    font-size: 25px;      margin-left: 40px;   color: infoCat.php?CodigoCat=C000002ff9f00;" class="fa fa-cc-visa" aria-hidden="true"></i></div><div class="bar-contenido"><span class="bar-txt" style="color:white;    font-size: 12px;">Cuenta Bancaria Soluciones<br>BCP:194-357-125-00-0-31</span></div>
<a href="https://api.whatsapp.com/send?phone=51968933814&text=hola,%20qu%C3%A9%20tal?" style="color: #f58634;"><div style="      vertical-align: super;  display: inline-block;"><i style="    font-size: 30px;     color: infoCat.php?CodigoCat=C000002ff9f00;" class="fa fa-whatsapp" aria-hidden="true"></div></i><div class="bar-contenido"><span class="bar-telefono"></span><span class="bar-txt" style="color:white;    font-size: 12px;">Informes / Asesoria<br>+51 968-933-814</span></div></a>
<a href="https://api.whatsapp.com/send?phone=51986838333&text=hola,%20qu%C3%A9%20tal?" style="color: #f58634;"><div style="      vertical-align: super;  display: inline-block;"><i style="    font-size: 25px;     color: infoCat.php?CodigoCat=C000002ff9f00;" class="glyphicon glyphicon-phone" aria-hidden="true"></div></i><div class="bar-contenido"><span class="bar-telefono"></span><span class="bar-txt" style="color:white;    font-size: 12px;">Ventas / Soporte<br>+51 986-838-333</span></div></a>
<a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?" style="color: #f58634;"><div style="      vertical-align: super;  display: inline-block;"><i style="    font-size: 28px;     color: infoCat.php?CodigoCat=C000002ff9f00;" class="fa fa-wrench" aria-hidden="true"></div></i><div class="bar-contenido"><span class="bar-telefono"></span><span class="bar-txt" style="color:white;    font-size: 12px;">Averias / Garantia <br>+51 996-727-562</span></div></a>
<a href="https://api.whatsapp.com/send?phone=51986838333&text=hola,%20qu%C3%A9%20tal?" style="color: #f58634;"><div style="      vertical-align: super;  display: inline-block;"><i style="    font-size: 30px;     color: infoCat.php?CodigoCat=C000002ff9f00;" class="fa fa-desktop" aria-hidden="true"></div></i><div class="bar-contenido"><span class="bar-telefono"></span><span class="bar-txt" style="color:white;    font-size: 12px;">Soporte / en Linea<br>+51 986-838-333</span></div></a>


</ul>


</nav>
<div  off-canvas="slidebar-1 left reveal">
				
	<ul   class="side">
	<div > 
	<img src="assets/img/cancel.png" class="over-web js-close-any-slidebar" 
	style="   position: absolute;
    width: 23px;
    top: 10px;
    left: 197px;">
    <label style="    position: absolute;
    left: 195px;
    top: 30px;
    font-size: 10px;">Cerrar</label>
    </div> 
	<li style="    border-top: 2px solid infoCat.php?CodigoCat=C000002333;">
	<a href="index.php"><i class="icon-home"></i>&nbsp;&nbsp; INICIO </a>
	</li>
	
	
	<li>
	<a href="servicios.php"><i class="icon-wrench"></i>&nbsp;&nbsp; SERVICIOS</a>
	</li>
	
	<li>
	<a href="infoCat.php?CodigoCat=C000008"><i class="icon-basket-loaded"></i>&nbsp;&nbsp; OFERTAS</a>
	</li>
	
	<li>
	<a href="productos.php"><i class="icon-wallet"></i>&nbsp;&nbsp; PRODUCTOS</a>
	</li>
	
	<li>
	<a href="cursos.php"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; CURSOS</a>
	</li>
	
	<li>
	<a href="nosotros.php"><i class="glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp; NOSOTROS</a>
	</li>
	
	
	<li>
	<a href="contacto.php"><i class="icon-people"></i>&nbsp;&nbsp; CONTACTANOS</a>
	</li>
	
	
	
	
	</ul>
    <div class="footer-redes" style="position: absolute;
    bottom: 182px;
    left: 23px;">
							<ul style="     list-style-type: none;   display: flex;">
							<li style=" margin-right: 14px;   padding-right: 20px;">
							<a class="icon-facebook" href="https://www.facebook.com/Soluciones-cctv-sistemas-sac-1626920177570816/" target="_blank"><i class="fa fa-facebook " aria-hidden="true"></i>
							</a>
							</li>
							<li style=" margin-right: 14px;   padding-right: 20px;">
							<a class="icon-youtube" href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?" target="_blank"><i class="fa fa-whatsapp " aria-hidden="true"></i>

							</a>
							</li>
							<li style="  margin-right: 14px;  padding-right: 20px;">
							<a class="icon-linkedin" href="https://www.youtube.com/channel/UCQzSYqEVVHzb70hr-l-t6zg" target="_blank"><i class="fa fa-youtube-play " aria-hidden="true"></i>
							</a>
							</li>
							<li style=" margin-right: 14px;   padding-right: 20px;">
							<a class="icon-wts" href="https://www.instagram.com/solucionescctvysistemas/" target="_blank"><i class="fa fa-instagram " aria-hidden="true"></i>
							</a>
							</li>
							</ul>
							
							</div>
							<div style="          background: #24262e9c;
    height: 0px;
    width: 0px;
    position: relative;
    bottom: -400px;
    left: -106px;">    </div>
		<img class="img-side" style="" src="assets/img/favicon.png">

	  
		<div style="          position: absolute;
    bottom: 10px;
    left: 18px;"><p align="center">SOLUCIONES CCTV & SISTEMAS<br>CEL. 986 838 333 / 996 727 562<br>LIMA - PERU</p></div>




     <div class="over-web " canvas="container"></div>			
		</div>
		</div>
