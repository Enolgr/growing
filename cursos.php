<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cursos</title>
    <!-- Normalize & CSS -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/cursos.css">
</head>

<body>
    <!-- Menu -->
    <?php include_once "./includes/menu.php" ?>

    <h1>Nuestros cursos online</h1>

    <!-- Información cursos -->
    <section class="cursos">
        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
              <!-- Redirigir a la pagina de detalles del curso -->
                <a href="#"><button class="boton" id="boton">Ver curso</button></a>
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

    </section>

    <div class="paginacion">
            <button class="pagina" >1</button>
            <button class="pagina" >2</button>
            <button class="pagina" >3</button>
            <button class="pagina" >4</button>
            <button class="pagina" >5</button>
            <button class="pagina" >...</button>
            <button class="pagina" >10</button>
    </div>

    <!-- Aqui iria la paginación de los cursos  -->
    <!-- Newsletter -->
    <?php include_once "./includes/newsletter.php"; ?>

    <!-- Marquee & Footer -->
    <?php include_once "./includes/marquee.php";
    include_once "./includes/footer.php"; ?>
</body>

</html>