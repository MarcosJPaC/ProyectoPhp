<?php
require('../pages/cn.php');

$consulta = "Select v.idVenta, v.fecha, v.total, v.unidadesVendidas, v.vendedor, e.nombre AS nombreEmpleado
From Venta v
JOIN Empleado e ON v.idEmpleado = e.idEmpleado WHERE v.status=1";
$resultado = $conn->query($consulta);

$xml = new XMLWriter();
$xml->openURI('Venta.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

$xml->startElement('tabla');

while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('Fecha', $row['fecha']);
    $xml->writeElement('Total', $row['total']);
    $xml->writeElement('UnidadesV', $row['unidadesVendidas']);
    $xml->writeElement('Vendedor', $row['vendedor']);
    $xml->writeElement('nombreEmpleado', $row['nombreEmpleado']);


    $xml->endElement(); 
}

$xml->endElement();
$xml->endDocument();
$xml->flush();

$conn->close();

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Venta.xml"');
header('Content-Length: ' . filesize('Venta.xml'));

readfile('Venta.xml');
exit();
?>
