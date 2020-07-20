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
        $modelProd= $_POST['prod-model'];
        $skuProd= $_POST['prod-sku'];
        $serialProd= $_POST['prod-serial'];
        $stockProd= $_POST['prod-stock'];
        $fechaProd= $_POST['prod-fecha'];
        $tecProd= $_POST['prod-tecnico'];
        $marcaProd= $_POST['prod-marca'];
        $colorProd= $_POST['prod-color'];
        $tallaProd= $_POST['prod-talla'];
		$sexoProd= $_POST['prod-sexo'];
	    
	    if(!$codeProd==""){
            $verificar=  ejecutarSQL::consultar("select * from inventario where CodigoProd='".$codeProd."'");
            $verificaltotal = mysqli_num_rows($verificar);
            if($verificaltotal<=0){
	    
		  if(isset($_FILES['imagen'])){
      $errors= array();
      $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES['imagen']['name']));
      $file_name = $_FILES['imagen']['name'];
      $file_size =$_FILES['imagen']['size'];
      $file_tmp =$_FILES['imagen']['tmp_name'];
      $file_type=$_FILES['imagen']['type'];
      
      
      $extensions= array("jpeg","jpg","png");
      
      if(($extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../../assets/img-inventario/".$newfilename);
         
      }else{
         print_r($errors);
      }
   }
      
      
      if(consultasSQL::InsertSQL("inventario", "CodigoProd, Sku, Serial, Nombre, Marca, Modelo, Precio, Color, Talla,  Sexo, CodigoCat, Stock, NombreAlma, Fecha_ingreso, Imagen", "'$codeProd','$skuProd','$serialProd','$nameProd','$marcaProd','$modelProd','$priceProd','$colorProd','$tallaProd','$sexoProd','$cateProd','$stockProd','$tecProd','$fechaProd','$newfilename'")){
                     
         echo '
                            <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Exitosa",
			text: "\t se agrego en el inventario '.$nameProd.'\t \n \t El sitio se recargara automaticamente",
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
			text: "\t no se agrego en el inventario '.$nameProd.'\t \n \t Error en insertar datos.",
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
                echo '
                                              <script>
        $(document).ready(function(){
        swal({
			title: "Operacion Fallida",
			text: "\t no se agrego en el inventario '.$nameProd.'\t \n \t Codigo repetido.",
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
			text: "\t no se agrego en el inventario '.$nameProd.'\t \n \t Campos vacios.",
			showConfirmButton: true,
			icon:  "error",
			button: false,
			timer: 4000
			 });
        
	    });
	    
	    
        
        
    </script>
                ';
        }
?>

		
		
     
               
