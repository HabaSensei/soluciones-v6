<div id="content" class="product-area">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">

<div class="widget-ct widget-categories mb-30">
<div class="widget-s-title" style="    list-style: none;">
<h4>Categorias</h4>

 <li class="list-item-category"><a href="index.php" style="color: #2d2d2d;"><i class="fa fa-home" style="font-size: 25px; margin-right:4px;" aria-hidden="true"></i>&nbsp;&nbsp; INICIO</a></li>
            <hr class="categorias">    
             </li>
                <hr class="categorias">
                <li class="list-item-category">
					<a href="infoCat.php?CodigoCat=C000000" style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/pantalla.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; COMPUTO Y INFORMÁTICA<i class="icon-right-open-mini" style="float:right;"></i></b></span>
					</a>
					
					
					</li>
							<hr class="categorias">
							<li class="list-item-category">
								<a href="infoCat.php?CodigoCat=C000001"  style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/networking.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; 	REDES Y RADIO ENLACE<i class="icon-right-open-mini" style="float:right;"></i></b></span>
								</a>
								
								
								<li class="list-item-category">
                    <a href="infoCat.php?CodigoCat=C000002"  style="color: #2d2d2d;"> 
                        <span class="opener"><img src="assets/img/svg_icons/catego/negro/cctv.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; CÁMARAS CCTV-IP<i class="icon-right-open-mini" style="float:right;"></i></b></span>
                    </a> 
                    	
                    	
                    	</li>
							<hr class="categorias">
							<li class="list-item-category">
								<a href="infoCat.php?CodigoCat=C000003" style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/fuego.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; ALARMAS Y DOMOTICA<i class="icon-right-open-mini" style="float:right;"></i></b></span>
								</a>
								
								
								</li>
							<hr class="categorias">
							<li class="list-item-category">
								<a href="infoCat.php?CodigoCat=C000004"  style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/fingerprint.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; ACCESO Y CONTROL<i class="icon-right-open-mini" style="float:right;"></i></b></span>
								</a>			   
         
							
							</li>
							<hr class="categorias">
							<li class="list-item-category">
								<a href="infoCat.php?CodigoCat=C000005" style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/intercomunicadores_off.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; INTERCOMUNICACION<i class="icon-right-open-mini" style="float:right;"></i></b></span>
								</a>
								
								
								</li>
							<hr class="categorias">
							<li class="list-item-category">
								<a href="infoCat.php?CodigoCat=C000006" style="color: #2d2d2d;">
								<span class="opener"><img src="assets/img/svg_icons/catego/negro/intercomunicadores_off.svg" alt="" style="width: 25px; height: 24px;">&nbsp;&nbsp; MATERIALES<i class="icon-right-open-mini" style="float:right;"></i></b></span>
								</a>
							
							</li>
							<hr class="categorias">
							</div>
							
</div>


<div class="widget-ct widget-categories mb-30 hidden-xs">
<div class="widget-s-title" style="    list-style: none;">
<h4>Top Ventas</h4>

 <?php 
                   
                    $topV=  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Venta`, `perfil`.*
FROM `perfil`, `producto`
WHERE (`producto`.`Venta` = 1) ORDER BY RAND() LIMIT 1 ; ");
                    while($fila=mysqli_fetch_array($topV)){
						$cod=$fila['CodigoProd'];
						$nom=$fila['NombreProd'];
						$img=$fila['Imagen'];
						$prec=$fila['Precio'];
						$simb=$fila['Simbolo'];
						$ganancia=$fila['ganancia'];
						$medio=$fila['medio'];
						//print_r($nom);
                    
                    ?>
                    
                    
                    <figure class="post-thumb"><a href="infoProd.php?CodigoProd=<?php echo $cod ?> "><img style=" width: 132px; height: 105px;     margin-left: 67px;" src="assets/img-products/<?php echo $img ?>" alt=""></a></figure>
							<h5><a href="infoProd.php?CodigoProd=<?php echo $cod ?> " style="color: #333; margin-left: 10px;"><?php echo $nom ?></a></h5>
					
					<div class="price" style="margin-left: 10px;">
								<?php echo $simb ?> <?php echo $prec * ($ganancia + $medio) / 100 + $prec ?> 
							</div>
							
						
								<div class="" style="margin-left: 10px;">
		<div class="reviews-icon " style=" color: rgba(136, 0, 0, 1);">
		<i class="i-color fa fa-star"></i>
		<i class="i-color fa fa-star"></i>
		<i class="i-color fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		<i class="fa fa-star-o"></i>
							
							
							
							</div>
							</div>
	
	<?php  }?>
	
</div></div></div>
