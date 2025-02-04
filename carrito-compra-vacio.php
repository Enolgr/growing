<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/carrito-compra-vacio.css">
</head>

<body>
    <?php include_once "./includes/menu.php"?>

    <div class="contenido">
        <section class="carrito-vacio">
            <h2>¡Tu cesta está vacía!<img src="./img/images/seedling_1f331.png" alt=""></h2>
            <p>Además de nuestros cursos sobre botánica, también contamos con una tienda online donde puedes encontrar todo el material necesario para tus clases y otros productos especiales, como plantas y accesorios 🌱✨ ¡Echa un vistazo y descubre todo lo que tenemos para ti! 😊</p>
            <div>
              <a href="./tienda.php">  <button type="button" class="btn" id="ir-tienda">Ir a la tienda</button></a>
            </div>
        </section>
    </div>

    <?php include "./includes/marquee.php" ?>
    <?php include "./includes/footer.php" ?>
</body>

</html>