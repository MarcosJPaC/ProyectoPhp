<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

$consulta = "Select v.idVenta, v.fecha, v.total, v.unidadesVendidas, v.vendedor, e.nombre AS nombreEmpleado
From Venta v
JOIN Empleado e ON v.idEmpleado = e.idEmpleado WHERE v.status=1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Venta.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Fecha', 'Total', 'Unidades Vendidas','Vendedor','Empleado'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['fecha'],
        $rows['total'],
        $rows['unidadesVendidas'],
        $rows['vendedor'],
        $rows['nombreEmpleado'],
    ));
}

fclose($output);
exit;

    ?>