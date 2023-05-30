<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$consulta="Select v.idVenta, v.fecha, v.total, v.unidadesVendidas, v.vendedor, e.nombre AS nombreEmpleado
From Venta v
JOIN Empleado e ON v.idEmpleado = e.idEmpleado WHERE v.status=1";
$datos = $conn->query($consulta);

$excel = new Spreadsheet();
$hojaActiva =  $excel->getActiveSheet();
$hojaActiva->setTitle("Productos");

$hojaActiva->setCellValue('A1', 'Fecha');
$hojaActiva->setCellValue('B1', 'Total');
$hojaActiva->setCellValue('C1', 'Unidades Vendidas');
$hojaActiva->setCellValue('D1', 'Vendedor');
$hojaActiva->setCellValue('E1', 'Empleado');



$Fila = 2;

while($rows = $datos->fetch_assoc())
{
    $hojaActiva->getColumnDimension('A')->setWidth(10);
    $hojaActiva->setCellValue('A'.$Fila, $rows['fecha']);
    $hojaActiva->getColumnDimension('B')->setWidth(10);
    $hojaActiva->setCellValue('B'.$Fila, $rows['total']);
    $hojaActiva->getColumnDimension('C')->setWidth(10);
    $hojaActiva->setCellValue('C'.$Fila, $rows['unidadesVendidas']);
    $hojaActiva->getColumnDimension('D')->setWidth(10);
    $hojaActiva->setCellValue('D'.$Fila, $rows['vendedor']);
    $hojaActiva->getColumnDimension('E')->setWidth(10);
    $hojaActiva->setCellValue('E'.$Fila, $rows['nombreEmpleado']);
    $Fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Venta.xlsx"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;
    ?>