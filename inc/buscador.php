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
//~ include 'library/config4.php';

?>

<?php
require_once("library/class.php");
$bus = new Buscador();
$buscame = $bus->buscar();

?>

	<!DOCTYPE html>
	<html lang="en">


	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include 'inc/links.php';?>
	</head>
	<body>
	<?php include_once 'inc/navbar-mobile.php';?>
	<?php include 'inc/navbar-prod.php';?>
	
	


</nav>
</div>
	<?php include 'inc/categorias.php';?>
    	
    	

<div class="col-md-9 col-sm-9 col-xs-12 ali-prod-top-2">
<div class="shop-content">


<div class="tab-content">
<div id="grid-view" class="tab-pane active">
	<?php
	
		//COMPROBAMOS SI HAY REGISTROS EN LA BUSQUEDA, SI NO LOS HAY, MOSATRAMOS UN MENSAJE DICIENDO QUE NO HAY RESULTADOS, EN OTRO CASO, MOSTRAMOS LOS RESULTADOS
		if(count($buscame)==0)
		{
		echo "<h2>No hay resultados para su búsqueda...</h2>";
		}else{
		
	    for($i=0;$i<sizeof($buscame);$i++) {
            $precio=$buscame[$i]['Precio'];
            $ganancia=$buscame[$i]['ganancia'];
            $medio=$buscame[$i]['medio'];
           $total_prod = $precio * ($ganancia + $medio) / 100 + $precio;
							$p_p = ($precio * 25 / 100);
							$p_p_a =  $total_prod + $p_p;
							$p_p_r = round($p_p_a, 0, PHP_ROUND_HALF_DOWN);
            echo "<form class='product-form'>
            <div class='col-md-4 col-sm-6 col-xs-12 prod-ajust' style='    margin-bottom: 4%;'>
		    <div class='shop-product'>
	        <div class='product-box'>".
            "<a href='infoProd.php?CodigoProd={$buscame[$i]['CodigoProd']}' class='item-image'><img value='{$buscame[$i]['Imagen']}' style='border: solid 1.2px; border-bottom: none;'  height='250px' width='500' src='assets/img-products/{$buscame[$i]['Imagen']} ' alt=''></a>".
            "<div class='cart-overlay'></div>".
            "<div class='actions'>
		    <div class='add-to-links'>
		    <input name='product_qty' type='hidden' value='1'>".
		    "<input name='CodigoProd' type='hidden' value='{$buscame[$i]['CodigoProd']}'>".
		    "<button  class='btn-cart  my-cart-btn btn-common' type='submit'><i class='icon-basket'></i>&nbsp;&nbsp;Añadir</button>".
	        "<a class='btn-quickview md-trigger' href='infoProd.php?CodigoProd={$buscame[$i]['CodigoProd']}'><i class='icon-eye'></i>&nbsp;&nbsp;Ver Producto</a>".
		    "</div>
		    </div>
		    
		    </div>".
		    "<div class='' style='padding: 0px 15px 0px; border-top: 1px dashed; padding-right: 9px; padding-left: 12px; background: #eae8e8e6; border-left: 1px dashed; border-right: 1px dashed;'>".
		    "<h4 class='product-title' style='    margin-top: 52px;'>".
		    "<a style=' font-size: 12px; margin: -31px 0px;position: absolute; margin-right: 27px;  font-size: 14px;' href='infoProd.php?CodigoProd={$buscame[$i]['CodigoProd']}'> {$buscame[$i]['NombreProd']}</a>".
		    "</h4>".
		    "<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 5px;  font-size: 13px;'><a >{$buscame[$i]['Modelo']} - {$buscame[$i]['Marca']} </a></h5><br>" .
								"<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 11px;  font-size: 15px;'> Antes: <s>{$buscame[$i]['moneda']} {$p_p_r}.00 </s>&nbsp;&nbsp; 25 % DCTO</h5>" .
								"<div style='width: 107%; margin-left: -12px; border-top: 1.2px dashed;'></div>".
								"<div id='ribbon2' style='font-weight:1000;'><span id='contento'>{$buscame[$i]['moneda']} {$total_prod}</span>  <img src='assets/img/tarjeta.png' width='50px' height='30px' ></span> <img src='assets/img/envio.png' width='50px' height='30px' ></div></div>" .
								"</form></div></div>";
         }
         echo "</div></div> 
         <div class='text-center'>
         <ul class='pagination m-t-0'>
         ";
         
         
         
         
         $final = $rec_count / $rec_limit  ;
         $start = ( ( $page - $final ) > 0 ) ? $page - $final : 0;  
         $end  = ( ( $page + $final ) < $final ) ? $page + $final : $final;  
         $end_format = round($end, 0, PHP_ROUND_HALF_DOWN);
         
         if ($page == 0) {
			
			 for ( $i = $start ; $i <= $end; $i++ ) { 
		$class  = ( $page == $i ) ? "active" : "";
	    $sig = ($page + $i);
	    echo "<li class=".$class."><a href = \"buscador.php?s=$var_buscador?page=$sig\"> $i </a></li>";
		 
		 }	 
		  $dale  = ( $page + 1 );
            echo "<li ><a href = \"productos.php?page=$dale\">Siguiente</a></li>";
         			 
		}else if( $page > 0 ) {
		$atras  = ( $page - 1 );
            echo "<li ><a href = \"productos.php?page=$atras\">Previo</a></li>";    	
		for ( $i = $start ; $i <= $end; $i++ ) {
			 
		$class  = ( $page == $i ) ? "active" : "";
	    
		 echo "<li class=".$class."><a href = \"productos.php?page=$i\"> $i </a></li>";
		 
		 }	
		  
		 if ($page == $end_format) {
			$dale  = ( $page  );
            echo "<li class='disabled'><a href = \"productos.php?page=$dale\">Siguiente </a></li>";
         }else {
			$dale  = ( $page + 1 );
			echo "<li ><a href = \"productos.php?page=$dale\">Siguiente</a></li>";
			 
			 }
			 
			 
		}else if( $rec_limit >  $rec_count  ) {
			 echo "$rec_limit.$rec_count";
		}else if( $rec_count < $rec_limit ) {
            
         }
         echo "</ul></div></div>";
         
	 }
         
      ?>
      
                        
                    </div>
                    <!-- END search-sidebar -->
                </div>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        
        </div>

	<?php include 'inc/slider_bottom.php';?>
	<?php include 'inc/footer.php';?>
	<?php include 'inc/scripts.php';?>





	</body>
	
	
	</html>
