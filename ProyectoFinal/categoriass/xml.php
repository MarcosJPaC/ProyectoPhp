<?php
require('../pages/cn.php');

$consulta = "Select * from categoria WHERE status = 1";
$resultado = $conn->query($consulta);

$xml = new XMLWriter();
$xml->openURI('Categoria.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

$xml->startElement('tabla');

while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('Nombre', $row['nombre']);
    $xml->writeElement('Descripcion', $row['descripcion']);
    $xml->writeElement('Abreviatura', $row['abreviatura']);
   


    $xml->endElement(); 
}

$xml->endElement();
$xml->endDocument();
$xml->flush();

$conn->close();

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Categoria.xml"');
header('Content-Length: ' . filesize('Categoria.xml'));

readfile('Categoria.xml');
exit();
?>
