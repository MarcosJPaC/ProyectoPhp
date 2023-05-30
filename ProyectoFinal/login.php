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

              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
              <p class="text-white-50 mb-5">Por favor ingrese su email y contraseña</p>
              <div class="form-outline form-white mb-4">
                <form action="login2.php" method="GET">

                <input name="username" placeholder="Email" type="text" id="email" class="form-control " />
                <label class="form-label" for="typeEmailX"></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input placeholder="Contraseña" type="password" id="password" name="password" class="form-control " />
                <label class="form-label" for="typePasswordX"></label>
              </div>

              <input class="btn btn-outline-light btn-lg px-5 "type="submit" value="Iniciar Sesión">


            </div>

            <div>
              <p class="mb-0">¿No tienes una cuenta? <a href="register.php" class="text-white-50 fw-bold">Registrate </a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
