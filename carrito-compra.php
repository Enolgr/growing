<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compra</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/carrito-compra.css">
</head>
<body>
    
<?php include "./includes/menu.php" ?>

<h1>Ya casi estamos! <img id="plantita" src="./img/images/seedling_1f331.png" alt=""></h1>

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
                    <input type="text" class="descuento" placeholder="Código descuento">
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