<?php      
  error_reporting(E_ALL); 
session_start();
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        include_once '../library/config.inc.php';
        require 'plantilla.php';
	    require '../library/conexion.php';
	    include 'numerosAletras.php';
				
	    $ID=$_POST['ruc'];
		$nombEmpresa=$_POST['nombre'];
		$correo=$_POST['correo'];
		$tel=$_POST['telefono'];
		$dir=$_POST['direccion'];
		$cod=$_POST['CodCotiza'];
		$fecha=$_POST['fecha'];
		$total=$_POST['total'];
		$total_final= ($total);

		
 if(!$ID=="" && !$nombEmpresa=="" && !$correo=="" && !$tel=="" && !$dir==""){
	$verificar=  ejecutarSQL::consultar("select * from clientes where ID='".$ID."'");
            $verificaltotal = mysqli_num_rows($verificar);
            
            if ($verificaltotal<=0) {
                if (consultasSQL::InsertSQL("clientes", "ID, NombreEmpresa, Correo, Telefono, Direccion", "'$ID','$nombEmpresa','$correo','$tel','$dir'"));
                if (consultasSQL::InsertSQL("cotizacion_online", "id_cotizacion, ID, fecha_cotizacion, GranTotal", "'$cod','$ID','$fecha','$total_final'"));
     
     
                foreach ($_SESSION["products"] as $product) {
                    $product_name = $product["NombreProd"];
                    $product_price = $product["Precio"];
                    $product_code = $product["CodigoProd"];
                    $product_qty = $product["product_qty"];
                    
                    $ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot` FROM `producto`	, `perfil`;");
                     
                    
                    
                    while ($ordenP=mysqli_fetch_assoc($ordenU)) {
                        $product_ganancia=$ordenP['ganancia'];
                        $product_medio=$ordenP['medio'];
                        $product_price_total=($product_price * ($product_ganancia + $product_medio) / 100 + $product_price);
                
                        $subtotal = ($product_price_total * $product_qty);
                    }
                
                
                    
     
                    if (consultasSQL::InsertSQL("detalle_cotizacion_online", "id_cotizacion, CodigoProd, Cantidad, SubTotal", "'$cod','$product_code','$product_qty','$subtotal'"));
                }
    
                
			}
			include 'base_cotizacion.php';
		}
       ?>
               
