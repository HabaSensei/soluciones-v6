<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT `producto`.*, `producto`.`Stock`
	FROM `producto`
	WHERE `producto`.`Stock` = '0' ORDER BY `Stock` ASC";
	$resultado = $mysqli->query($query);
	
	//$row_cnt = mysqli_num_rows($query);
	//Result set has %d rows.\n", $row_cnt
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(5,6,'N',1,0,'C',1);
	$pdf->Cell(15,6,'CodigoP',1,0,'C',1);
	$pdf->Cell(57,6,'Articulo',1,0,'C',1);
	$pdf->Cell(35,6,'Modelo',1,0,'C',1);
	$pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(15,6,'P_compra',1,0,'C',1);
	$pdf->Cell(15,6,'P_venta',1,0,'C',1);
	$pdf->Cell(20,6,'Stock',1,1,'C',1);
	
	
	
	
	
	$pdf->SetFont('Arial','',8);
	
	 $i = 0;
	
	while($row = $resultado->fetch_array())
	{
		 $i = $i + 1;
		$pdf->Cell(5,6,$i,1,0,'C',1);
		$pdf->Cell(15,6,utf8_decode($row['CodigoProd']),1,0,'C');
		$pdf->Cell(57,6,$row['NombreProd'],1,0,'L');
		$pdf->Cell(35,6,$row['Modelo'],1,0,'L');
		$pdf->Cell(30,6,$row['Marca'],1,0,'L');
		$pdf->Cell(15,6,utf8_decode($row['Compra']),1,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['Precio']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['Stock']),1,1,'C');
		
		
		
	}
	$total= $i++;
	$pdf->SetFont('Arial','B',14);
	   $pdf->Ln(10);
	   $pdf->Cell(190,6,'Total de Productos Agotados = '.$total.'',1,0,'C',1);
	
	    
	
	   
	
	
	
	$pdf->Output();
?>
