<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<?php
	if(!$_SESSION['NombreAfil']==""){
	echo '  ';
	}else if(!$_SESSION['nombreUser']==""){
	header("Location: cctv-sys/login.php");
	exit();
	}else{
	header("Location: cctv-sys/login.php");
	exit();
	}
 ?>
