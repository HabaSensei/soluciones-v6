<html lang="en">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SOLUCIONES CCTV & SISTEMAS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/mq.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="img/icono.png" />

  </head>
<body>
<?php
require("vendor/PHPMailer/class.phpmailer.php");
$name = $_POST['nombre'];
$Ruc_Dni = $_POST['Ruc_Dni'];
$Dir_Fiscal = $_POST['Dir_Fiscal'];
$fecha_Visita = $_POST['fecha_Visita'];
$Dir_Fiscal = $_POST['Dir_Fiscal'];
$Horario_Preferencia = $_POST['Horario_Preferencia'];
$atencion_requerida = $_POST['atencion_requerida'];
$telefono = $_POST['telefono'];	
$email = $_POST['correo'];
$servicio = $_POST['servicio'];
$tipo = $_POST['tipo'];
$subject = "Mensaje enviado por: ".$name." Desde Soluciones";
	
	

$body  = "    <!DOCTYPE html PUBLIC>";
$body .= "    <html'>";
$body .= "    <head>";
$body .= "    <meta content='width=device-width, initial-scale=1' name='viewport'>";
$body .= "    <meta name='x-apple-disable-message-reformatting'>";
$body .= "    <meta http-equiv='X-UA-Compatible' content='IE=edge'>";
$body .= "    <meta content='telephone=no' name='format-detection'>";
$body .= "    <title>Informe</title>";
$body .= "    <link href='https://fonts.googleapis.com/css?family=Noticia+Text:400,400i,700,700i' rel='stylesheet'>";
$body .= "    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i' rel='stylesheet'>";
$body .= "    <style type='text/css'> h1{font-size:32px!important;text-align:center;line-height:120%!important}h2{font-size:26px!important;text-align:center;line-height:120%!important}h3{font-size:20px!important;text-align:center;line-height:120%!important}h1 a{font-size:32px!important}h2 a{font-size:26px!important}h3 a{font-size:20px!important}.es-menu td a{font-size:16px!important}.es-header-body a,.es-header-body ol li,.es-header-body p,.es-header-body ul li{font-size:16px!important}.es-footer-body a,.es-footer-body ol li,.es-footer-body p,.es-footer-body ul li{font-size:16px!important}.es-infoblock a,.es-infoblock ol li,.es-infoblock p,.es-infoblock ul li{font-size:12px!important}[class=gmail-fix]{display:none!important}.es-m-txt-c,.es-m-txt-c h1,.es-m-txt-c h2,.es-m-txt-c h3{text-align:center!important}.es-m-txt-r,.es-m-txt-r h1,.es-m-txt-r h2,.es-m-txt-r h3{text-align:right!important}.es-m-txt-l,.es-m-txt-l h1,.es-m-txt-l h2,.es-m-txt-l h3{text-align:left!important}.es-m-txt-c img,.es-m-txt-l img,.es-m-txt-r img{display:inline!important}.es-button-border{display:inline-block!important}a.es-button{font-size:16px!important;display:inline-block!important;border-width:15px 30px 15px 30px!important}.es-btn-fw{border-width:10px 0!important;text-align:center!important}.es-adaptive table,.es-btn-fw,.es-btn-fw-brdr,.es-left,.es-right{width:100%!important}.es-content,.es-content table,.es-footer,.es-footer table,.es-header,.es-header table{width:100%!important;max-width:600px!important}.es-adapt-td{display:block!important;width:100%!important}.adapt-img{width:100%!important;height:auto!important}.es-m-p0{padding:0!important}.es-m-p0r{padding-right:0!important}.es-m-p0l{padding-left:0!important}.es-m-p0t{padding-top:0!important}.es-m-p0b{padding-bottom:0!important}.es-m-p20b{padding-bottom:20px!important}.es-hidden,.es-mobile-hidden{display:none!important}.es-desk-hidden{display:table-row!important;width:auto!important;overflow:visible!important;float:none!important;max-height:inherit!important;line-height:inherit!important}.es-desk-menu-hidden{display:table-cell!important}.esd-block-html table,table.es-table-not-adapt{width:auto!important}table.es-social{display:inline-block!important}table.es-social td{display:inline-block!important}.ExternalClass{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}.es-button{mso-style-priority:100!important;text-decoration:none!important}a[x-apple-data-detectors]{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}.es-desk-hidden{display:none;float:left;overflow:hidden;width:0;max-height:0;line-height:0;mso-hide:all} </style>";
$body .= "    </head>";
$body .= "    <body style='width:100%!important ;font-family:'noticia text', georgia, 'times new roman', serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;'>";
$body .= "    <div class='es-wrapper-color' style='background-color:#EEEEEE;'>";
$body .= "    <table class='es-wrapper' width='100%!important' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%!important;height:100%!important;background-repeat:repeat;background-position:center top;'>";
$body .= "    <tr style=\'border-collapse:collapse;\'>";
$body .= "    <td valign='top' style='padding:0;Margin:0;'>"; 
$body .= "                       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'>";
$body .= "                           <tr style='border-collapse:collapse;'></tr>";
$body .= "                           <tr style='border-collapse:collapse;'>";
$body .= "                               <td align='center' style='padding:0;Margin:0;'>";
$body .= "                                  <table class='es-header-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;' width='900' cellspacing='0' cellpadding='0' bgcolor='#044767' align='center'>";
$body .= "                                       <tr style='border-collapse:collapse;'>";
$body .= "                                          <td align='left' style='Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px;'>";
$body .= "                                                <table cellpadding='0' cellspacing='0' align='left' class='es-left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;'>";
$body .= "                                                   <tr style='border-collapse:collapse;'>";
$body .= "                                                        <td class='es-m-p0r es-m-p20b' width='405' valign='top' align='center' style='padding:0;Margin:0;'>";
$body .= "                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid transparent;border-bottom:10px solid transparent;' role='presentation'>";
$body .= "                                                              <tr style='border-collapse:collapse;'>";
$body .= "         <td align='left' style='padding:0;Margin:0; position: relative; left:50px'>";
$body .= "         <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:22px!important; line-height:33px;color:#FFFFFF!important;'><strong>SOLUCIONES CCTV Y SISTEMAS S.A.C</strong></p>";
$body .= "       </td>";
$body .= "   </tr>";
$body .= "  </table>";
$body .= " </td>";
$body .= " </tr>";
$body .= " </table>";
$body .= "  <table cellpadding='0' cellspacing='0' class='es-right' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;'>";
$body .= " <tr style='border-collapse:collapse;'>";
$body .= "    <td width='405' align='left' style='padding:0;Margin:0;'>";
$body .= "        <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "         <tr style='border-collapse:collapse;'>";
$body .= "               <td align='center' style='padding:0;Margin:0;'><img class='adapt-img'  src='https://solucionescctvysistemas.com/assets/img/logocorreo.png' alt style='display:block!important;border:0!important;outline:none!important; width:238px!important; height:75px!important' ></td>";
$body .= "      </tr>";
$body .= "   </table>";
$body .= "   </td>";
$body .= "  </tr>";
$body .= "  </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= "      </table>";
$body .= "    </td>";
$body .= "    </tr>";
$body .= "  </table>";
$body .= "  <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'>";
$body .= "    <tr style='border-collapse:collapse;'>";
$body .= "        <td align='center' style='padding:0;Margin:0;'>";
$body .= "     <table class='es-content-body' width='900' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;'>";
$body .= "       <tr style='border-collapse:collapse;'>";
$body .= "            <td align='left' style='padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px;'>";
$body .= "        <table cellspacing='0' cellpadding='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "            <tr style='border-collapse:collapse;'>";
$body .= "           <td width='830' valign='top' align='center' style='padding:0;Margin:0;'>";
$body .= "                 <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "               <tr style='border-collapse:collapse;'>";
$body .= "                  <td align='center' style='Margin:0;padding-top:25px;padding-bottom:25px;padding-left:35px;padding-right:35px;'>";
$body .= "     <a target='_blank' href='https://viewstripo.email/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none; mso-line-height-rule:exactly; font-size:16px;text-decoration:none;color:#ED8E20;'>";
$body .= "      <img src='https://image.flaticon.com/icons/svg/236/236846.svg' width='120!important' alt style=' ' ></a>";
$body .= "   </td>";
$body .= "  </tr>";
$body .= "  <tr style='border-collapse:collapse;'>";
$body .= "    <td align='center' style='padding:0;Margin:0;padding-bottom:10px;'>";
$body .= "           <h2 style='Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#333333;'>".$name."</h2>";
$body .= "     </td>";
$body .= "      </tr>";
$body .= "    </table>";
$body .= "  </td>";
$body .= "   </tr>";
$body .= "  </table>";
$body .= "    </td>";
$body .= "   </tr>";
$body .= "  </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= " </table>";
$body .= " <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'>";
$body .= "   <tr style='border-collapse:collapse;'>";
$body .= "     <td align='center' style='padding:0;Margin:0;'>";
$body .= "      <table class='es-content-body' width='900' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;'>";
$body .= "           <tr style='border-collapse:collapse;'>";
$body .= "  <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:35px;padding-right:35px;'>";
$body .= "    <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "       <tr style='border-collapse:collapse;'>";
$body .= "         <td width='830' valign='top' align='center' style='padding:0;Margin:0;'>";
$body .= "             <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "      <tr style='border-collapse:collapse;'>";
$body .= "          <td bgcolor='#eeeeee' align='left' style='Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;'>";
$body .= "             <table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px;' class='cke_show_border' cellspacing='1' cellpadding='1' border='0' align='left' role='presentation'>";
$body .= "           <tr style='border-collapse:collapse;'>";
$body .= "              <td width='80%' style='padding:0;Margin:0;'>";
$body .= "                <h4 style='Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;'>Datos de Contacto Enviado</h4>";
$body .= "             </td>";
$body .= "    <td width='20%' style='padding:0;Margin:0;'>";
$body .= "       <h4 style='Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;'>&nbsp;</h4>";
$body .= "   </td>";
$body .= "    </tr>";
$body .= "   </table>";
$body .= "  </td>";
$body .= "   </tr>";
$body .= "   </table>";
$body .= "    </td>";
$body .= "     </tr>";
$body .= "    </table>";
$body .= "   </td>";
$body .= "   </tr>";
$body .= "    <tr style='border-collapse:collapse;'>";
$body .= "       <td align='left' style='padding:0;Margin:0;padding-left:35px;padding-right:35px;'>";
$body .= "          <table cellspacing='0' cellpadding='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "      <tr style='border-collapse:collapse;'>";
$body .= "                 <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "          <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "             <tr style='border-collapse:collapse;'>";
$body .= "                <td align='left' style='padding:10px;Margin:0;'>";
$body .= "        <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Ruc o Dni :&nbsp; ".$Ruc_Dni."</strong></p>";
$body .= "    </td>";
$body .= "          </tr>";
$body .= "   </table>";
$body .= "   </td>";
$body .= "   </tr>";
$body .= "      <tr style='border-collapse:collapse;'>";
$body .= "          <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "          <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "         <tr style='border-collapse:collapse;'>";
$body .= "                 <td align='left' style='padding:10px;Margin:0;'>";
$body .= "             <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Numero de Celular :&nbsp; ".$telefono."</strong></p>";
$body .= "          </td>";
$body .= "      </tr>";
$body .= "   </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= "  <tr style='border-collapse:collapse;'>";
$body .= "     <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "        <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "           <tr style='border-collapse:collapse;'>";
$body .= "                <td align='left' style='padding:10px;Margin:0;'>";
$body .= "              <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Correo Electronico :&nbsp; ".$email."</strong></p>";
$body .= "          </td>";
$body .= "       </tr>";
$body .= "    </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= "   <tr style='border-collapse:collapse;'>";
$body .= "   <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "     <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "          <tr style='border-collapse:collapse;'>";
$body .= "            <td align='left' style='padding:10px;Margin:0;'>";
$body .= "              <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Direccion Fiscal :&nbsp;".$Dir_Fiscal."</strong></p>";
$body .= "           </td>";
$body .= "         </tr>";
$body .= "     </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= "   <tr style='border-collapse:collapse;'>";
$body .= "      <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "          <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "              <tr style='border-collapse:collapse;'>";
$body .= "          <td align='left' style='padding:10px;Margin:0;'>";
$body .= "                 <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Servicio Seleccionado :&nbsp;".$servicio."</strong></p>";
$body .= "               </td>";
$body .= "             </tr>";
$body .= "           </table>";
$body .= "        </td>";
$body .= "    </tr>";
$body .= "   <tr style='border-collapse:collapse;'>";
$body .= "   <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "         <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "             <tr style='border-collapse:collapse;'>";
$body .= "             <td align='left' style='padding:10px;Margin:0;'>";
$body .= "                    <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Tipo de Visita  :&nbsp; ".$tipo."</strong></p>";
$body .= "        </td>";
$body .= "      </tr>";
$body .= "   </table>";
$body .= "   </td>";
$body .= "  </tr>";
$body .= "   <tr style='border-collapse:collapse;'>";
$body .= "      <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "         <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "             <tr style='border-collapse:collapse;'>";
$body .= "                <td align='left' style='padding:10px;Margin:0;'>";
$body .= "                    <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Fecha de Visita  :&nbsp;".$fecha_Visita."</strong></p>";
$body .= "     </td>";
$body .= "    </tr>";
$body .= "    </table>";
$body .= "  </td>";
$body .= "   </tr>";
$body .= "  <tr style='border-collapse:collapse;'>";
$body .= "    <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "       <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "         <tr style='border-collapse:collapse;'>";
$body .= "           <td align='left' style='padding:10px;Margin:0;'>";
$body .= "               <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Hora de Visita &nbsp;:&nbsp; ".$Horario_Preferencia." </strong></p>";
$body .= "      </td>";
$body .= "   </tr>";
$body .= "   </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= " <tr style='border-collapse:collapse;'>";
$body .= "   <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "     <tr style='border-collapse:collapse;'>";
$body .= "        <td align='left' style='padding:10px;Margin:0;'>";
$body .= "           <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'noticia text', georgia, 'times new roman', serif;line-height:24px;color:#333333;'><strong>Atencion Requerida :&nbsp;".$atencion_requerida."</strong></p>";
$body .= "         </td>";
$body .= "       </tr>";
$body .= "    </table>";
$body .= "  </td>";
$body .= "    </tr>";
$body .= "    </table>";
$body .= "    </td>";
$body .= "    </tr>";
$body .= "   </table>";
$body .= "  </td>";
$body .= "  </tr>";
$body .= " <tr style='border-collapse:collapse;'>";
$body .= "    <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:35px;padding-right:35px;'>";
$body .= "     <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "          <tr style='border-collapse:collapse;'>";
$body .= "   <td width='830' align='center' valign='top' style='padding:0;Margin:0;'>";
$body .= "      <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>";
$body .= "          <tr style='border-collapse:collapse;'>";
$body .= "               <td align='center' style='padding:0;Margin:0;display:none;'></td>";
$body .= "             </tr>";
$body .= "          </table>";
$body .= "        </td>";
$body .= "      </tr>";
$body .= "     </table>";
$body .= "   </td>";
$body .= "  </tr>";
$body .= "      </table>";
$body .= "   </td>";
$body .= "   </tr>";
$body .= "   </table>";
$body .= "  </td>";
$body .= "   </tr>";
$body .= "   </table>";
$body .= "   </div>";
$body .= "   </body>";
$body .= "   </html>";




$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.solucionescctvysistemas.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = ''; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25; // TCP port to connect to
$mail->Username = "soporte@solucionescctvysistemas.com";  // SMTP username
$mail->Password = "Olartegamboa291989"; // SMTP password

$mail->setFrom($email, $name); // Add set from id
//$mail->FromName = "Nombre de prueba <".$email.">";
$mail->AddAddress("soporte@solucionescctvysistemas.com", "Soporte");
$mail->WordWrap = 400;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send()) {

echo "<script type='text/javascript'>swal({

title: 'Error',

text: 'Lo sentimos, por el momento no hemos logrado enviar tu mensaje, intentalo nuevamente.',

type: 'error',

confirmButtonText: 'Ok',

closeOnConfirm: false

},

function(){

window.location.href='../index.php';

});

</script>";

} else {

echo '<script>
swal("Formulario", "Mensaje enviado exitosamente", "success").then(function() {
    window.location = "index.php";
});
</script>';
}
?>
	</body>
</html>
