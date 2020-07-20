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


<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>:: Hab.System ::</title>
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
                        <a data-toggle="nav-profile">

                            <div class="info">

                                <?php

								if(!$_SESSION['NombreAfil']==""){echo ' '.$_SESSION['NombreAfil'].' <small>Modulo de Administración</small>';}
								
								else{
								header("Location: ../login.php");
							    exit();
								
								}
								
								
								
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
                            <li class="breadcrumb-item"><a href="javascript:;">Inventario</a></li>
                            <li class="breadcrumb-item active">Editar Articulos</li>
                        </ol>
                        <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header">Editar Articulos <small> Modulo de Almacen</small></h1>

                        <?php 
				 
				 $codeProd= $_GET['CodigoProd'];
				 
				 
				 //print_r($codeProd);
				 ?>

                        <div class="panel panel-inverse" style="">
                            <!-- begin panel-heading -->
                            <div class="panel-heading ">

                                <h4 class="panel-title">Formulario de Actualizacíon de Productos<label
                                        style="float:right;">
                                        <div id="res-form-update-inventario" style=""></div>
                                    </label></h4>
                            </div>
                            <!-- begin panel-body -->
                            <div class="panel-body">


                                <div class="col-md-5" style="      margin-left: 10%;  float: left;z"
                                    id="update-inventario">


                                    <form role="form" action="actualizarProd.php" method="post">
                                        <div class="form-group">
                                            <label>Código de Articulo</label>
                                            <input type="hidden" class="form-control" required maxlength="30"
                                                name="code-old-prod" value="<?php echo $codeProd ?>" readonly required>

                                            <input type="text" class="form-control" required maxlength="30"
                                                name="code-prod" value="<?php echo $codeProd ?>" readonly required>


                                        </div>
                                        <?php 
														$consul2=  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoProd` FROM `producto` WHERE (`producto`.`CodigoProd` like '".$codeProd."')");
														while($data=mysqli_fetch_array($consul2)){
															$nombre=$data['NombreProd'];
															$modelo=$data['Modelo'];
															$img=$data['Imagen'];
															$marca=$data['Marca'];
															$peso=$data['Peso'];
															$detalle=$data['Detalle'];
															$DetalleTec=$data['TecDetalle'];
															$compra=$data['Compra'];
															$precio=$data['Precio'];
															$unidades=$data['Stock'];
															$cat=$data['CodigoCat'];
															
															
															//print_r($DetalleTec);
														}
														?>

                                        <?php   

                                            switch ($_SESSION['NombreAfil']) {
                                                case "soluciones":
                                                    $readOnly = "";
                                                    $disabled = "";
                                                    $ocultar = "";
                                                    break;
                                                
                                                default:
                                                    $readOnly = "readonly";
                                                    $disabled = "disabled";
                                                    $ocultar = "color: transparent!important;";
                                                    break;
                                            }


                                        

                                        ?>                 
                                        <div class="form-group">
                                            <label>Nombre de Articulo</label>
                                            <input type="text" class="form-control" value="<?php echo $nombre ?>"
                                                placeholder="Nombre de Articulo" required name="prod-name"
                                                autocomplete="off"  <?php echo $readOnly; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Categoría de Articulo</label>

                                            <?php 
														$categoriac3=  ejecutarSQL::consultar("select * from categoria where CodigoCat='$cat'");
                                                            while($catec3=mysqli_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoCat'];
                                                                $nameCat=$catec3['Nombre'];
                                                               // print_r($nameCat);
                                                            }
                                                            
                                                            echo '<select class="form-control" name="prod-category" '.$disabled.'>';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from categoria");
                                                                while($catec2=mysqli_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoCat']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoCat'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
														?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Precio de Compra</label>
                                                    <input type="number" step="0.01" class="form-control" style="<?php echo $ocultar; ?>"  
                                                        value="<?php echo $compra ?>" placeholder="Precio de Compra"
                                                        required maxlength="20" pattern="[0-9]" name="prod-price-compra"
                                                        autocomplete="off" <?php echo $readOnly; ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Precio de Venta</label>
                                                    <input type="number" step="0.01" class="form-control "
                                                        value="<?php echo $precio ?>" placeholder="Precio de Venta"
                                                        required maxlength="20" pattern="[0-9]" name="prod-price"
                                                        autocomplete="off" <?php echo $readOnly; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock de Articulo</label>
                                            <input type="text" class="form-control" placeholder="Stock de Articulo"
                                                value="<?php echo $unidades ?>" required maxlength="20"
                                                pattern="[0-9]{1,20}" name="prod-stock" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Imagen de Articulo</label>
                                            <input class="input-file" type="file" name="img" id="img" accept="image/*" <?php echo $disabled; ?>>
                                            <p class="help-block"></p>
                                        </div>

                                </div>
                                <div class="col-md-5" style="     margin-right: 6%;   float: right;">
                                    <div class="form-group">
                                        <label>Modelo de Articulo</label>
                                        <input type="text" class="form-control" value="<?php echo $modelo ?>"
                                            placeholder="Modelo de Articulo" required maxlength="30" name="prod-model"
                                            autocomplete="off" <?php echo $readOnly; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label>Marca de Articulo</label>
                                        <input type="text" class="form-control" value="<?php echo $marca ?>"
                                            placeholder="Marca de Articulo" required maxlength="30" name="prod-marca"
                                            autocomplete="off" <?php echo $readOnly; ?>>
                                    </div>


                                    <div class="form-group">
                                        <label>Peso de Articulo</label>
                                        <input type="text" class="form-control" value="<?php echo $peso ?>"
                                            placeholder="Peso de Articulo" required maxlength="30" name="prod-peso"
                                            autocomplete="off" <?php echo $readOnly; ?>>
                                    </div>
                                    <input type="hidden" name="prod-fecha" min="<?php echo date("Y-m-d");?>"
                                        max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" <?php echo $readOnly; ?>>
                                    <div class="form-group">
                                        <label>Detalle de Articulo</label>
                                        <input type=="text" value="<?php echo $detalle ?>" class="form-control"
                                            name="prod-detalle" placeholder="Detalle de Articulo" autocomplete="off" <?php echo $readOnly; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción Técnica</label>
                                        <textarea class="form-control"
                                            name="prod-tecnico" <?php echo $readOnly; ?>><?php echo $DetalleTec ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="img-old-prod" value="<?php echo $img ?>">
                                        <img src="../assets/img-products/<?php echo $img ?>" height="125" width="125">
                                        <img id="imgSalida" height="125" width="125" />
                                    </div>


                                    <input type="hidden" name="prod-alma" value="<?php echo $_SESSION['NombreAfil'];?>">
                                    <input type="hidden" name="prod-fecha" min="<?php echo date("Y-m-d");?>"
                                        max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">

                                </div>


                            </div>
                            <p class="text-center"><button type="submit" class="btn btn-primary button-UPR">Agregar a la
                                    tienda</button></p><br>
                        </div>

                        </form>
                    </div>




                    </form>

            </div>
        </div>


        
        <?php include '../inc/scripts_interno.php' ?>
        <script>
        $(window).load(function() {

            $(function() {
                $('#img').change(function(e) {
                    addImage(e);
                });

                function addImage(e) {
                    var file = e.target.files[0],
                        imageType = /image.*/;

                    if (!file.type.match(imageType))
                        return;

                    var reader = new FileReader();
                    reader.onload = fileOnload;
                    reader.readAsDataURL(file);
                }

                function fileOnload(e) {
                    var result = e.target.result;
                    $('#imgSalida').attr("src", result);
                }
            });
        });
        </script>
</body>

</html>