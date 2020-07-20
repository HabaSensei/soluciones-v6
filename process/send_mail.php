
<?php
$date = date('d-m-Y H:i:s');
$url_pdf = "../assets/pdf/";
$pdf->Output("../assets/pdf/$cod.pdf","F");	
require("../vendor/PHPMailer/class.phpmailer.php");
		 
		$subject = utf8_decode("Area Ventas Soluciones");
			
			 $message = "************************************************** \r\n" .
					 "Message from you website!  \r\n" .
					 "************************************************** \r\n" .	
				 
			$body = "<html >"; 
			$body = "<header>";
			$body = "<style>.im{color:#7F7F7F;}</style>";
			$body = "</header>";
			$body .= "<body style='color:#4a4a4f;'>"; 
			$body .= "<table align='center' border='0' cellpadding='0' cellspacing='0' width='310' style='border-collapse:collapse;width:310px;margin:0 auto'>"; 
			$body .= "<tbody class='im' ><tr style='page-break-before:always'>"; 
			$body .= "<td align='center'  style=' color: #333; padding:10px 0'>";
			$body .= "<img src='http://www.solucionescctvysistemas.com/assets/img/logo2.png' height='250' width='300'></td></tr>"; 
			$body .= "<tr style='page-break-before:always'>";
			$body .= "<p style='font-family:sans-serif;font-size:18px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>www.solucionescctvysistemas.com</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>ventas@solucionescctvysistemas.com</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>UBICANOS--Lt. 13 - Mz. H - Gp. 15 - St. 1 - Villa el Salvador Lima Peru.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>CONTACTANOS--Informes.968-933-814/Ventas.986-838-333/Soporte.996-727-562.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>CUENTAS BANCARIAS-- BCP: 194-357-125-00-0-31 /BBVA:0011-0323-0200389677 .</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#4a4a4f ;>Atentamente.- Soluciones .Le Enviamos su Cotizacion Solicitado Esperamos su Pronta Repuesta.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#4a4a4f ;>TERMINO DE USO:</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#4a4a4f ;>*Aperturarse ala Tienda *Presentar su Cotizacion en Ventas *Cancelar Importe en Caja *Recoger su Producto en Almacen.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:13px;line-height:20px;font-weight:normal;margin:0 0 24px 0px;text-align:center;color:#4a4a4f; text-align:left;'><br>";
			$body .= "<b>Nº DE COTIZACION: </b> $cod <br><br>";
			$body .= "<b>FECHA DE EMISION: </b> $date<br><br>";
			$body .= "<b>DESCARGAR: </b>SU COTIZACION EN PDF.<br><br>";
		    $body .= "</body>\n"; 
			$body .= "</html>";

		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "mail.solucionescctvysistemas.com";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->SMTPSecure = ''; // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 25; // TCP port to connect to
		$mail->Username = "ventas@solucionescctvysistemas.com";  // SMTP username
		$mail->Password = "Olartegamboa291989"; // SMTP password

		$mail->setFrom("ventas@solucionescctvysistemas.com"); // Add set from id
		//$mail->FromName = "Nombre de prueba <".$email.">";
		$mail->AddAddress($correo);
		$mail->WordWrap = 400;                                 // set word wrap to 50 characters
		$mail->AddAttachment("../assets/pdf/$cod.pdf");         // add attachments
		//$mail->AddAttachment("../assets/pdf/.$cod.'.pdf'");         // add attachments
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
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
		
		unset($_SESSION["products"]);
	    $pdf->Output("../assets/pdf/$cod.pdf","I");
		
		}
?>
