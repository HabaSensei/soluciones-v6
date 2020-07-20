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
                <a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Panel</b> Admin</a>
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
                            <li class="breadcrumb-item active">Añadir Articulos</li>
                        </ol>
                        <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header">Añadir Articulos <small> Modulo de Almacen</small></h1>



                        <!--
contenido             
-->



                        <!-- begin panel -->
                        <div class="panel panel-inverse" style="">
                            <!-- begin panel-heading -->
                            <div class="panel-heading ">

                                <h4 class="panel-title">Formulario de registro de articulos <label style="float:right;">
                                        <div id="res-form-add-inventario" style=""></div>
                                    </label></h4>
                            </div>

                            <!-- begin panel-body -->
                            <div class="panel-body" id="add-inventario">
                                <div class="col-md-5" style="      margin-left: 10%;  float: left;">
                                    <?php  
                                    $codi=  ejecutarSQL::consultar("SELECT `producto`.`CodigoProd` from producto WHERE CodigoProd = (SELECT MAX(CodigoProd) from producto)");
                                    while($codigo=mysqli_fetch_array($codi)){ 
									$codig=$codigo['CodigoProd'];
									
									}
                                    
                                    //print_r($codig);
                                    ?>

                                    <?php 
								$cod=ejecutarSQL::consultar("SELECT RIGHT(CodigoProd,6) as CodigoProd FROM producto WHERE `producto`.`CodigoProd` = '".$codig."';");
								$verificaltotal = mysqli_num_rows($cod);
													 if($verificaltotal<=0){
														 $codigo1="P000000";
														 }else {
								while($codigo=mysqli_fetch_array($cod)){
								$codigo=$codigo['CodigoProd']+1;
								$repo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
								$codigo1 = "P$repo";
							//print_r($codigo1);
								}
							}
								?>
                                    <form role="form" action="../process/producto/regproduct.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Código de Articulo</label>


                                            <input type="text" class="form-control" required maxlength="30"
                                                name="prod-codigo" value="<?php echo $codigo1 ?>" required readonly>

                                        </div>

                                        <div class="form-group">
                                            <label>Nombre de Articulo</label>
                                            <input type="text" class="form-control" placeholder="Nombre de Articulo"
                                                required maxlength="30" name="prod-name" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Categoría de Articulo</label>
                                            <select class="form-control" name="prod-categoria">
                                                <?php 
                                        $categoriac=  ejecutarSQL::consultar("select * from categoria ");
                                        while($catec=mysqli_fetch_array($categoriac)){
										
                                            echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                        }
                                    ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Precio de Compra</label>
                                                    <input type="number" step="0.01" class="form-control"
                                                        placeholder="Precio de Compra" required maxlength="20"
                                                        pattern="[0-9]" style="width:100%;" name="prod-price-compra"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Precio de Venta</label>
                                                    <input type="number" step="0.01" class="form-control"
                                                        placeholder="Precio de Venta" required maxlength="20"
                                                        pattern="[0-9]" style="width:100%;" name="prod-price"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock de Articulo</label>
                                            <input type="text" class="form-control" placeholder="Stock de Articulo"
                                                required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock"
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group" style="margin-top: 6%;">
                                            <label>Imagen de Articulo</label>
                                            <input class="input-file" type="file" name="img">
                                            <p class="help-block"></p>
                                        </div>

                                </div>
                                <div class="col-md-5" style="     margin-right: 6%;   float: right;">

                                    <div class="form-group">
                                        <label>Modelo de Articulo</label>
                                        <input type="text" class="form-control" placeholder="Modelo de Articulo"
                                            required maxlength="30" name="prod-model" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Marca de Articulo</label>
                                        <input type="text" class="form-control" placeholder="Marca de Articulo" required
                                            maxlength="30" name="prod-marca" autocomplete="off">
                                    </div>


                                    <div class="form-group">
                                        <label>Peso de Articulo</label>
                                        <input type="text" class="form-control" placeholder="Peso de Articulo" required
                                            maxlength="30" name="prod-peso" autocomplete="off">
                                    </div>




                                    <input type="hidden" name="prod-fecha" min="<?php echo date("Y-m-d");?>"
                                        max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                    <div class="form-group">
                                        <label>Detalle de Articulo</label>
                                        <input type="text" class="form-control" name="prod-detalle"
                                            placeholder="Detalle de Articulo" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción de Articulo</label>
                                        <textarea style="    word-break: break-all;" class="form-control"
                                            name="prod-tecnico" placeholder="Descripción de Articulo"
                                            autocomplete="off"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-9" style="margin-left:10%;     width: 909px;">


                                </div>



                            </div>
                            <p class="text-center"><button type="submit" class="btn btn-primary">Agregar al
                                    Inventario</button></p> <br>



                        </div>

                    </div>


            </div>
            </form>











        </div>









    </div>
    </div>



    <!--
     fin contenido       
-->








    <?php include '../inc/scripts_interno.php' ?>

    <script>
    function crearDin() {

        var codigo = $("#prod-codigo").val();
        var total = 0;
        var coleccion = document.getElementsByName("prod-codigo");

        for (i = 0; elem = coleccion[]; i++) {

            total += (parseInt(elem[i].value));

        }


        var padre = document.getElementById("padre");

        var div1 = document.createElement("DIV");
        div1.className = 'col-md-12';

        var div2 = document.createElement("DIV");
        div2.className = 'form-group col-md-4';

        var label = document.createElement("LABEL");
        label.style = "color:black;";
        label.innerHTML = "Codigo Serializado";

        var input = document.createElement("input");
        input.type = "text";
        input.style = "color:white;";
        input.className = "form-control";
        input.name = "prod-codigo";
        input.value = total;
        input.readOnly = true;
        input.required = true;



        div1.appendChild(div2);
        div2.appendChild(label);
        div2.appendChild(input);


        padre.appendChild(div1);



    }
    $(window).on("load", function(e) {

        var btnAdd = document.getElementById("btn_agregar");
        btnAdd.onclick = crearDin;
    })
    </script>
</body>

</html>