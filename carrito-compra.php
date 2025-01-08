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
    <form method="get" action="carrito-compra.php">
        <div class="itemsCard">
            <h1>¡Ya casi estamos!</h1>
            <ul id="items">
                <input type="checkbox" id="item1" name="item1" value=""></li>
                <label for="item1">Material 1</label>
                <div id="itemPrice1">4€</div>
                <div id="itemImg1"><img src=""></img></div>
                
                <input type="checkbox" id="item2" name="item2" value=""></li>
                <label for="item1">Material 2</label>
                <div id="itemPrice2">2€</div>
                <div id="itemImg2"><img src=""></img></div>

                <input type="checkbox" id="item3" name="item3" value=""></li>
                <label for="item1">Material3</label>
                <div id="itemPrice3">10€</div>
                <div id="itemImg3"><img src=""></img></div>
            </ul>
            <div id="total">Total:</div>
            <button type="button" class="btn" id="pay">Finalizar compra</button>
        </div>
    </form>
</body>
</html>