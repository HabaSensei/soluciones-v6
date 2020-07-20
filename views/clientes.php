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
	
	
	<html lang="en"><!--<![endif]--><head>
	<meta charset="utf-8">
	 <title>::  Hab.System ::</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	
	<?php include '../inc/header.php'   ?>
	<body>
	<!-- begin page-cover -->

	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->

<!--
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
-->

	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Panel</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a  data-toggle="nav-profile">
							
							<div class="info">
								
								<?php

								if(!$_SESSION['NombreAfil']==""){echo ' '.$_SESSION['NombreAfil'].' <small>Modulo de Administración</small>';}
								
								
								
								
								
								?>
								
							</div>
						</a>
					</li>
					
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header active">Mapa del Sitio</li>
					
					<?php 
					 $CodArea = $_SESSION['CodigoArea'];
					 switch ($CodArea) {
						 case 1:
							include '../inc/sidebar.php';
						break;
						 
						case 2:
							 
							include '../inc/sidebar_ventas.php';
							 
						 break;
					 }
					 ?>
					
				<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Administracion</a></li>
				<li class="breadcrumb-item active">Buscar Clientes</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Busqueda de Clientes <small> Modulo de Administracion</small></h1>
            
             
       
         
			
	 <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Lista de Clientes</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
<div class="table-responsive">
							 <table id="example2" class="table table-condensed">
            <thead class="bg-blue">
                  <tr >
                   
                    <th>Razon Social </th>
					<th>Direccion Fiscal</th>
                    <th>Ruc / Dni</th>
                    <th>Correo Electronico</th>
                    <th>N-Celular</th>
                    
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			
			$ordenU=  ejecutarSQL::consultar("SELECT * from clientes");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				$cod=$ordenP['ID'];
				$nombre=$ordenP['NombreEmpresa'];
				$correo=$ordenP['Correo'];
				$tel=$ordenP['Telefono'];
				$dir=$ordenP['Direccion'];
				
				
				
				
				
				
					?>
                  <tr>
                     <td><?php echo $nombre ?></td>
					 <td><?php echo $dir ?></td>
                    <td><?php echo $cod ?></td>
                    
                       <td><?php echo $correo ?></td>
                        <td><?php echo $tel ?></td>
                       
                     
                    
                  
                    
                      
                  
                  </tr>
            </form>
            </div>
            
			<?php
           
            $upp=$upp+1;}
            ?> 
            </tbody>
				</table>
					 </div></div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
                    
                    
                    
                    
                    
                    
                    
			

           
            
          
      <?php include '../inc/scripts_interno.php' ?>
     
        
		
</body>

</html>
