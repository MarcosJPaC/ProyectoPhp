<?php
require('../pages/cn.php');

$consulta = "Select * from empleado WHERE status = 1";
$resultado = $conn->query($consulta);

$xml = new XMLWriter();
$xml->openURI('Empleado.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

$xml->startElement('tabla');

while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('Nombre', $row['nombre']);
    $xml->writeElement('Edad', $row['edad']);
    $xml->writeElement('FechaI', $row['fechaIngreso']);
    $xml->writeElement('Puesto', $row['puesto']);
   


    $xml->endElement(); 
}

$xml->endElement();
$xml->endDocument();
$xml->flush();

$conn->close();

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Empleado.xml"');
header('Content-Length: ' . filesize('Empleado.xml'));

readfile('Empleado.xml');
exit();
?>
