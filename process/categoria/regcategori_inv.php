<?php
session_start();
include '../../library/configServer.php';
include '../../library/consulSQL.php';

sleep(2);
$codeCateg= $_POST['categ-code'];
$nameCateg= $_POST['categ-name'];
$rubroCateg= $_POST['categ-rubro'];

$descripCateg= $_POST['categ-descrip'];

if(!$codeCateg=="" && !$nameCateg=="" && !$descripCateg==""){
    $verificar=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$codeCateg."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("categoria", "CodigoCat, Nombre, Descripcion", "'$codeCateg','$nameCateg','$descripCateg'")){
            echo '
             <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se agrego la categoria de '.$nameCateg.'\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/anadirCat_inv.php";
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
			text: "\t Error Vuelva a Intentarlo\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4500
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/anadirCat_inv.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>
           
           
           '; 
        }
    }else{
        echo '
        
        <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t Codigo Repetido \t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/anadirCat_inv.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>
        
        
        
        
        ';
    }
}else {
    echo '
     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t Campos Vacios \t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    setTimeout(function(){
        url ="../views/anadirCat_inv.php";
        $(location).attr("href",url);
        },4500);
        
        
    </script>
        
    
    ';
}

