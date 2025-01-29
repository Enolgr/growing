<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/404.css">
</head>

<body>
    <?php include_once "./includes/menu.php" ?>
    <main class="contenedor-card">
        <div class="card" id="img-card">
            <div id="inside-card">
                <h1 id="notfound">404</h1>
                <p id="ups">
                    ¡Ups!<br>
                    Ha habido un error
                </p>
                <button class="btn">Volver al inicio</button>
            </div>        
        </div>
    </main>
    <?php include_once "./includes/marquee.php" ?>
    <?php include_once "./includes/footer.php" ?>
</body>
</html>