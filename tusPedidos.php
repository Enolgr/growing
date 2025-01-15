<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tus pedidos</title>
  </head>
  <body>
    <header>
      <!--Aquí va el menú de navegación con el título de la página-->
    </header>
    <main>
      <div class="title" id="title">
        <h1>Tus pedidos</h1>
      </div>
      <div class="orders-container" id="orders-container"> <!--Caja de pedidos-->
        <div class="order" id="order1"> <!--Pedido en concreto-->
            <p class="number" id="number">Nº Pedido</p> <!--Nº pedido 0000001-->
            <p class="date" id="order-date">28/07/24</p>  <!--23/07/24-->
        </div>
        <div class="product-list" id="product-list"> <!--Div que contiene productos-->
            <p class="materials" id="materials">Material 1</p> <!--Material 1-->
            <p class="prices" id="prices">2 €</p> <!--2 €-->
            <img class="img" id="img">Imagen de producto</img> <!--Imagen producto-->
        </div>

        <div class="data-price" id="data-price"> <!--Div que contiene Total, precio y descargar factura-->
            <div class="price-details" id="price-details">
              <p class="total-title" id="total-title">Total</p>
              <p class="iva" id="iva">(iva incluido)</p>
              <p class="total-price" id="total-price">6€</p>
              <button class="invoice-download" id="invoice-download">Descargar factura</button>
            </div>

            <div class="deliver-day" id="deliver-day">
              <p class="day" id="day">Día entrega</p>
              <p class="date" id="deliver-date">28/07/24</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- Aquí el footer -->
    </footer>
  </body>
</html>
