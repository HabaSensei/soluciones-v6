<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php

include '../library/configServer.php';
include '../library/consulSQL.php';
include '../process/securityPanel.php';

?>
<!DOCTYPE html>

<html >

<head>
	<?php include 'inc/link.php'; ?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	
   </head>

<body>
	
    <section id="container">
        <header id="header">
           <?php include 'inc/header.php'; ?>
        </header>
        <!--sidebar left start-->
        <?php 
         if(!$_SESSION['Nick_stock']==""){ 
			 
			 include 'inc/aside_user.php';
			 
			 
			 }else if(!$_SESSION['NombreAfil']==""){ 
			 
			 include 'inc/aside.php';
			 
			 
			 }else if(!$_SESSION['Nick_ve']==""){ 
			
			 include 'inc/aside_vend.php'; 
				 
			 }
         
         
         ?>
        
        <section class="main-content-wrapper" >
            <section id="main-content">
				 
				  <h2 class="text-primary text-center" style="    padding-bottom: 7px;"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            
		 <div class="col-md-5" style="      margin-left: 10%;  float: left;" >
                                    
                                    
                                    <?php  
                                    $codi=  ejecutarSQL::consultar("SELECT `producto`.`CodigoProd` from producto WHERE CodigoProd = (SELECT MAX(CodigoProd) from producto)");
                                    while($codigo=mysqli_fetch_array($codi)){ 
									$codig=$codigo['CodigoProd'];
									
									}
                                    
                                    //print_r($codig);
                                    ?>
                                    
                                    <?php 
								$cod=ejecutarSQL::consultar("SELECT RIGHT(CodigoProd,6) as CodigoProd FROM producto WHERE `producto`.`CodigoProd` = '".$codig."';");
								while($codigo=mysqli_fetch_array($cod)){
								$codigo=$codigo['CodigoProd']+1;
								$repo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
								$codigo1 = "P$repo";
							//print_r($codigo1);
								}
								
								?>
                                    <form id="add-product" role="form" action="process/producto/regproduct.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Código de producto</label>
                               
                                
								<input type="text" class="form-control" required maxlength="30" name="prod-codigo" value="<?php echo $codigo1 ?>" readonly required>
							 
                              </div>
                             
                              <div class="form-group">
                                <label>Nombre de producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="40" name="prod-name" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="prod-categoria">
                                   <?php 
                                        $categoriac=  ejecutarSQL::consultar("select * from categoria ");
                                        while($catec=mysqli_fetch_array($categoriac)){
										$CodSubCat=$catec['PrefSubCat'];
										$prefCat=$catec['PrefCat'];	
                                            echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="number" step="0.01" class="form-control"  placeholder="Precio" required maxlength="20" pattern="[0-9]" name="prod-price" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Moneda</label>
                                <select class="form-control" name="prod-simbolo">
                                   <option value="S /">Sol - S /</option>
                                   <option value="$">Dolar - $</option>
                                </select>
                              </div>
          </div>
           <div class="col-md-5" style="     margin-right: 6%;   float: right;" >
                              <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30" name="prod-model" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control"  placeholder="Marca" required maxlength="30" name="prod-marca" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Peso</label>
                                <input type="text" class="form-control"  placeholder="Peso" required maxlength="30" name="prod-peso" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Detalle</label>
                                <textarea  class="form-control" name="prod-detalle" placeholder="Detalle del producto" autocomplete="off"></textarea> 
                              </div>
                             
                              
            </div>  
               <div class="col-md-9" style="margin-left:10%;     width: 909px;"> 
				   
            <div class="form-group">
                                <label>Descripción Técnica</label>
                                <textarea style="    word-break: break-all;" class="form-control" name="prod-tecnico" placeholder="Descripción técnica del producto...." autocomplete="off"></textarea> 
                              </div>
                              </div>
                          
                              
            <div class="col-md-9" style="margin-left:10%;       display: inline-flex;  ">              
                              <div >
                                <label>Imagen de producto</label>
                               <input class="input-file" type="file" name="img">
                               <p class="help-block"></p>
                              </div>
                       <div class="col-md-6">
                       
							<label style="margin-top: 15px; padding-left: 14px;"><!--<input type="checkbox" id="cbox1" value="first_checkbox"> Producto en oferta</label> -->
							<!-- <input type="text" id="prod-oferta"> %  -->
                       </div>       
           </div>                   
                              
                             
                             
                        </div>
                    
                    </div>
                    
                    
                    </div>
				 
				  
				  </section><br><br>
				  <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p><br>
                            </form>
				 </section>
            
                   
			
            
    <!--Global JS-->
    
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/application.js"></script>
    
    <!--Page Level JS-->
    
    <!--Load these page level functions-->
    
           




 

