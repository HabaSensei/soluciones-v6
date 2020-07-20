<?php
error_reporting(0);
include '../library/configServer.php';
include '../library/consulSQL.php';
 

sleep(2);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['prod-price'];
$priceCompraProdUp=$_POST['prod-price-compra'];
$modelProdUp=$_POST['prod-model'];
$marcaProdUp=$_POST['prod-marca'];
$pesoProdUp=$_POST['prod-peso'];
$stockProdUp=$_POST['prod-stock'];
$detaProdUp=$_POST['prod-detalle'];
$detalleTecProdUp=$_POST['prod-tecnico'];
$imgOldProdUp=$_POST['img-old-prod'];


//print_r($imgOldProdUp);
if(move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img-products/".$_FILES['img']['name'])){
   if(consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp', NombreProd='$nameProdUp', CodigoCat='$catProdUp',Precio='$priceProdUp', Compra='$priceCompraProdUp',Modelo='$modelProdUp',Marca='$marcaProdUp',Peso='$pesoProdUp',Stock='$stockProdUp',Detalle='$detaProdUp',TecDetalle='$detalleTecProdUp',Imagen='".$_FILES['img']['name']."'", "CodigoProd='$codeOldProdUp'")){
     echo '
     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se actualizo '.$nameProdUp.'\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/actualizarStock.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>
 ';
 }else{
    echo '
     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego en el inventario '.$nameProdUp.'\t \n \t Error en insertar datos.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>
 ';
}
 }else{
	if(consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp', NombreProd='$nameProdUp', CodigoCat='$catProdUp',Precio='$priceProdUp', Compra='$priceCompraProdUp',Modelo='$modelProdUp',Marca='$marcaProdUp',Peso='$pesoProdUp',Stock='$stockProdUp',Detalle='$detaProdUp',TecDetalle='$detalleTecProdUp',Imagen='$imgOldProdUp'", "CodigoProd='$codeOldProdUp'")){
  echo '
     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se actualizo '.$nameProdUp.'\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/actualizarStock.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>
 ';
}else{
    echo '
     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego en el inventario '.$nameProdUp.'\t \n \t Error en insertar Imagen.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>
 ';
}
}