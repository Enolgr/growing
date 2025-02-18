<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tienda</title>
    <!-- Normalize & CSS -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/tienda.css">
</head>

<body>
    <!-- Menu -->
    <?php include_once "./includes/menu.php" ?>
    
    <div class="lorem-ipsum">
        <div class="titulo">
            <h1>No sólo haz cursos, también<br> compra nuestros productos ;)</h1>
            <div class="iconos">
                <img class="plantita" src="./img/icons/planta1.svg" alt="">
                <img class="plantita" src="./img/icons/planta2.svg" alt="">
                <img class="plantita" src="./img/icons/planta3.svg" alt="">
            </div>
        </div>
        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Netus pretium dictum auctor integer magnis suscipit justo orci. Lorem ipsum odor amet, consectetuer adipiscing elit. 😊</p>
    </div>
    
    <!-- Información productos -->
    <section class="cursos">
        <div class="cursos-list">
            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
            </div>

            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
            </div>

            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
            </div>

            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
            </div>

            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
            </div>

            <div class="detalles-curso">
                <div class="img-curso">
                    <div class="contenedor-hover">
                        <a href="./detalles-productos.php">
                            <img src="./img/images/crop.webp" alt="producto">
                            <div class="overlay">
                                <span>Ver detalles</span>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="nombre-curso">Producto</h2>
                <p>6,00 €</p>
                <div class="icons">
                    <a href="./carrito-compra.php"><button class="btn" id="btn">Añadir al carrito</button></a>
                </div>
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

    <!-- Newsletter -->
    <?php include_once "./includes/newsletter.php"; ?>

    <!-- Marquee & Footer -->
    <?php 
        include_once "./includes/marquee.php";
        include_once "./includes/footer.php"; 
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts/estrellas.js"></script>
</body>

</html>
