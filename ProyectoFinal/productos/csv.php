<?php
require('../pages/cn.php');
require('../vendor/autoload.php');

$consulta = "SELECT p.idProducto, p.nombre, p.precio, p.stock, p.area, m.nombremarca AS nombreMarca, v.vendedor AS nombreVenta, c.nombre AS nombreCategoria
From Producto p
JOIN Marca m ON p.idMarca = m.idMarca
JOIN Venta v ON p.idVenta = v.idVenta
JOIN Categoria c ON p.idCategoria = c.idCategoria WHERE p.status=1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="producto.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Precio', 'Stock','Area','Marca','Vendedor','Categoria'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['precio'],
        $rows['stock'],
        $rows['area'],
        $rows['nombreMarca'],
        $rows['nombreVenta'],
        $rows['nombreCategoria'],
    ));
}

fclose($output);
exit;

    ?>