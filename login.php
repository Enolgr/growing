<!-- Página para Iniciar Sesión -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
    <?php include_once "./includes/menu.php"; ?>

    <!-- Formulario de inicio de sesión -->
    <section class="contenedor-card">
        <div class="card">
            <form action="login.php" class="card-oscura" id="img-card" method="post">
                <h2 class="titulo-card">Inicia sesión</h2>

                <div class="contenedor-formulario">

                <div class="input-container">
  <input type="text" id="email" name="email" placeholder=" " required>
  <label for="email">Email</label>
</div>
<div class="input-container">
  <input type="password" id="pass" name="pass" placeholder=" " required>
  <label for="pass">Contraseña</label>
</div>

                    <div class="opciones">
                        <p class="linea">He olvidado mi contraseña</p>
                        <button type="submit" class="btn">Iniciar sesión</button>
                    </div>

                </div>

                <div class="contenedor-registrarse">
                    <a href="registrarse.php">¿Todavía no tienes cuenta? <span class="linea">Registrate aquí</span></a>
                </div>

            </form>
        </div>
    </section>
    <!-- Footer & Marquee -->
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
</body>
</html>