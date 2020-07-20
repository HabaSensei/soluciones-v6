<?php
$dbhost = 'localhost';
         $dbuser = 'solucioc_user';
         $dbpass = 'h3b24p@U';
         
         
         
         
         $rec_limit = 24;
         $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost,  $dbuser,  $dbpass));
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         mysqli_select_db($GLOBALS["___mysqli_ston"], 'solucioc_bd');
         
         /* Get total number of records */
         $sql = "SELECT count(CodigoProd) FROM producto where CodigoCat = 'C000001'  ";
         $redes_slide = mysqli_query( $conn ,  $sql);
         //~ WHERE CodigoCat = '$CodProd'
        
         
      
         
         if(! $redes_slide ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         $row = mysqli_fetch_array($redes_slide,  MYSQLI_NUM );
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
         $sql = "SELECT `producto`.*, `perfil`.*, `producto`.`CodigoCat` FROM `producto`, `perfil` WHERE `producto`.`CodigoCat` = 'C000001'".
            "LIMIT $offset, $rec_limit";
            
            $redes_slide = mysqli_query( $conn ,  $sql);
         
         if(! $redes_slide ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
?>
