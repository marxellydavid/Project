<?php
require "fpdf/fpdf.php";

class PDF extends FPDF
{
	function Header()
	{
		$this->Image('images/puma.jpg', 5, 5, 30 );
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(120,10, 'Reporte de Estado de Herramientas',0,0,'C');
		
		$this->Ln(20);
	}//cerrando Header
	
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
	}//cerrando Footer
}

?>