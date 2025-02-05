<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top</title>

  <!-- CSS & normalize -->
  <link rel="stylesheet" href="./styles/normalize.css">
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/top.css">
</head>
<body>

  <?php include_once "./includes/menu.php" ?>

  <section class="contenedor-tarifas">
    <div class="contenedor-titulo">
      <div class="titulo">
        <h1>Descubre los cursos más top!</h1>
      </div>
      <div class="iconos">
        <img src="./img/icons/planta1.svg" alt="">
        <img src="./img/icons/planta3.svg" alt="">
        <img src="./img/icons/planta5.svg" alt="">
        <img src="./img/icons/planta7.svg" alt="">
        <img src="./img/icons/planta8.svg" alt="">
      </div>
    </div>

    <div class="tarifas">
      <div class="card">
        <div class="titulo-tarifa">
          <h2 class="nombre-tarifa">Cuidado de Orquídeas</h2>
        </div>
        <img class="imagen-planta" src="./img/images/img-cursos.webp" alt="Cuidado de Orquídeas">
        <button class="btn">Ver Curso</button>
      </div>

      <div class="card">
        <div class="titulo-tarifa">
          <h2 class="nombre-tarifa">Huerto Urbano</h2>
        </div>
        <img class="imagen-planta" src="./img/images/img-cursos.webp" alt="Huerto Urbano">
        <button class="btn">Ver Curso</button>
      </div>

      <div class="card">
        <div class="titulo-tarifa">
          <h2 class="nombre-tarifa">Jardinería Moderna</h2>
        </div>
        <img class="imagen-planta" src="./img/images/img-cursos.webp" alt="Jardinería Moderna">
        <button class="btn">Ver Curso</button>
      </div>
    </div>
  </section>

  <?php
    include "./includes/marquee.php";
    include "./includes/footer.php";
  ?>

  <script src="./scripts/slider-opiniones.js"></script>
</body>
</html>
