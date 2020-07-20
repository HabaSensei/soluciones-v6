<?php
       ini_set('display_errors', 1);
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        
        
        $nameUs= $_POST['name-us'];
        $telUs= $_POST['tel-us'];
        
	    
      if(consultasSQL::InsertSQL("clientes", "NombreEmpresa, Telefono", "'$nameUs','$telUs'")){
                     
         echo '
         <div class="alert alert-success">
         <strong>Success!</strong> This alert box could indicate a successful or positive action.
       </div>   
                            
                            ';
                   }else{
                      echo '
                      <div class="alert alert-danger">
                      <strong>Success!</strong> This alert box could indicate a successful or positive action.
                    </div>

                           
                           
                           
                           ';
                   }
                   
                
?>

		
		
     
               
