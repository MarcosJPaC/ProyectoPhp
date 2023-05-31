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
   $this->Cell(70,10,'Reporte de Producto ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

	$this->Cell(25,10,'Nombre',1,0,'C',0);
	$this->Cell(25,10,'Precio',1,0,'C',0);
	$this->Cell(40,10,'Stock',1,0,'C',0);
    $this->Cell(25,10,'Area',1,1,'C',0);

    
  
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
$consulta="SELECT *
FROM vista_producto_mas_caro
";
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(25,10,$row['nombre'],1,0,'C',0);
	$pdf->Cell(25,10,$row['precio'],1,0,'C',0);
	$pdf->Cell(40,10,$row['stock'],1,0,'C',0);
    $pdf->Cell(25,10,$row['area'],1,1,'C',0);
} 

$pdf->Output('ProductoMA.pdf', 'I');
?>