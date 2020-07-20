<?php
session_start();
include_once("library/db_connect.php");
include_once("library/config.inc.php");
setlocale(LC_MONETARY,"en_US");
# add products in cart 
if(isset($_POST["CodigoProd"])) {
	foreach($_POST as $key => $value){
		$product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}	
	$statement = $conn->prepare("SELECT NombreProd, Modelo, Marca, Precio, Imagen FROM producto WHERE CodigoProd=? LIMIT 1");
	$statement->bind_param('s', $product['CodigoProd']);
	$statement->execute();
	$statement->bind_result($product_name, $modelo_prod, $marca_prod, $product_price, $product_img);
	while($statement->fetch()){ 
		$product["Imagen"] = $product_img;
		$product["NombreProd"] = $product_name;
		$product["Precio"] = $product_price;	
		$product["Modelo"] = $modelo_prod;
		$product["Marca"] = $marca_prod;	
		if(isset($_SESSION["products"])){ 
			if(isset($_SESSION["products"][$product['CodigoProd']])) {				
				$_SESSION["products"][$product['CodigoProd']]["product_qty"] = $_SESSION["products"][$product['CodigoProd']]["product_qty"] + $_POST["product_qty"];				
			} else {
				$_SESSION["products"][$product['CodigoProd']] = $product;
			}			
		} else {
			$_SESSION["products"][$product['CodigoProd']] = $product;
		}	
	}	
 	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}
# Remove products from cart
if(isset($_GET["remove_code"]) && isset($_SESSION["products"])) {
	$product_code  = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING);
	if(isset($_SESSION["products"][$product_code]))	{
		unset($_SESSION["products"][$product_code]);
	}	
 	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}
# Update cart product quantity
if(isset($_GET["update_quantity"]) && isset($_SESSION["products"])) {	
	if(isset($_GET["quantity"]) && $_GET["quantity"]>0) {		
		$_SESSION["products"][$_GET["update_quantity"]]["product_qty"] = $_GET["quantity"];	
	}
	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}	
