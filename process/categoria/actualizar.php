
<?php
include '../../library/configServer.php';
include '../../library/consulSQL.php';
 

sleep(2);

//print_r($codeCatUp);

$codeOldCatUp=$_POST['categ-code-old'];
$codeCatUp=$_POST['categ-code'];
$nameCatUp=$_POST['categ-name'];
$descCatUp=$_POST['categ-descrip'];

if(consultasSQL::UpdateSQL("categoria", "CodigoCat='$codeCatUp',Nombre='$nameCatUp',Descripcion='$descCatUp'", "CodigoCat='$codeOldCatUp'")){
    echo '
    <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se actualizo la categoria '.$nameCatUp.'\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/actualizarCat_inv.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>

 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="../../assets/img/commons/cancel.png">
    
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 4 segundos
    </p>
    <p class="lead text-cente">
      La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
      <a href="../../views/actualizarCat_inv.php" class="btn btn-primary btn-lg">Volver a administración</a>
    <script>
        setTimeout(function(){
         url ="../../views/actualizarCat_inv.php";
        $(location).attr("href",url);
        },4000);
    </script>
 ';
}


