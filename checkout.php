<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/politicas.css">
    
    <title>Checkout</title>
</head>
<body>
<?php include_once "./includes/menu.php"?>
    <h2>Finaliza tu compra</h2>
    <section class= "legalContainer">
        <form action="****.php" method="post">
            <div class="checkoutCard"><!--Tarjeta con los datos de pago y envío  entera -->
                <!-- Apartdo datos de entrega -->
                <div class="sendData">
                    <h2>Entrega</h2>
                    <input type="text" id="name" name="name" placeholder="Nombre" required>
                    <input type="text" id="name" name="lastName" placeholder="Apellidos" required>
                    <input type="text" id="adress" name="adress" placeholder="Dirección" required>
                    <input type="text" id="house" name="house" placeholder="Casa,apartamento,etc.(opcional)">
                    <input type="text" id="postalCode" name="postalCode" placeholder="Codigo postal" required>
                    <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                    <br>
                    <div class="check-checkout">
                        <?php include_once "./includes/checkbox.php"; ?>
                        <p>Verificar metodo</p>
                    </div>
                </div>

                <!-- Apartdo  empresa envío -->
                <div class="deliveryMethod">
                    <h2>Método de envío</h2>
                    <input type="radio" id="delivery" name="delivery" value="glsEcomomy">GLS Economy</input>
                    <p>Entrega en 48-72h</p>
                    <input type="radio" id="delivery" name="delivery" value="correosExpress">Correos Express</input>
                    <p>Entrega en 24h</p>
                </div>

                <!-- Apartado de método de pago -->
                <div class="payMethod">
                    <h2>Pago</h2>
                    <p>Todas las transacciónes son seguras y están encriptadas</p>
                    <input type="radio" id="payment" name="payment">Tarjeta de crédito</input>
                    <img src="#">
                    <input type="text" id="cardNum" placeholder="Número de la tarjeta">
                    <input type="text" id="expirationDate" placeholder="Fecha de vencimiento (MM / AA)">
                    <input type="text" id="ownerName" placeholder="Nombre del titular">
                    <input type="checkbox" id="deliveryAdress">Usar la dirección de envío como la dirección de facturación</input>
                    <input type="radio" id="payment" name="payment">Pagar con Bizum</input>
                    <img src="#" id="bizumImg" name="payment">
                    <input type="radio" id="payment" name="payment">Google Pay y Apple Pay</input>
                    <img src="#" id="googlePayImg">
                    <img src="#" id="applePayImg">
                    <input type="radio" id="payment" name="payment">PayPal</input>
                    <img src="#" id="paypalImg">
                </div>
                <!-- Aquí se mostrará el total y el botón de pagar ahora -->
                <div class="total" id="total">Total:</div>
                <button type="button" class="btn" id="payNow">Pagar ahora</button>
            </div>
        </form>
    </section>
    <section class="footer">
    <!-- Marquee & Footer -->
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
    </section>
</body>
</html>