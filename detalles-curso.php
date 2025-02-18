<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalles producto</title>

  <!-- CSS & normalize -->
  <link rel="stylesheet" href="./styles/normalize.css">
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/detalles-cursos.css">
</head>
<body>
  <main>
    <?php include_once "./includes/menu.php" ?>

    <section class="card" id="card">
      <div class="producto">
        <div class="texto-producto">
          <div class="texto">
            <h3>Titulo curso</h3>
            <p>
              Lorem ipsum odor amet, consectetuer adipiscing elit. Mus quisque condimentum volutpat maximus, 
              potenti interdum ridiculus! Ornare integer taciti luctus nascetur cursus inceptos aptent natoque. 
              Condimentum volutpat nascetur; sem urna etiam magna accumsan varius mus. Curae natoque fringilla 
              pulvinar nam morbi quis torquent. Aptent ex facilisi posuere diam pretium pretium; diam commodo. 
              Morbi faucibus porttitor urna elit; orci cras aenean ligula porta? Sociosqu interdum eu sem; montes 
              malesuada platea nulla at. Dictum maecenas ex duis tempus urna inceptos aptent sem sodales.
            </p>
          </div>

          <div class="contenedor-especificaciones">
            <div class="especificaciones">
              <p>Dificultad</p>
              <img src="./img/icons/4.5stars.svg" alt="">
            </div>
            <div class="valor-especificaciones">
              <p>Duracion</p>
              <p id="horas">12 horas</p>
            </div>
          </div>

          <div class="contenedor-precio">
            <a href="./reproductor.php"><button class="btn">Ver curso</button></a>
            <a href="./materiales.php"><button class="btn">Materiales</button></a>
          </div>
        </div>

        <div class="imagen-producto">
          <div class="contenedor-hover">
            <img src="./img/images/img-cursos.webp" alt="">
            <div class="overlay"></div>
          </div>
        </div>
      </div>
    </section>


    <section class="contenedor-otros-productos">
    <h2 id="otros-productos">Otros cursos relacionados</h2>
    <div class="contenedor-grid">
        <div class="producto-card ">
          <div class="contenedor-hover">
            <img src="./img/images/img-cursos.webp" alt="">
            <div class="overlay"></div>
          </div>
          <p class="nombre">Título curso</p>
          <p class="precio">
            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit 
            porro est qui dolorem ip...
          </p>
          <div class="icons">
            <a href="#"><button class="btn">Ver curso</button></a>
            <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
          </div>
        </div>

        <div class="producto-card ">
          <div class="contenedor-hover">
            <img src="./img/images/img-cursos.webp" alt="">
            <div class="overlay"></div>
          </div>
          <p class="nombre">Título curso</p>
          <p class="precio">
            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit 
            porro est qui dolorem ip...
          </p>
          <div class="icons">
            <a href="#"><button class="btn">Ver curso</button></a>
            <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
          </div>
        </div>

        <div class="producto-card ">
          <div class="contenedor-hover">
            <img src="./img/images/img-cursos.webp" alt="">
            <div class="overlay"></div>
          </div>
          <p class="nombre">Título curso</p>
          <p class="precio">
            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit 
            porro est qui dolorem ip...
          </p>
          <div class="icons">
            <a href="#"><button class="btn">Ver curso</button></a>
            <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
          </div>
        </div>
        </div>
    </section>
  </main>

  <?php include "./includes/marquee.php" ?>
  <?php include "./includes/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="./scripts/estrellas.js"></script>
</body>
</html>
