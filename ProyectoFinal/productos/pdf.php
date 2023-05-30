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

	$this->Cell(25,10,'Nombre',1,0,'C',0);
	$this->Cell(25,10,'Precio',1,0,'C',0);
	$this->Cell(10,10,'Stock',1,0,'C',0);
    $this->Cell(25,10,'Area',1,0,'C',0);
    $this->Cell(25,10,'Marca',1,0,'C',0);
    $this->Cell(25,10,'Vendedor',1,0,'C',0);
    $this->Cell(25,10,'Categoria',1,1,'C',0);

    
  
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
$consulta="SELECT p.idProducto, p.nombre, p.precio, p.stock, p.area, m.nombremarca AS nombreMarca, v.vendedor AS nombreVenta, c.nombre AS nombreCategoria
From Producto p
JOIN Marca m ON p.idMarca = m.idMarca
JOIN Venta v ON p.idVenta = v.idVenta
JOIN Categoria c ON p.idCategoria = c.idCategoria WHERE p.status=1";
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(25,10,$row['nombre'],1,0,'C',0);
	$pdf->Cell(25,10,$row['precio'],1,0,'C',0);
	$pdf->Cell(10,10,$row['stock'],1,0,'C',0);
    $pdf->Cell(25,10,$row['area'],1,0,'C',0);
    $pdf->Cell(25,10,$row['nombreMarca'],1,0,'C',0);
	$pdf->Cell(25,10,$row['nombreVenta'],1,0,'C',0);
	$pdf->Cell(25,10,$row['nombreCategoria'],1,1,'C',0);
} 

$pdf->Output('Prueba.pdf', 'I');
?>