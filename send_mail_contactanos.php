<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: Soluciones CCTV & Sistemas S.A.C ::</title>

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
$email = $_POST['correo'];
$telefono = $_POST['telefono'];	
$mensaje = $_POST['mensaje'];

$subject = utf8_decode("Area Informes Soluciones");
	
	 $message = "************************************************** \r\n" .
  	         "Message from you website!  \r\n" .
             "************************************************** \r\n" .
             	
		 "Name: " . $name . "\r\n" .
  	     "E-mail: " . $email . "\r\n" .
		 "Telefono: " . $telefono . "\r\n" .
  	     "Message: " . $mensaje . "\r\n";
	$body = "<html>\n"; 
    $body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n"; 
    
    $body .= "<p><n>Nombre: </n>".$name."</p>"; 
    $body .= "<p><n>Email: </n>".$email."</p>";
	$body .= "<p><n>Telefono: </n> ".$telefono."</p>";
	$body .= "<p><n>Mensaje: </n>".$mensaje."</p>";
    $body .= "</body>\n"; 
    $body .= "</html>";

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.solucionescctvysistemas.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = ''; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25; // TCP port to connect to
$mail->Username = "informes@solucionescctvysistemas.com";  // SMTP username
$mail->Password = "Olartegamboa291989"; // SMTP password

$mail->setFrom($email, $name); // Add set from id
//$mail->FromName = "Nombre de prueba <".$email.">";
$mail->AddAddress("informes@solucionescctvysistemas.com", "Informes");
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
