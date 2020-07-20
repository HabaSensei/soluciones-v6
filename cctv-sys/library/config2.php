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
$query = "SELECT `producto`.*, `afiliado`.`CodAfil` as shopping, `afiliado`.`NombreAfil`, `categoria`.`CodigoCat` as categoria, `categoria`.`Nombre`, `producto`.`Stock` FROM `categoria` 
LEFT JOIN `producto` ON `producto`.`CodigoCat` = `categoria`.`CodigoCat` 
LEFT JOIN `afiliado` ON `afiliado`.`PrefCat` = `categoria`.`PrefCat` WHERE (`producto`.`Stock` >0)
".((isset($_GET["shopping"]) && !empty($_GET["shopping"]))? " AND afiliado.CodAfil='".$_GET["shopping"]."' " : ' ' );

require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results    = $paginator->getData($limit, $page);

?>
