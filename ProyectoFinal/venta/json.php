<?php
require('../pages/cn.php');

// Consulta SQL con JOIN
$consulta="select * from venta where status = 1";

$resultado = $conn->query($consulta);

// Obtener los datos de la consulta como un array
$almacenes = array();
while ($row = $resultado->fetch_assoc()) {
    unset($row['status']);
    unset($row['idVenta']);
    $almacenes[] = $row;
}

// Generar el archivo JSON
$jsonData = json_encode($almacenes, JSON_PRETTY_PRINT);

// Establecer los encabezados de la respuesta HTTP
header('Content-Type: application/json');
header('Content-Disposition: attachment; filename="venta.json"');

// Imprimir el contenido JSON
echo $jsonData;

// Cerrar la conexión a la base de datos
$conn->close();
?>