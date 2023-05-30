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
   $this->Cell(70,10,'Reporte de Productos ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

	$this->Cell(25,10,'Fecha',1,0,'C',0);
	$this->Cell(25,10,'Total',1,0,'C',0);
	$this->Cell(10,10,'U. Vendidas',1,0,'C',0);
    $this->Cell(25,10,'Vendedor',1,0,'C',0);
    $this->Cell(25,10,'Empleado',1,1,'C',0);
    

    
  
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
$consulta="Select v.idVenta, v.fecha, v.total, v.unidadesVendidas, v.vendedor, e.nombre AS nombreEmpleado
From Venta v
JOIN Empleado e ON v.idEmpleado = e.idEmpleado WHERE v.status=1";
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(25,10,$row['fecha'],1,0,'C',0);
	$pdf->Cell(25,10,$row['total'],1,0,'C',0);
	$pdf->Cell(10,10,$row['unidadesVendidas'],1,0,'C',0);
    $pdf->Cell(25,10,$row['vendedor'],1,0,'C',0);
    $pdf->Cell(25,10,$row['nombreEmpleado'],1,1,'C',0);
	
} 

$pdf->Output('Venta.pdf', 'I');
?>