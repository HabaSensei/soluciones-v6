<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

//sleep(5);
 $ordenList= $_GET['CodigoCat'];

$cons=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$ordenList."'");
$totalcateg = mysqli_num_rows($cons);
//print_r($codeCateg);
if($totalcateg>0){
    if(consultasSQL::DeleteSQL('categoria', "CodigoCat='".$ordenList."'")){
        echo '<img src="../assets/img/commons/correcto.png" class="center-all-contens"><br><p class="lead text-center">Categoría eliminada éxitosamente</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../views/actualizarCat_inv.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../views/actualizarCat_inv.php";
							$(location).attr("href",url);
							},1500);
							</script>';
    }else{
       echo '<img src="../../assets/img/commons/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../views/actualizarCat_inv.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../views/actualizarCat_inv.php";
							$(location).attr("href",url);
							},1500);
							</script>'; 
    }
}else{
    echo '<img src="../assets/img/commons/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código de la categoria no existe</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../views/actualizarCat_inv.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../views/actualizarCat_inv.php";
							$(location).attr("href",url);
							},1500);
							</script>	';	
    }
