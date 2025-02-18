<!-- Página para Registrarse -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrarse</title>
  <!-- CSS & normalize -->
  <link rel="stylesheet" href="./styles/normalize.css" />
  <link rel="stylesheet" href="./styles/general.css" />
  <!-- Se reutilizan estilos comunes a login -->
  <link rel="stylesheet" href="./styles/login.css" />
  <link rel="stylesheet" href="./styles/registrarse.css" />
</head>

<body>
  <?php include_once "./includes/menu.php"; ?>

  <!-- Formulario de registro -->
  <section class="contenedor-card">
    <div class="card">
      <form action="registrarse.php" class="card-oscura" id="img-card" method="post">
        <h2 class="titulo-card">Regístrate</h2>

        <div class="contenedor-formulario">
          <!-- Campo Nombre -->
          <div class="input-container">
            <input type="text" id="name" name="name" placeholder=" " required />
            <label for="name">Nombre</label>
          </div>
          <!-- Campo Email -->
          <div class="input-container">
            <input type="text" id="email" name="email" placeholder=" " required />
            <label for="email">Email</label>
          </div>
          <!-- Campo Contraseña -->
          <div class="input-container">
            <input type="password" id="pass" name="pass" placeholder=" " required />
            <label for="pass">Contraseña</label>
          </div>

          <div class="opciones">
            <div class="contenedor-checkbox">
              <?php include_once "./includes/white-checkbox.php" ?>
              <p>
                He leído y acepto la
                <a href="./politica-privacidad.php" class="span-checkbox linea">Política de Privacidad</a>
              </p>
            </div>
            <button type="submit" class="btn">Registrarme</button>
          </div>
        </div>

        <div class="contenedor-registrarse">
          <a href="login.php">¿Ya tienes cuenta? <span class="linea"> Iniciar sesión</span></a>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer & Marquee -->
  <?php include_once "./includes/marquee.php"; ?>
  <?php include_once "./includes/footer.php"; ?>
</body>

</html>
