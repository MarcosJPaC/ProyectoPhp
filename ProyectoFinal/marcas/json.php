<?php
require ("../pages/cn.php");

// Consulta SQL con JOIN
$consulta="select * from marca where statusmarca = 1";

$resultado = $conn->query($consulta);

// Obtener los datos de la consulta como un array
$almacenes = array();
while ($row = $resultado->fetch_assoc()) {
    unset($row['statusmarca']);
    unset($row['idMarca']);
    $almacenes[] = $row;
}

// Generar el archivo JSON
$jsonData = json_encode($almacenes, JSON_PRETTY_PRINT);

// Establecer los encabezados de la respuesta HTTP
header('Content-Type: application/json');
header('Content-Disposition: attachment; filename="marca.json"');

// Imprimir el contenido JSON
echo $jsonData;

// Cerrar la conexión a la base de datos
$conn->close();
?>