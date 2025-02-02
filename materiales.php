<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiales</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/materiales.css">
</head>

<body>
    <?php include_once "./includes/menu.php" ?>

    <div class="encabezado">
        <div id="titulo" >
        <a href=""><img src="./img/icons/back.svg" alt=""></a>
        <h1>Todo lo que necesitas para hacer el curso</h1>
        </div>
        <p id="descripcion">Para nuestros cursos, necesitarás algunos materiales. Puedes usar los que tengas en casa o pedirnos los recomendados. Te los enviamos en 2-3 días laborales, ¡sin gastos de envío! 😊</p>
    </div>

    <form id="card"class="card" method="get" action="checkout.php">
        
        <div id="items">

            <div class="list-item">
            <div class="nombre-producto" >
            <?php include "./includes/checkbox.php" ?>
            <p class="nombre" >Producto 1</p>
            </div>
            <div class="contenedor-precio" >
                <p class="precio" >2.00€</p>
                <img src="./img/images/img-cursos.webp" alt="">
            </div>
            </div>
            
            <div class="list-item">
            <div class="nombre-producto">
            <?php include "./includes/checkbox.php" ?>
            <p class="nombre" >Producto 1</p>
            </div>
            <div class="contenedor-precio">
                <p class="precio" >2.00€</p>
                <img src="./img/images/img-cursos.webp"" alt="">
            </div>
            </div>
            
            <div class="list-item">
            <div class="nombre-producto" >
            <?php include "./includes/checkbox.php" ?>
            <p class="nombre" >Producto 1</p>
            </div>
            <div class="contenedor-precio" >
                <p class="precio" >2.00€</p>
                <img src="./img/images/img-cursos.webp"" alt="">
            </div>
            </div>
            
        </div>

        <div class="linea"></div>

        <div class="contenedor-finalizar" >
            <div class="total" >
                <p>Total</p>
                <p>(iva incluido)</p>
            </div>

            <div class="finalizar" >
                <div class="boton-finalizar" >
                    <p>6.00€</p>
                    <button type="button" class="btn" id="pay">Finalizar compra</button>
                </div>
            </div>
        </div>
    </form>

    <?php include "./includes/marquee.php" ?>
    <?php include "./includes/footer.php" ?>
</body>
</html>
