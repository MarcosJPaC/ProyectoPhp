<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "abc";
$dbname = "loginsigniin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores enviados desde el formulario
$username = $_GET['username'];
$password = $_GET['password'];
// Consultar la base de datos para verificar las credenciales
$sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password')";
$result = $conn->query($sql);

// Verificar si se encontraron coincidencias
if ($result->num_rows > 0) {
    // Las credenciales son válidas, redirigir a la página de inicio
    header("Location: pages/snippets.html");
} else {
    // Las credenciales son inválidas, mostrar mensaje de error
    echo "Nombre de usuario o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
<b>