<?php
$id=$_POST["id"];
$servername = "localhost";
$username = "root";
$password = "abc";
$dbname = "abarrote";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
$sql= "UPDATE categoria SET status = 0 WHERE idCategoria = ".$id;
$resultado = mysqli_query($conn,$sql);

$resultado = mysqli_query($conn,$sql);
header("Location: categorias.php");
mysqli_close( $conn );

?>
