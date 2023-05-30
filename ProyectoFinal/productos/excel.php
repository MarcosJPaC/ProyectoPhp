<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$consulta="SELECT p.idProducto, p.nombre, p.precio, p.stock, p.area, m.nombremarca AS nombreMarca, v.vendedor AS nombreVenta, c.nombre AS nombreCategoria
From Producto p
JOIN Marca m ON p.idMarca = m.idMarca
JOIN Venta v ON p.idVenta = v.idVenta
JOIN Categoria c ON p.idCategoria = c.idCategoria WHERE p.status=1";
$datos = $conn->query($consulta);

$excel = new Spreadsheet();
$hojaActiva =  $excel->getActiveSheet();
$hojaActiva->setTitle("Productos");

$hojaActiva->setCellValue('A1', 'Nombre');
$hojaActiva->setCellValue('B1', 'Precio');
$hojaActiva->setCellValue('C1', 'Stock');
$hojaActiva->setCellValue('D1', 'Area');
$hojaActiva->setCellValue('E1', 'Marca');
$hojaActiva->setCellValue('F1', 'Vendedor');
$hojaActiva->setCellValue('G1', 'Categoria');


$Fila = 2;

while($rows = $datos->fetch_assoc())
{
    $hojaActiva->getColumnDimension('A')->setWidth(10);
    $hojaActiva->setCellValue('A'.$Fila, $rows['nombre']);
    $hojaActiva->getColumnDimension('B')->setWidth(10);
    $hojaActiva->setCellValue('B'.$Fila, $rows['precio']);
    $hojaActiva->getColumnDimension('C')->setWidth(10);
    $hojaActiva->setCellValue('C'.$Fila, $rows['stock']);
    $hojaActiva->getColumnDimension('D')->setWidth(10);
    $hojaActiva->setCellValue('D'.$Fila, $rows['area']);
    $hojaActiva->getColumnDimension('E')->setWidth(10);
    $hojaActiva->setCellValue('E'.$Fila, $rows['nombreMarca']);
    $hojaActiva->getColumnDimension('F')->setWidth(10);
    $hojaActiva->setCellValue('F'.$Fila, $rows['nombreVenta']);
    $hojaActiva->getColumnDimension('G')->setWidth(10);
    $hojaActiva->setCellValue('G'.$Fila, $rows['nombreCategoria']);
    $Fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Productos.xlsx"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;
    ?>