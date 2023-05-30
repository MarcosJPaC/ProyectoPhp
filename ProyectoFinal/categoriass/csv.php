<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

$consulta = "Select * from categoria WHERE status = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Categoria.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Descripcion', 'Abreviatura'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['descripcion'],
        $rows['abreviatura'],
        
    ));
}

fclose($output);
exit;

    ?>