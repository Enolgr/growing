<!-- Página para Iniciar Sesión -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
    <!--Aquí va el menú de navegación con el título de la página-->
    <?php include_once "./includes/menu.php" ?>

    <!-- Formulario de inicio de sesión -->
    <section>
        <div>
            <form action="login.php" class="card-oscura" method="post">
                <h1 class="titulo-card">Login</h1>
                <input type="text" id="email" name="email" placeholder="Email" required>
                <input type="password" id="pass" name="pass" placeholder="Contraseña" required>
                <button type="submit" class="btn">Iniciar sesión</button>
                <a href="registrarse.php">Registrarse</a>
            </form>
        </div>
    </section>
    
    <!-- Aqui va el Footer -->
    <?php include_once "./includes/marquee.php";?>
    <?php include_once "./includes/footer.php"; ?>
</body>
</html>