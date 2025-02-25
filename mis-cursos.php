<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tus cursos</title>
  <link rel="stylesheet" href="./styles/normalize.css">
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/mis-cursos.css">
</head>

<body>
  <!-- Menu -->
  <?php include_once "./includes/menu.php" ?>

  <!-- Información cursos -->
  <h1>Tus cursos</h1>
  <div class="cursos" name="cursos" id="cursos">
    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>

      <div class="icons">
        <a href="./detalles-curso.php"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>

    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-gary-barnes-6231819.webp" alt="curso tijeras">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>
      <div class="icons">
        <a href="#"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>

    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-gary-barnes-6231990.webp" alt="curso regadera">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>
      <div class="icons">
        <a href="#"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>

    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-ketut-subiyanto-4132369.webp" alt="curso romero">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>
      <div class="icons">
        <a href="#"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>

    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-sasha-kim-9413757.webp" alt="curso plantar">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>
      <div class="icons">
        <a href="#"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>

    <div class="detalles-curso">
      <div class="img-curso">
        <img src="./img/images/pexels-teona-swift-6912856.webp" alt="curso cactus">
      </div>
      <h2>Titulo curso</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
        consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
        Blanditiis eligendi quaerat excepturi?</p>
      <div class="icons">
        <a href="#"><button class="btn">Ver curso</button></a>
        <div class="contenedor-hover">
          <img class="estrella" src="./img/icons/Fav.svg" alt="favoritos">
        </div>
      </div>
    </div>
  </div>

  <!-- Paginación de los cursos  -->

  <!-- Marquee & Footer -->
  <?php include_once "./includes/marquee.php";
  include_once "./includes/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="./scripts/estrellas.js"></script>
</body>

</html>
