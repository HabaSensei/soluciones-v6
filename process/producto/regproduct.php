<?php
       
        session_start();
        error_reporting(0);
        include '../../library/configServer.php';
        include '../../library/consulSQL.php';
        
         sleep(2);
        $codeProd= $_POST['prod-codigo'];
        $nameProd= $_POST['prod-name'];
        $cateProd= $_POST['prod-categoria'];
        $priceProd= $_POST['prod-price'];
        $priceCompraProd= $_POST['prod-price-compra'];
        $modelProd= $_POST['prod-model'];
        $marcaProd= $_POST['prod-marca'];
        $pesoProd= $_POST ['prod-peso'];
        $stockProd= $_POST['prod-stock'];
        $detaProd= $_POST['prod-detalle'];
        $tecProd= $_POST['prod-tecnico'];
        $venta= "0";
        
       
		
        if(!$codeProd=="" && !$nameProd=="" && !$cateProd==""  && !$priceProd=="" && !$priceCompraProd=="" && !$modelProd=="" && !$marcaProd=="" && !$pesoProd=="" && !$stockProd=="" && !$detaProd=="" && !$tecProd=="" && !$_FILES['img']['name']==""){
            $verificar=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$codeProd."'");
            $verificaltotal = mysqli_num_rows($verificar);
            if($verificaltotal<=0){
                if(move_uploaded_file($_FILES['img']['tmp_name'],"../../assets/img-products/".$_FILES['img']['name'])){
                    if(consultasSQL::InsertSQL("producto", "CodigoProd, NombreProd, CodigoCat, Precio, Compra, Modelo, Marca, Peso, Stock, Detalle, Venta, TecDetalle, Imagen", "'$codeProd','$nameProd','$cateProd','$priceProd', '$priceCompraProd', '$modelProd','$marcaProd','$pesoProd','$stockProd','$detaProd','$venta','$tecProd','".$_FILES['img']['name']."'")){
                       echo '
                             <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se agrego el producto '.$nameProd.'\t \n \t El sitio se recargara automaticamente",
			showConfirmButton: true,
			icon:  "success",
			button: false,
			timer: 2000
			 });
        
	    });
	    
	   setTimeout("location.reload(true);",2300);
        
        
    </script>
';
                   }else{
                      echo '
                            <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego el producto '.$nameProd.'\t \n \t Error en insertar datos.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>';
                   }   
                }else{
                    echo ' 
                         <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego el producto '.$nameProd.'\t \n \t Error en insertar Imagen.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>';
                }
            }else{
                echo '
                     <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego el producto '.$nameProd.'\t \n \t Error Codigo Repetido.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>';
            }
        }else {
            echo '
                <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego el producto '.$nameProd.'\t \n \t Error Campos vacios.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>';
        }
        ?>