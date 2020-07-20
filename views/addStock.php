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
				 
				  <h2 class="text-primary text-center" style="    padding-bottom: 7px;"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar Inventario</h2>
                            
		 <div class="col-md-5" style="      margin-left: 10%;  float: left;" >
                                    
                                    
                                    <?php  
                                    $codi=  ejecutarSQL::consultar("SELECT `inventario`.`CodigoProd` from inventario WHERE CodigoProd = (SELECT MAX(CodigoProd) from inventario)");
                                    while($codigo=mysqli_fetch_array($codi)){ 
									$codig=$codigo['CodigoProd'];
									
									}
                                    
                                    //print_r($codig);
                                    ?>
                                    
                                    <?php 
								$cod=ejecutarSQL::consultar("SELECT RIGHT(CodigoProd,6) as CodigoProd FROM inventario WHERE `inventario`.`CodigoProd` = '".$codig."';");
								$verificaltotal = mysqli_num_rows($cod);
													 if($verificaltotal<=0){
														 $codigo1="I000000";
														 }else {
								while($codigo=mysqli_fetch_array($cod)){
								$codigo=$codigo['CodigoProd']+1;
								$repo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
								$codigo1 = "I$repo";
							//print_r($codigo1);
								}
							}
								?>
                                    <form id="add-product" role="form" action="process/inventario/regInventario.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Código de inventario</label>
                               
                                
								<input type="text" class="form-control" required maxlength="30" name="prod-codigo" value="<?php echo $codigo1 ?>" required readonly>
							 
                              </div>
                             
                              <div class="form-group">
                                <label>Nombre de inventario</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="30" name="prod-name" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="prod-categoria">
                                   <?php 
                                        $categoriac=  ejecutarSQL::consultar("select * from macro_categoria ");
                                        while($catec=mysqli_fetch_array($categoriac)){
										
                                            echo '<option value="'.$catec['CodigoSubCat'].'">'.$catec['NombreCat'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="number" step="0.01" class="form-control"  placeholder="Precio" required maxlength="20" pattern="[0-9]" style="width:100%;"  name="prod-price" autocomplete="off">
                              </div>
                              <div class="form-group" style="margin-top: 6%;">
                                <label>Imagen de producto</label>
                               <input class="input-file" type="file" name="img">
                               <p class="help-block"></p>
                              </div>
                              
          </div>
           <div class="col-md-5" style="     margin-right: 6%;   float: right;" >
                              <div class="form-group">
                                <label>Sku</label>
                                <input type="text" class="form-control"  placeholder="Sku" required maxlength="30" name="prod-sku" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Serial</label>
                                <input type="text" class="form-control"  placeholder="Serial" required maxlength="30" name="prod-serial" autocomplete="off">
                              </div>
                             <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30"  name="prod-model" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control"  placeholder="Marca" required maxlength="30"  name="prod-marca" autocomplete="off">
                              </div>
                             <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock" autocomplete="off">
                              </div>
                               
                             <input type="hidden" name="prod-tecnico" value="<?php echo $_SESSION['Nick_stock'];?>">
                              <input type="hidden" name="prod-fecha" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                             
            </div>  
							
							<div class="col-md-9" style="margin-left:10%;     width: 909px;"> 
				   
           
                              </div>
                          
                              
            <div class="col-md-9" style="margin-left:10%;       display: inline-flex;  ">              
                             
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
            
                   
			
            
     <?php include 'inc/footer.php'; ?>
           
</body>

</html>
