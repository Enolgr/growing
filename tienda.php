<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
</head>
<body>
    <?php include_once "./includes/menu.php" ?>
    <main>
        <div class="introduction">
            <div class="title">
                <p>No solo haz cursos, también compra nuestros productos ;)</p>
            </div>
            <div class="description">
                <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Netus pretium dictum auctor integer magnis suscipit justo orci. Lorem ipsum odor amet, consectetuer adipiscing elit. 😊</p>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="">
                    </img>
                </div>

                <div class="product-info">
                    <h4>Producto</h4>
                    <p class="price">6,00€</p>
                    <button class="boton boton-carrito">Añadir al carrito</button>
                </div>
            </div>
            <div class="product">
            </div>
            <div class="product">
            </div>
            <div class="product">
            </div>
            <div class="product">
            </div>
            <div class="product">
            </div>
        </div>
        <?php include_once "./includes/newsletter.php" ?>
    </main>
    <?php include_once "./inludes/marquee.php"?>
    <?php include_once "./includes/footer.php" ?>
</body>
</html>