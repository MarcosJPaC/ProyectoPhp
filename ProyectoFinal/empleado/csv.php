<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

$consulta = "Select * from empleado WHERE status= 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Empleado.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Edad', 'Fecha Ingreso','Puesto'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['edad'],
        $rows['fechaIngreso'],
        $rows['puesto'],
        
    ));
}

fclose($output);
exit;

    ?>