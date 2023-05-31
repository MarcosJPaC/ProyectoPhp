
<link rel="styles" type="text/css" href="styles.css">
<style>
body {
  background-image: url('fondo.jpg');
  background-repeat: no-repeat;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Registrate</h2>
              <p class="text-white-50 mb-5">Por favor ingrese los datos para completar el registro.</p>
<form action="register.php" method="POST">
<div class="form-outline form-white mb-4">
                <input placeholder="Nombre" type="text" name="nombre" id="nombre" class="form-control " />
                <label class="form-label" for="nombre"></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input placeholder="Email" type="text" name="email" id="email" class="form-control " />
                <label class="form-label" for="typeEmailX"></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input placeholder="Contraseña" name="password" type="password" id="password" class="form-control " />
                <label class="form-label" for="typePasswordX"></label>
              </div>

              <input class="btn btn-outline-light btn-lg px-5 "type="submit" value="Registrarse">

</form>
            </div>

            <div>
              <p class="mb-0">¿Tienes una cuenta? <a href="login.php" class="text-white-50 fw-bold">Iniciar Sesión </a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "abc";
$dbname = "abarrote";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
error_reporting(E_ALL & ~E_WARNING);


    $name = $_POST['nombre'];

    $username = $_POST['email'];
    $password = $_POST['password'];
    
    // Consulta para verificar si el usuario ya existe
    $checkUserQuery = "SELECT * FROM users WHERE username = '$username'";
    $checkUserResult = $conn->query($checkUserQuery);

    if ($checkUserResult->num_rows == 0) {
        // Insertar nuevo usuario en la base de datos
        $insertUserQuery = "INSERT INTO users (name,username, password) VALUES ('$name','$username', md5('$password'))";
        if ($conn->query($insertUserQuery) === TRUE) {
echo "Registro exitoso. ";
exit();
} else {
$error = "Error al registrar el usuario: " . $conn->error;
}
} else {
$error = "El nombre de usuario ya existe.";
}

?>
