<?php
session_start();
error_reporting(E_PARSE);
if (!$_SESSION['NombreAfil'] == "") { } else if (!$_SESSION['Nick_ve'] == "") { } else if (!$_SESSION['Nick_stock'] == "") { } else if (!$_SESSION['Nick_Caja'] == "") { } else {
	header("Location: index.php");
	exit();
}