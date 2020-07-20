<?php
$ruc = $_POST['ruc'];
$data = file_get_contents("https://api.sunat.cloud/ruc/".$ruc);
$info = json_decode($data, true);

if($data==='[]' || $info['fecha_inscripcion']==='--'){
	$datos = array(0 => 'nada');
	echo json_encode($datos);
}else{
$datos = array(
	0 => $info['razon_social'],
	1 => $info['domicilio_fiscal'],
	
);
	echo json_encode($datos);
}
?>
