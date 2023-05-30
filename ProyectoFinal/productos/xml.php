<?php
require('../pages/cn.php');

$consulta = "SELECT p.idProducto, p.nombre, p.precio, p.stock, p.area, m.nombremarca AS nombreMarca, v.vendedor AS nombreVenta, c.nombre AS nombreCategoria
From Producto p
JOIN Marca m ON p.idMarca = m.idMarca
JOIN Venta v ON p.idVenta = v.idVenta
JOIN Categoria c ON p.idCategoria = c.idCategoria WHERE p.status=1";
$resultado = $conn->query($consulta);

$xml = new XMLWriter();
$xml->openURI('Producto.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

$xml->startElement('tabla');

while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('Nombre', $row['nombre']);
    $xml->writeElement('Precio', $row['precio']);
    $xml->writeElement('Stock', $row['stock']);
    $xml->writeElement('Srea', $row['area']);
    $xml->writeElement('Marca', $row['nombreMarca']);
    $xml->writeElement('Vendedor', $row['nombreVenta']);
    $xml->writeElement('Categoria', $row['nombreCategoria']);


    $xml->endElement(); 
}

$xml->endElement();
$xml->endDocument();
$xml->flush();

$conn->close();

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Producto.xml"');
header('Content-Length: ' . filesize('Producto.xml'));

readfile('Producto.xml');
exit();
?>
