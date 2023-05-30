<?php
require('../pages/pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
   $this->Cell(70,10,'Reporte de Marcas ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

	$this->Cell(25,10,'Marca',1,0,'C',0);
	$this->Cell(25,10,'Pais',1,0,'C',0);
	$this->Cell(10,10,'Pop',1,0,'C',0);
    $this->Cell(25,10,'Entrega',1,1,'C',0);

    
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("../pages/cn.php");
$consulta="Select * from marca WHERE statusmarca = 1";
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(25,10,$row['nombremarca'],1,0,'C',0);
	$pdf->Cell(25,10,$row['pais'],1,0,'C',0);
	$pdf->Cell(10,10,$row['popularidad'],1,0,'C',0);
    $pdf->Cell(25,10,$row['periodoEntrega'],1,1,'C',0);
} 

$pdf->Output('Marca.pdf', 'I');
?>