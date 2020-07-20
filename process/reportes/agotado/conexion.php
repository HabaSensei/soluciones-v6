<?php
	
	$mysqli = new mysqli('localhost', 'solucioc_user', 'h3b24p@U', 'solucioc_bd');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
