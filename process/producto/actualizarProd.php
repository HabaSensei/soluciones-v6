<script src="../../assets/js/jquery-1.11.1.min.js"></script>
<?php
include '../../../library/configServer.php';
include '../../../library/consulSQL.php';
 

//sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['prod-price'];
$modelProdUp=$_POST['prod-model'];
$stockProdUp=$_POST['prod-stock'];
$skuProdUp=$_POST['prod-sku'];
$serialProdUp=$_POST['prod-serial'];
$fechaProdUp=$_POST['prod-fecha'];
$almaProdUp=$_POST['prod-alma'];

//print_r($imgOldProdUp);

    if(consultasSQL::UpdateSQL("inventario", "CodigoProd='$codeProdUp',  Sku='$skuProdUp', Serial='$serialProdUp', Nombre='$nameProdUp', Modelo='$modelProdUp', Precio='$priceProdUp', CodigoSubCat='$catProdUp',Stock='$stockProdUp', NombreAlma='$almaProdUp',Fecha_ingreso='$fechaProdUp' ", "CodigoProd='$codeOldProdUp'")){
    echo '
     <img src="../../assets/img/correctofull.png" class="center-all-contens">
                            <br>
                            <h3>El producto se añadio a la tienda con éxito</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>
 ';
}else{
    echo '
    <img src="../../assets/img/incorrectofull.png" class="center-all-contens">
                            <br>
                            <h3>Ha ocurrido un error. Por favor intente nuevamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../../actualizarStock.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>
 ';
}


