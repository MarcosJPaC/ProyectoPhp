<?php
require('../pages/cn.php');

$consulta = "Select * from marca WHERE statusmarca = 1";
$resultado = $conn->query($consulta);

$xml = new XMLWriter();
$xml->openURI('Marca.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

$xml->startElement('tabla');

while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('Pombre', $row['nombremarca']);
    $xml->writeElement('Pais', $row['pais']);
    $xml->writeElement('Popularidad', $row['popularidad']);
    $xml->writeElement('Entrega', $row['periodoEntrega']);
   


    $xml->endElement(); 
}

$xml->endElement();
$xml->endDocument();
$xml->flush();

$conn->close();

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Marca.xml"');
header('Content-Length: ' . filesize('Marca.xml'));

readfile('Marca.xml');
exit();
?>
