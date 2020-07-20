<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    include '../library/configServer.php';
    include '../library/consulSQL.php';
    sleep(2);
    $nombre=$_POST['nombre-login'];
    $clave=md5($_POST['clave-login']);
    $radio=$_POST['optionsRadios'];
     
    if(!$nombre==""&&!$clave==""){
        //~ $verUser=ejecutarSQL::consultar("select * from almaceneros where Nick_stock='$nombre' and Clave='$clave'");
        //~ $verVend=ejecutarSQL::consultar("select * from vendedores where Nick_ve='$nombre' and Clave='$clave'");
        
        $verAfil=ejecutarSQL::consultar("SELECT `afiliado`.*, `afiliado`.`NombreAfil`, `afiliado`.`Clave`, `afiliado`.`CodigoArea`
        FROM `afiliado`
        WHERE `afiliado`.`NombreAfil` = '$nombre' AND `afiliado`.`Clave` = '$clave';");
        //~ $verCaja=ejecutarSQL::consultar("select * from caja where Nick_caja='$nombre' and Clave='$clave'");
        if($radio=="option2"){
            $AfilC=mysqli_num_rows($verAfil);
            if($AfilC>0){
                while ($h=mysqli_fetch_array($verAfil)) {
                    $cod_area=$h['CodigoArea'];
                }
                $_SESSION['NombreAfil']=$nombre;
                $_SESSION['Clave']=$clave;
                $_SESSION['CodigoArea']=$cod_area;

                
                
                echo '<script> location.href="../views/index.php"; </script>';
            }else{
              echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Afiliado Incorrecto </div> </div>'; 
            }
        }
        //~ if($radio=="option1"){
			//~ $UserC=mysqli_num_rows($verUser);
            //~ if($UserC>0){
                //~ $_SESSION['Nick_stock']=$nombre;
                //~ $_SESSION['Clave']=$clave;
               //~ echo '<script> location.href="../afiliado/index.php"; </script>';
            //~ }else{
                //~ echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto</div> </div>';
            //~ }
        //~ }
	//~ if($radio=="option3"){
			//~ $VendC=mysqli_num_rows($verVend);
            //~ if($VendC>0){
                //~ $_SESSION['Nick_ve']=$nombre;
                //~ $_SESSION['Clave']=$clave;
               //~ echo '<script> location.href="../afiliado/index.php"; </script>';
            //~ }else{
                //~ echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto</div> </div>';
            //~ }
        //~ }
        //~ if($radio=="option4"){
			//~ $CajaC=mysqli_num_rows($verCaja);
            //~ if($CajaC>0){
                //~ $_SESSION['Nick_Caja']=$nombre;
                //~ $_SESSION['Clave']=$clave;
               //~ echo '<script> location.href="../afiliado/index.php"; </script>';
            //~ }else{
                //~ echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto</div> </div>';
            //~ }
        //~ }
    //~ 
    }
    else{
        echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Campos Vacios</div> </div>';
    }
	
