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
    <div class="titleArrow">
        <img src="./img/icons/back.svg" alt="">
        <h1 class="title2">Finaliza tu compra</h1>
    </div>
    <section class= "legalContainer">
        <form action="****.php" method="post">
            <div class="checkoutCard"><!--Tarjeta con los datos de pago y envío  entera -->
                <!-- Apartdo datos de entrega -->
                <div class="sendData">
                    <h2>Entrega</h2>
                    <div class="nameLast">
                        <input type="text" id="name" name="name" placeholder="Nombre" required>
                        <input type="text" id="name" name="lastName" placeholder="Apellidos" required>
                    </div>
                    <input type="text" id="adress" name="adress" placeholder="Dirección" required>
                    <input type="text" id="house" name="house" placeholder="Casa,apartamento,etc.(opcional)">
                    <div class="directionData">
                        <input type="text" id="postalCode" name="postalCode" placeholder="Codigo postal" required>
                        <input type="text" id="city" name="city" placeholder="Ciudad" required>
                        <input type="text" id="province" name="province" placeholder="Provincia" required>
                    </div>
                    <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                    <br>
                    <div class="check-checkout">
                        <?php include "./includes/checkbox.php"; ?>
                        <p>Guardar mi información y pagar más rápido la proxima vez</p>
                    </div>
                </div>

                <!-- Apartdo  empresa envío -->
                <div class="deliveryMethod">
                    <hr>
                    <h2>Método de envío</h2>
                    <div class="deliveryData">
                        <div class="radius">
                            <input type="radio" id="delivery1" name="delivery" value="glsEcomomy"></input>
                            <input type="radio" id="delivery2" name="delivery" value="correosExpress"></input>
                        </div>
                        <div class="dataRadius">
                            <label for="delivery1">GLS Economy</label>
                            <p class="subtitle">Entrega en 48-72h</p>
                            <label for="delivery2">Correos Express</label>
                            <p class="subtitle">Entrega en 24h</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Apartado de método de pago -->
                <div class="payMethod">
                    <hr>
                    <h2>Pago</h2>
                    <p>Todas las transacciónes son seguras y están encriptadas</p>
                    <div class="creditCardContainer">
                        <div class="radiusAndCreditContainer">
                            <div class="Radius">
                                <input type="radio" id="creditCard" name="payment"></input>
                            </div>
                            <label for="bizum">Tarjeta de crédito</label>
                        </div>
                        
                        <img src="./img/logos/visa-classic-svgrepo-com.svg" id="visaPayImg" alt="Pago con Visa">
                        <img src="./img/logos/mastercard-full-svgrepo-com.svg" id="MasterCardPayImg" alt="Pago con Master Card">
                        <input type="text" id="cardNum" placeholder="Número de la tarjeta">
                        <div class="dateCode">
                            <input type="text" id="expirationDate" placeholder="Fecha de vencimiento (MM / AA)">
                            <input type="text" id="secureCode" placeholder="Código de seguridad">
                        </div>
                        <input type="text" id="ownerName" placeholder="Nombre del titular">
                        <div class="check-checkout">
                            <?php include "./includes/checkbox.php";?>
                            <p>Usar la dirección de envío como la dirección de facturación</p>
                        </div>
                    </div>
                    
                    <div class="otherMethodsContainer">
                        <div class="Radius">
                            <input type="radio" id="bizum" name="payment"></input>
                            <input type="radio" id="googleApple" name="payment"></input>
                            <input type="radio" id="payPal" name="payment"></input>
                        </div>
                        <div class="payText">
                            <label for="bizum">Pagar con Bizum</label>
                            <label for="googleApple">Google Pay y Apple Pay</label>
                            <label for="payPal">PayPal</label>
                        </div>
                        <div class="imgsContainer">
                            <img src="./img/logos/Bizum.svg" id="bizumImg" name="payment" alt="Pago con Bizum">
                            <div class="appleGoogle">
                                <img src="./img/logos/google-pay-svgrepo-com.svg" id="googlePayImg" alt="Pago con Google">
                                <img src="./img/logos/apple-pay-svgrepo-com.svg" id="applePayImg" alt="Pago con Apple Pay">
                            </div>
                            <img src="./img/logos/paypal.svg" id="paypalImg" alt="Pago con PayPal ">
                        </div>
                    </div>
                </div>
                <!-- Aquí se mostrará el total y el botón de pagar ahora -->
                    <div class="totalContainer">
                        <div class="total" id="total"><h2>Total</h2><p>(iva incluido)</p></div>
                        <div class="priceAndButton">
                            <div class="totalPrice" id="totalPrice"><p>6,00 €</p></div>
                            <button type="button" class="btn" id="payNow">Pagar ahora</button>
                        </div>
                    </div>
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