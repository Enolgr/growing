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

  <div class="hero-tarifas">
  <div class="contenedor-slider">
  <div class="slider">
    <!-- Slide 1 -->
    <div id="slide1" class="slide active">
      <div class="contenedor-slider">
        <h2 class="hero-titulo">Hero de tarifas.</h2>
        <button class="btn">Descubre las tarifas</button>
      </div>
    </div>
    <!-- Slide 2 -->
    <div id="slide2" class="slide">
      <div class="contenedor-slider">
        <h2 class="hero-titulo">Ofertas increíbles.</h2>
        <button class="btn">Conoce más</button>
      </div>
    </div>
    <!-- Slide 3 -->
    <div id="slide3" class="slide">
      <div class="contenedor-slider">
        <h2 class="hero-titulo">Últimas novedades.</h2>
        <button class="btn">Descúbrelo</button>
      </div>
    </div>
  </div>
</div>


    <!-- Puntos de navegación -->
    <div class="slider-dots" id="sliderDots">
      <div class="dot active"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>

  <?php include_once "./includes/marquee-solid.php"; ?>

  <div class="cursos-top">
    <div class="titulo-seccion">
        <h3 class="titulo-seccion-h3">Los cursos más top</h3>
    </div>

    
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
  </div>
  <script src="./scripts/slider.js"></script>
</body>
</html>
