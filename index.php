<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/normalize.css">
  <link rel="stylesheet" href="./styles/index.css">
  <link rel="stylesheet" href="./styles/general.css">
  <title>Growing</title>
</head>
<body>
  <?php include_once './includes/menu.php'; ?>

  <div class="index-hero-tarifas">
  <div class="index-contenedor-slider">
    <div class="index-slider">
      <!-- Slide 1 -->
      <div id="slide1" class="index-slide index-active">
        <div class="index-contenedor-slider">
          <h2 class="index-hero-titulo">Conoce nuestras tarifas.</h2>
          <a href="./tarifas.php"><button class="btn">Descubrelas</button></a>
        </div>
      </div>
      <!-- Slide 2 -->
      <div id="slide2" class="index-slide">
        <div class="index-contenedor-slider">
          <h2 class="index-hero-titulo">Mira la tienda, coño.</h2>
          <a href="./tienda.php"><button class="btn">Descubre nuestra tienda</button></a>
        </div>
      </div>
      <!-- Slide 3 -->
      <div id="slide3" class="index-slide">
        <div class="index-contenedor-slider">
          <h2 class="index-hero-titulo">Visita los cursos.</h2>
          <a href="./cursos.php">
          <button class="btn">Está guapisimo</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Puntos de navegación -->
  <div class="index-slider-dots" id="sliderDots">
    <div class="index-dot index-active"></div>
    <div class="index-dot"></div>
    <div class="index-dot"></div>
  </div>
</div>

<div class="contenedor-marquee">
  <?php include_once "./includes/marquee-solid.php"; ?>
  </div> 
  <div class="cursos-top">

        <h3 class="titulo-seccion-h3">Los cursos más top</h3>


    <div class="cursos-top-grid">
        <div class="curso-card">
            <img class="image-card" src="./img/images/img-cursos.webp" alt="">
            <p class="titulo-card">Titulo Curso</p>
        </div>
        <div class="curso-card">
            <img class="image-card" src="./img/images/img-cursos.webp" alt="">
            <p class="titulo-card">Titulo Curso</p>
        </div>
        <div class="curso-card">
            <img class="image-card" src="./img/images/img-cursos.webp" alt="">
            <p class="titulo-card">Titulo Curso</p>
        </div>
        <div class="curso-card">
            <img class="image-card" src="./img/images/img-cursos.webp" alt="">
            <p class="titulo-card">Titulo Curso</p>
        </div>


    </div>
    <button class="btn">Descubre más cursos</button>
  </div>

<?php include './includes/opiniones.php' ?>

<?php include './includes/newsletter.php'; ?>

<?php include './includes/marquee.php'; ?>
<?php include './includes/footer.php'; ?>

  <script src="./scripts/slider.js"></script>
  <script src="./scripts/slider-opiniones.js"></script>
</body>
</html>
