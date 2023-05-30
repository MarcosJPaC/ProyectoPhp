<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

$consulta = "Select * from marca WHERE statusmarca = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Marcas.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Pais', 'Popularidad','Entrega'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombremarca'],
        $rows['pais'],
        $rows['popularidad'],
        $rows['periodoEntrega'],
        
    ));
}

fclose($output);
exit;

    ?>