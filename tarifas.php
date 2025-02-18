<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarifas</title>

  <!-- CSS & normalize -->
  <link rel="stylesheet" href="./styles/normalize.css">
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/tarifas.css">
</head>
<body>

<?php include_once "./includes/menu.php" ?>

<section class="contenedor-tarifas">
  <div class="contenedor-titulo">
    <div class="titulo">
      <h1>Aprende sobre botánica con el plan ideal para ti</h1>
    </div>
    <div class="iconos">
      <div class="hover-oscuro">
        <img src="./img/icons/planta4.svg" alt="">
      </div>
      <div class="hover-oscuro">
        <img src="./img/icons/planta5.svg" alt="">
      </div>
      <div class="hover-oscuro">
        <img src="./img/icons/planta6.svg" alt="">
      </div>
      <div class="hover-oscuro">
        <img src="./img/icons/planta7.svg" alt="">
      </div>
      <div class="hover-oscuro">
        <img src="./img/icons/planta8.svg" alt="">
      </div>
    </div>
  </div>

  <div class="metodo">
    <div id="oferta">
      <p>Oferta</p>
    </div>

    <div class="periodicidad">
      <div class="año">
        <div class="mes">
          <p>Anual</p>
        </div>
      </div>

      <div contenedor="switch">
        <label for="toggle" class="switch">
          <input type="checkbox" name="toggle" id="toggle" class="switch__input" />
        </label>
      </div>
      <div class="mes">
        <div class="mes">
          <p>Mensual</p>
        </div>
      </div>
    </div>
  </div>

  <div class="tarifas">
    <div class="card">
      <div class="titulo-tarifa">
        <h2 class="nombre-tarifa">Bonsai</h2>
        <p class="text-tarifa">Quisque donec nibh diam tellus integer eros.</p>
      </div>
      
      <div class="contenedor-precio">
        <p class="precio">7€</p>
        <p class="info-precio">Precio por mes, pago anual</p>
      </div>

      <div class="contenedor-ventajas">
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 1</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 2</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 3</p>
        </div>
      </div>

      <button class="btn">Este es mi plan</button>
    </div>

    <div class="card">
      <div id="mejor-opcion">
        <p>Mejor opcion</p>
      </div>

      <div class="titulo-tarifa">
        <h2 class="nombre-tarifa">Jardin</h2>
        <p class="text-tarifa">Quisque donec nibh diam tellus integer eros.</p>
      </div>
      
      <div class="contenedor-precio">
        <p class="precio">10€</p>
        <p class="info-precio">Precio por mes, pago anual</p>
      </div>

      <div class="contenedor-ventajas">
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 1</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 2</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 3</p>
        </div>
      </div>

      <button class="btn">Empecemos</button>
    </div>

    <div class="card">
      <div class="titulo-tarifa">
        <h2 class="nombre-tarifa">Amazonas</h2>
        <p class="text-tarifa">Quisque donec nibh diam tellus integer eros.</p>
      </div>
      
      <div class="contenedor-precio">
        <p class="precio">13€</p>
        <p class="info-precio">Precio por mes, pago anual</p>
      </div>

      <div class="contenedor-ventajas">
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 1</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 2</p>
        </div>
        <div class="ventaja">
          <div class="hover-oscuro">
            <img src="./img/icons/Frame 141.svg" alt="">
          </div>
          <p>Ventaja 3</p>
        </div>
      </div>

      <button class="btn">Quiero este plan</button>
    </div>
  </div>
</section>

<?php include("./includes/marquee-solid.php") ?>

<section class="contenedor-cursos-top">
  <h2>Los cursos más top</h2>

  <div class="cursos">
    <div class="curso">
      <div class="hover-oscuro">
        <img src="./img/images/img-cursos.webp" alt="">
      </div>
      <p>Titulo curso</p>
    </div>

    <div class="curso">
      <div class="hover-oscuro">
        <img src="./img/images/img-cursos.webp" alt="">
      </div>
      <p>Titulo curso</p>
    </div>

    <div class="curso">
      <div class="hover-oscuro">
        <img src="./img/images/img-cursos.webp" alt="">
      </div>
      <p>Titulo curso</p>
    </div>

    <div class="curso">
      <div class="hover-oscuro">
        <img src="./img/images/img-cursos.webp" alt="">
      </div>
      <p>Titulo curso</p>
    </div>
  </div>

  <button class="btn">Boton 1</button>
</section>

<?php 
include "./includes/opiniones.php"
?>

<?php
include "./includes/newsletter.php";
include "./includes/marquee.php";
include "./includes/footer.php" ?>

<script src="./scripts/slider-opiniones.js"></script>
</body>
</html>
