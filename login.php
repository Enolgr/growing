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
                <h2 class="titulo-card">Iniciar sesión</h2>

                <div class="contenedor-formulario">
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <input type="password" id="pass" name="pass" placeholder="Contraseña" required>

                    <div class="opciones">
                        <p>He olvidado mi contraseña</p>
                        <button type="submit" class="boton">Iniciar sesión</button>
                    </div>

                </div>

                <div class="contenedor-registrarse">
                    <a href="registrarse.php">¿Todavía no tienes cuenta? Registrate aqui</a>
                </div>

            </form>
        </div>
    </section>
    <!-- Footer & Marquee -->
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
</body>
</html>