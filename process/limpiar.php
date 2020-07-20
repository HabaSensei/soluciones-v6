<?php
session_start(); 
session_unset($_SESSION["products"]);
header("Location: ../view_cart.php"); 
?> 
