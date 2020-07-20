<?php
session_start();
include '../../../library/configServer.php';
include '../../../library/consulSQL.php';

//sleep(5);
$codeCateg= $_POST['categ-code'];
$nameCateg= $_POST['categ-name'];
$descripCateg= $_POST['categ-descrip'];

if(!$codeCateg=="" && !$nameCateg=="" && !$descripCateg==""){
    $verificar=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$codeCateg."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("categoria", "CodigoCat, Nombre, Descripcion", "'$codeCateg','$nameCateg','$descripCateg'")){
            echo '
            <br>
    <img class="center-all-contens" src="../../assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 4 segundos
    </p>
    <p class="lead text-cente">
      La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
      <a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
    <script>
        setTimeout(function(){
        url ="../../actualizarCat.php";
        $(location).attr("href",url);
        },4000);
    </script>
            
           ';
        }else{
           echo '
           
           <br>
    <img class="center-all-contens" src="../../assets/img/cancel.png">
    
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 4 segundos
    </p>
    <p class="lead text-cente">
      La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
      <a href="../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
    <script>
        setTimeout(function(){
        url ="../../actualizarCat.php";
        $(location).attr("href",url);
        },4000);
    </script>
           
           '; 
        }
    }else{
        echo '
        
        <br>
    <img class="center-all-contens" src="../../assets/img/cancel.png">
    
    <p><strong>Error el codigo esta repetido </strong></p>
    <p class="text-center">
        Recargando<br>
        en 4 segundos
    </p>
    <p class="lead text-cente">
      La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
      <a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
    <script>
        setTimeout(function(){
        url ="../../actualizarCat.php";
        $(location).attr("href",url);
        },4000);
    </script>
        
        
        
        ';
    }
}else {
    echo '
    <br>
    <img class="center-all-contens" src="../../assets/img/cancel.png">
    
    <p><strong>Error Campos vacios</strong></p>
    <p class="text-center">
        Recargando<br>
        en 4 segundos
    </p>
    <p class="lead text-cente">
      La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
      <a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
    <script>
        setTimeout(function(){
        url ="../../actualizarCat.php";
        $(location).attr("href",url);
        },4000);
    </script>
    
    
    
    ';
}

