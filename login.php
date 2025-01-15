<!-- Página para Iniciar Sesión -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="./styles/login.css">
    <title>Document</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
=======
>>>>>>> a0d399f22e614d6bc50298f1149b65a6c876cff0
</head>

<body>
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
    <?php include_once "./includes/marquee.php"; "./includes/footer.php"; ?>
</body>
</html>