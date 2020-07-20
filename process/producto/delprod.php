<script src="../assets/js/jquery-1.10.2.min.js"></script>
<?php
 session_start();
 error_reporting(E_NOTICE);
 include '../../../library/configServer.php';
 include '../../../library/consulSQL.php';

 //sleep(4);
 
 $codeProd= $_GET['CodigoProd'];
 $cons=  ejecutarSQL::consultar("select * from inventario where CodigoProd='$codeProd'");
 $consDetalle=  ejecutarSQL::consultar("SELECT `detalle`.*, `detalle`.`CodigoProd` FROM `detalle` WHERE (`detalle`.`CodigoProd` like '$codeProd')");
 $totaldetalle= mysqli_num_rows($consDetalle);
 $totalproductos = mysqli_num_rows($cons);
 $tmp=  mysqli_fetch_array($cons);
 
 if ($totaldetalle>=1){
	echo '<img src="../../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El producto no puede ser eliminado porque hay una orden de compra</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarStock_rop.php";
							$(location).attr("href",url);
							},1500);
							</script>				
	
	';
    }else{
 if($totalproductos>0){
	  if(consultasSQL::DeleteSQL('inventario', "CodigoProd='".$codeProd."'")){
      echo '<img src="../../assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">El producto se elimino de la tienda con éxito</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarStock_rop.php";
							$(location).attr("href",url);
							},1500);
							</script>				
        
        ';
    }else{
        echo '<img src="../../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarStock_rop.php";
							$(location).attr("href",url);
							},1500);
							</script>				
        '; 
    }
 }else{
     echo '<img src="../../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código del producto no existe</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarStock_rop.php";
							$(location).attr("href",url);
							},1500);
							</script>				
     
     ';
   
     }
 }
