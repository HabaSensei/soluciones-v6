<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php

include '../../../library/configServer.php';
include '../../../library/consulSQL.php';
include '../../../process/securityPanel.php';


?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elysium Market - Shopping Online</title>
    <link rel="shortcut icon" href="../../../images/favicon.png" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link href="../../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/plugins/data/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="../../assets/plugins/dropzone/css/basic.css">
    <link rel="stylesheet" href="../../assets/plugins/dropzone/css/dropzone.css">
    <script src="../../assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../assets/js/admin.js"></script>
</head>

<body>

    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="../../index.php"><img src="../../assets/img/Sintítulo.png"></a>
            </div>
            <!--logo end-->

            <div class="user-nav">
                <ul>

                    <li class="profile-photo">
                        <img src="../../assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <?php include '../../inc/link2afil.php'; ?>

                        <ul class="dropdown-menu animated fadeInDown">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="../../../process/logout.php"><i class="fa fa-power-off"></i> Cerrar Session</a>
                            </li>
                        </ul>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>

        </header>
        <!--sidebar left start-->
        <aside class="sidebar" style="    height: 540px;">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="../../index.php"><i class="fa fa-dashboard"></i><span>Inicio</span></a>
                    </li>

                    <li class="sub-menu">
                        <a href="../../addStock.php"><i class="fa fa-plus-square"></i><span> Añadir
                                Inventario</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="../../actualizarStock.php"><i class="fa fa-refresh"></i><span> Ver Inventario
                            </span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Categorias</span><i
                                class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="../../anadirCat_inv.php"><i class="fa fa-plus-square"></i> Añadir Categoria</a>
                            </li>
                            <li><a href="../../actualizarCat_inv.php"><i class="fa fa-refresh"></i> Actualizar
                                    Categoria</a>
                            </li>

                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="../../reportes/inventario/index.php"><i
                                class="fa fa fa-barcode"></i><span>Reportes</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="../../../process/logout.php"><i class="fa fa-power-off"></i> Cerrar Session</a>
                    </li>
                </ul>
            </div>

        </aside>

        <section class="main-content-wrapper">
            <section id="main-content">

                <?php 
				 
				 $codeProd= $_GET['CodigoProd'];
				 
				 
				 //print_r($codeProd);
				 ?>



                <h2 class="text-primary text-center" style="    padding-bottom: 7px;"><small><i
                            class="fa fa-plus"></i></small>&nbsp;&nbsp;Actualizar Inventario</h2>

                <div class="col-md-5" style="      margin-left: 10%;  float: left;z" id="addproduct">


                    <form id="add-product" role="form" action="actualizarProd.php" method="post">
                        <div class="form-group">
                            <label>Código de inventario</label>
                            <input type="hidden" class="form-control" required maxlength="30" name="code-old-prod"
                                value="<?php echo $codeProd ?>" readonly required>

                            <input type="text" class="form-control" required maxlength="30" name="code-prod"
                                value="<?php echo $codeProd ?>" readonly required>


                        </div>
                        <?php 
														$consul2=  ejecutarSQL::consultar("SELECT `inventario`.*, `inventario`.`CodigoProd` FROM `inventario` WHERE (`inventario`.`CodigoProd` like '".$codeProd."')");
														while($data=mysqli_fetch_array($consul2)){
															$nombre=$data['Nombre'];
															$modelo=$data['Modelo'];
															$sku=$data['Sku'];
															$serial=$data['Serial'];
                              $precio=$data['Precio'];
                              $compra=$data['Compra'];
															$unidades=$data['Stock'];
															$cat=$data['CodigoCat'];
															$fecha=$data['Fecha_ingreso'];
															$alma=$data['NombreAlma'];
															
															
															//print_r($img);
														}
														?>
                        <div class="form-group">
                            <label>Nombre de inventario</label>
                            <input type="text" class="form-control" value="<?php echo $nombre ?>" placeholder="Nombre"
                                required name="prod-name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Categoría</label>

                            <?php 
														$categoriac3=  ejecutarSQL::consultar("select * from catego where CodigoCat='$cat'");
                                                            while($catec3=mysqli_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoCat'];
                                                                $nameCat=$catec3['Nombre'];
                                                               // print_r($nameCat);
                                                            }
                                                            
                                                            echo '<select class="form-control" name="prod-category">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from catego");
                                                                while($catec2=mysqli_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoCat']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoCat'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
														?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="number" step="0.01" class="form-control" value="<?php echo $precio ?>"
                                placeholder="Precio" required maxlength="20" pattern="[0-9]" name="prod-price"
                                autocomplete="off">
                        </div>

                </div>
                <div class="col-md-5" style="     margin-right: 6%;   float: right;">
                    <div class="form-group">
                        <label>Sku</label>
                        <input type="text" class="form-control" value="<?php echo $sku ?>" placeholder="Sku" required
                            maxlength="30" name="prod-sku" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="text" class="form-control" value="<?php echo $serial ?>" placeholder="Serial"
                            required maxlength="30" name="prod-serial" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" class="form-control" value="<?php echo $modelo ?>" placeholder="Modelo"
                            required maxlength="30" name="prod-model" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Unidades disponibles</label>
                        <input type="text" class="form-control" value="<?php echo $unidades ?>" placeholder="Unidades"
                            required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock" autocomplete="off">
                    </div>
                    <input type="hidden" name="prod-alma" value="<?php echo $_SESSION['Nick_stock'];?>">
                    <input type="hidden" name="prod-fecha" min="<?php echo date("Y-m-d");?>"
                        max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">

                </div>
                <div class="col-md-9" style="margin-left:10%;     width: 909px;">


                </div>


                <div class="col-md-9" style="margin-left:10%;       display: inline-flex;  ">

                    <div class="col-md-6">

                        <label style="margin-top: 15px; padding-left: 14px;">
                            <!--<input type="checkbox" id="cbox1" value="first_checkbox"> Producto en oferta</label> -->
                            <!-- <input type="text" id="prod-oferta"> %  -->
                    </div>
                </div>



                </div>

                </div>


                </div>


            </section><br><br>
            <p class="text-center"><button type="submit" class="btn btn-primary button-UPR">Agregar a la tienda</button>
            </p><br>
            </form>
        </section>
        </form>
















        <!--Global JS-->
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/js/application.js"></script>
        <!--Page Level JS-->
        <script src="../../assets/plugins/countTo/jquery.countTo.js"></script>
        <script src="../../assets/plugins/data/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../assets/plugins/data/datatables.net-bs/js/dataTables.bootstrap.js" type="text/javascript">
        </script>
        <!--Load these page level functions-->




</body>

</html>