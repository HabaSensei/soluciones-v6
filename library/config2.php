<?php
$dbhost = 'localhost';
         $dbuser = 'solucioc_user';
         $dbpass = 'h3b24p@U';
         $CodProd=$_GET['CodigoCat'];
         
         
         
         $rec_limit = 12;
         $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost,  $dbuser,  $dbpass));
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         mysqli_select_db($GLOBALS["___mysqli_ston"], 'solucioc_bd');
         
         /* Get total number of records */
         $sql = "SELECT count(CodigoProd) FROM producto WHERE CodigoCat = '$CodProd' ";
         $retval = mysqli_query( $conn ,  $sql);
         
        
         
         
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         $row = mysqli_fetch_array($retval,  MYSQLI_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} ;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
          
          
          
           
          
         $left_rec = $rec_count - ($page * $rec_limit);
         $otro=($page * $rec_limit);
         $sql = "SELECT `producto`.`CodigoProd`, `producto`.`NombreProd`, `producto`.`Precio`, `producto`.`Marca`, `producto`.`Modelo`, `producto`.`Imagen`, `perfil`.`ganancia`, `producto`.`CodigoCat`, `perfil`.`medio`, `perfil`.`moneda` ". 
            "FROM `producto` , `perfil` "."WHERE `producto`.`CodigoCat` = '$CodProd'".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query( $conn ,  $sql);
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
?>
