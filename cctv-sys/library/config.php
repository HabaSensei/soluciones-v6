<?php
error_reporting(E_PARSE);
$user = "solucioc_user";
						$pass = "h3b24p@U";
						try {
							$dbh = new PDO('mysql:host=localhost;dbname=solucioc_bd', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 16;
$page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 1;
$query = "SELECT producto.*, proveedor.`NITProveedor`, categoria.`CodigoCat` as codigocategoria, categoria.`Nombre`
FROM proveedor
    LEFT JOIN producto ON producto.`NITProveedor` = proveedor.`NITProveedor`
    LEFT JOIN categoria ON producto.`CodigoCat` = categoria.`CodigoCat`
 where Stock > 0 ".((isset($_GET["codigocategoria"]) && !empty($_GET["codigocategoria"]))? " AND categoria.CodigoCat='".$_GET["codigocategoria"]."' " : ' ' );

require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results    = $paginator->getData($limit, $page);
?>
