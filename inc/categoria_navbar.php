

<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<style>

#column-left {
    background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: left;
    position: fixed;
    min-height: 225px;
    margin-bottom: 10px;
    margin-right: 10px;
    overflow: hidden;
    text-align: center;
    width: 200px;
    left: -166px;
    z-index: 99;
}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

header{
    width: 100%;
    height: 50px;
    background: #188fe6;
    position: fixed;
    z-index: 10;
}

.lnr-menu{
    font-size: 30px;
    position: relative;
    top: 10px;
    left: 0px;
    color: white;
    border: 1px solid transparent;
    transition: all 300ms;
    padding: 2px;
    cursor: pointer;
}






/*Menu*/


.menu{
   
    width: 52px;
    height: 90%;
    background: #363636;
    overflow: hidden;
    position: fixed;
    top: 130px;
    transition: all 300ms;
    z-index: 9;
    overflow: auto;
    left: 0px;
}

.menu-show{
    width: 100%;
}

.line{
    margin-top: 0px;
    padding: 10px;
    transition: all 300ms;
    padding-bottom: 4px;
}


.line:hover{
    background: #188fe6; 
    cursor: pointer;
}
.line label{
    color: white;
    font-size: 29px;
    cursor: pointer;
    display: inline-flex;
    top: -1px;
    left: -2px;
}

.line font{
    margin-left: 40px;
    font-size: 18px;
    font-weight: 100;
    cursor: pointer;
}


/*Articulo*/


main{
    position: absolute;
    top: 50px;
    left: 60px;
    padding: 20px;
    transition: all 300ms;
}

.main-move{
    left: 240px;
}

article h1{
    font-size: 40px;
}

article p{
    font-size: 20px;
    margin-top: 20px;
    font-weight: 100;
}

@media only screen and (max-width: 480px){

    .side li {
    background: #084163;
    width: 114%;
    padding: 14px;
    margin-left: -10%;
    list-style-position: inside;
    border-bottom: 1.4px solid #f7f7f7;
}

}




</style>





 <div class="menu hidden-lg">
        <div class="line" style="border: 2px solid #fff; border-radius: 9px;"><label class="lnr lnr-menu"><font style="margin-left: 89px; margin-top: 7px;">CATEGORIAS</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000000';"><img src="assets/img/svg_icons/catego/pantalla.svg" alt="" style="    width: 37px;    height: 43px;"><font>COMPUTO Y INFORMÁTICA</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000001';"><img src="assets/img/svg_icons/catego/networking.svg" alt="" style="    width: 37px;    height: 43px;"><font>REDES Y RADIO ENLACE</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000002';" ><img src="assets/img/svg_icons/catego/cctv.svg" alt="" style="    width: 37px;    height: 43px;"><font>CÁMARAS CCTV-IP</font></label></div>
        <div class="line"><label class="lnr"  onclick="location.href='infoCat.php?CodigoCat=C000003';"><img src="assets/img/svg_icons/catego/fuego.svg" alt="" style="    width: 37px;    height: 43px;"><font>ALARMAS Y DOMOTICA</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000004';"><img src="assets/img/svg_icons/catego/fingerprint.svg" alt="" style="    width: 37px;    height: 43px;"><font>ACCESO Y CONTROL</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000005';"><img src="assets/img/svg_icons/catego/intercomunicadores_off.svg" alt="" style="    width: 37px;    height: 43px;"><font>INTERCOMUNICACION</font></label></div>
        <div class="line"><label class="lnr " onclick="location.href='infoCat.php?CodigoCat=C000006';"><img src="assets/img/svg_icons/catego/intercomunicadores_off.svg" alt="" style="    width: 37px;    height: 43px;"><font>MATERIALES</font></label></div>
                
          </div>



