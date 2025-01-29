<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compra</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
</head>
<body>

<?php include "./includes/menu.php" ?>

<h1>¡Ya casi estamos!</h1>

    <form method="get" action="checkout.php">
        <div class="itemsCard">
            <div id="items">

                <div class="item">
                <div class="nombre-producto" >
                <input type="checkbox" value="">
                <label class="nombreProducto" for="">Producto 1</label>
                </div>
                <div>
                    <p class="precio" >2.00€</p>
                    <img src="" alt="">
                </div>
                </div>
                
                <div class="item">
                <div class="nombre-producto">
                <input type="checkbox" value="">
                <label class="nombreProducto" for="">Producto 2</label>
                </div>
                <div>
                    <p class="precio" >2.00€</p>
                    <img src="" alt="">
                </div>
                </div>
                
                <div class="item">
                <div class="nombre-producto" >
                <input type="checkbox" value="">
                <label class="nombreProducto" for="">Producto 3</label>
                </div>
                <div>
                    <p class="precio" >2.00€</p>
                    <img src="" alt="">
                </div>
                </div>
                
            </div>
            <div>
                <div class="total" >
                    <p>Total</p>
                    <p>(iva incluido)</p>
                </div>

                <div class="finalizar" >
                    <input type="text" class="descuento">
                    <div class="boton-finalizar" >
                        <p>6.00€</p>
                        <button type="button" class="btn" id="pay">Finalizar compra</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include "./includes/marquee.php" ?>
    <?php include "./includes/footer.php" ?>
</body>
</html>