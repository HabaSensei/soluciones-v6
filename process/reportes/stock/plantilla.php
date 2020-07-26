<?php
	
	require 'fpdf/fpdf.php';
	require 'conexion.php';
	
	
	
	class PDF extends FPDF
	{
		function Header()
		{
			
			$this->Image('images/logo.png', 10, 10, 20 );
			$this->SetFont('Arial','B',14);
			$this->Cell(30);
			$this->Cell(120,10, 'REPORTE TOTAL DE PRODUCTOS EN STOCK',0,0,'C');
			$this->Ln(10);
			$this->Cell(180,10, 'SOLUCIONES CCTV & SISTEMAS',0,0,'C');
			$this->SetFont('Arial','B',12);
			$this->Cell(0,10,date('d/m/Y'),0,1,'R');
			$this->Ln(10);
			
			
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Paginas '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>
