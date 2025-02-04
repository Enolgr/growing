<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cursos</title>
    <!-- Normalize & CSS -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/tienda.css">
</head>

<body>
    <!-- Menu -->
    <?php include_once "./includes/menu.php" ?>

    <h1>Nuestros cursos online</h1>

    <!-- Información cursos -->
    <section class="cursos">
        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Producto</h2>
            <p>6,00 €</p>
            <div class="icons">
                <a href="./detalles-productos.php"><button class="btn2" id="btn2">Añadir al carrito</button></a>
            </div>
        </div>

        <div class="paginacion">
            <button class="pagina">1</button>
            <button class="pagina">2</button>
            <button class="pagina">3</button>
            <button class="pagina">4</button>
            <button class="pagina">5</button>
            <button class="pagina">...</button>
            <button class="pagina">10</button>
        </div>

    </section>

    <!-- Aqui iria la paginación de los cursos  -->
    <!-- Newsletter -->
    <?php include_once "./includes/newsletter.php"; ?>

    <!-- Marquee & Footer -->
    <?php include_once "./includes/marquee.php";
    include_once "./includes/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts/estrellas.js"></script>
</body>

</html>
