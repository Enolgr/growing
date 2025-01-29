<!-- Página para Iniciar Sesión -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/registrarse.css">



</head>

<body>
    <?php include_once "./includes/menu.php"; ?>

    <!-- Formulario de inicio de sesión -->
    <section class="contenedor-card">
        <div class="card">
            <form action="login.php" class="card-oscura" id="img-card" method="post">
                <h2 class="titulo-card">Regístrate</h2>

                <div class="contenedor-formulario">
                    <input type="text" id="name" name="name" placeholder="Nombre" required>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <input type="password" id="pass" name="pass" placeholder="Contraseña" required>

                    <div class="opciones">
                        <div class="contenedor-checkbox">
                            <?php include_once "./includes/checkbox.php" ?>
                            <p>He leído y acepto la <span class="span-checkbox">Política de Privacidad</span></p>
                        </div>
                        <button type="submit" class="boton">Registrarme</button>
                    </div>
                </div>

                <div class="contenedor-registrarse">
                    <a href="login.php">¿Ya tienes cuenta? Iniciar sesión</a>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer & Marquee -->
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
</body>

</html>