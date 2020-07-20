<?php 
		if(!$_SESSION['NombreAfil']==""){ 
			 echo '
			<a href="view_cart.php" class="btn bg-blue-darker btn-lg cart-counter" id="cart-info" title="View Cart" style=" color:white;   margin-top: 12px;  margin-left: 17px;">            
			<span  class="fa  fa-shopping-cart">
							Cotizador Items
							
			<span class="cart-label" id="cart-container">
			';
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				echo 0; 
			}
			echo '
		 </span>
		</a></span>';
	}else if(!$_SESSION['Nick_stock']==""){ echo '
			
			';
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				 
			}
			echo '
		 </span>
		</a></span>';}
		 else if(!$_SESSION['Nick_ve']==""){ echo '
			<a href="view_cart.php" class="btn bg-blue-darker btn-lg cart-counter" id="cart-info" title="View Cart" style=" color:white; float:right;  margin-top: 12px;  margin-right: 25px;">            
			<span  class="fa  fa-shopping-cart">
							Cotizador Items
							
			<span class="cart-label" id="cart-container">
			';
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				echo 0; 
			}
			echo '
		 </span>
		</a></span>';}
		 else if(!$_SESSION['Nick_Caja']==""){ echo '
		
			';
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				 
			}
			echo '
		 </span>
		</a></span>';}
		 else{header("Location: ../index.php");}
		
		
		?>
