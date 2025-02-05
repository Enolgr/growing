<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/perfil-usuario.css">
</head>

<body>
    <?php include_once "./includes/menu.php" ?>
    <main>
        <div class="contenedor-general">
            <h1 class="titulo-card">Gestiona tu perfil</h1>

            <!-- Falta cambiar los iconos, descargarlos y ponerlos -->
            <section class="contenedor-cards">
                <div class="card-oscura">
                    <h2>Mis pedidos 📦</h2>
                    <p class="detalles-pedidos">Accede al historial de tus pedidos, Lorem ipsum odor amet, consectetuer
                        adipiscing elit. Netus
                        pretium dictum auctor integer magnis suscipit justo orci.</p>
                    <a href="tusPedidos.php" type="submit" class="boton">Ver mis pedidos</a>
                </div>
                <div class="card-oscura">
                    <h2>Mis cursos 🌵</h2>
                    <p class="detalles-cursos">Accede al historial de tus cursos, Lorem ipsum odor amet, consectetuer
                        adipiscing elit. Netus pretium
                        dictum auctor integer magnis suscipit justo orci.</p>
                    <a href="mis-cursos.php" type="submit" class="boton">Ver mis cursos</a>
                </div>
            </section>
        </div>

        <!-- Formulario de datos -->
        <section class= "legalContainer">
        <form action="****.php" method="post">
            <div class="checkoutCard"><!--Tarjeta con los datos de pago y envío  entera -->
                <!-- Apartdo datos de entrega -->
                <div class="allData">

                    <h2>Tus datos</h2>
                    <div class="cuerpo-datos">
                    <div class="imgData">
                        <img src="./img/images/Foto-perfil.png">
                    </div>
                    <div class="sendData">

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
                </div>
                </div>
                </div>
                

                <!-- Apartdo  empresa envío -->
                <div class="deliveryMethod">
                    <hr>
                    <h2>Tu suscripción</h2>
                    <div class="deliveryData" id="deliveryN1">
                        <p>Nombre tarifa anual</p>
                        <div class="totalPrice" id="totalPrice"><p>6,00 €</p></div>
                    </div>
                    <div class="suscriptButtons">
                        <button type="button" class="btn" id="payNow">Cambiar suscripción</button>
                        <button type="button" class="btnYellow" id="payNow">Cancelar suscripción</button>
                    </div>
                    
                </div>
                <!-- Apartado de método de pago -->
                <div class="payMethod">
                    <hr>
                    <h2>Método de pago</h2>
                    <p>Todas las transacciónes son seguras y están encriptadas</p>
                    <div class="creditCardContainer">
                            <input class="radius "type="radio" id="creditCard" name="payment"></input>
                            <label for="bizum">Tarjeta de crédito</label>
                            <div class="visaMasterLogos">
                                <img src="./img/logos/visa-classic-svgrepo-com.svg" id="visaPayImg" alt="Pago con Visa">
                                <img src="./img/logos/mastercard-full-svgrepo-com.svg" id="MasterCardPayImg" alt="Pago con Master Card">
                            </div>
                    </div>
                    <div class="creditForm">
                        <input type="text" id="cardNum" placeholder="Número de la tarjeta">
                        <div class="dateCode">
                            <input type="text" id="expirationDate" placeholder="Fecha de vencimiento (MM / AA)"><br>
                            <input type="text" id="secureCode" placeholder="Código de seguridad">
                        </div>
                        <input type="text" id="ownerName" placeholder="Nombre del titular">
                    </div>
                    <div class="check-checkout">
                        <?php include "./includes/checkbox.php";?>
                        <p>Usar la dirección de envío como la dirección de facturación</p>
                    </div>
                    <div class="otherMethodsContainer">
                        <div class="paymentOption">
                            <input class="radius" type="radio" id="bizum" name="payment">
                            <label for="bizum">Pagar con Bizum</label>
                            <div class="imgsPayment">
                                <img src="./img/logos/Bizum.svg" id="bizumImg" alt="Pago con Bizum">
                            </div>
                            
                        </div>
                        <div class="paymentOption">
                            <input class="radius" type="radio" id="googleApple" name="payment">
                            <label for="googleApple">Google Pay y Apple Pay</label>
                            <div class="imgsPayment">
                                <img src="./img/logos/google-pay-svgrepo-com.svg" id="googlePayImg" alt="Pago con Google">
                                <img src="./img/logos/apple-pay-svgrepo-com.svg" id="applePayImg" alt="Pago con Apple Pay">
                            </div>
                        </div>
                        <div class="paymentOption">
                            <input class="radius" type="radio" id="payPal" name="payment">
                            <label for="payPal">PayPal</label>
                            <div class="imgsPayment">
                                <img src="./img/logos/paypal.svg" id="paypalImg" alt="Pago con PayPal">
                            </div>
                        </div>
                </div>
                <hr>
                <!-- Aquí se mostrará el total y el botón de pagar ahora -->
                    <div class="totalContainer">
                        <div class="total" id="total"><h2>Gestión de cuenta</h2></div>
                        <div class="priceAndButton">
                            <button type="button" class="btn" id="payNow">Eliminar cuenta</button>
                        </div>
                    </div>
            </div>
        </form>
    </section>
        
    </main>
    <?php include_once "./includes/marquee.php" ?>
    <?php include_once "./includes/footer.php" ?>
</body>

</html>