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

    <!-- Información cursos -->
    <section class="cursos">
        <h1>Nuestros cursos online</h1>
        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <!-- Redirigir a la pagina de detalles del curso -->
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <!-- Icono para añadir a favoritos -->
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-gary-barnes-6231819.webp" alt="curso tijeras">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-gary-barnes-6231990.webp" alt="curso regadera">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>

        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-ketut-subiyanto-4132369.webp" alt="curso romero">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>


        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-sasha-kim-9413757.webp" alt="curso plantar">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>


        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-teona-swift-6912856.webp" alt="curso cactus">
            </div>
            <h2 class="nombre-curso">Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>
            <a href="#"><button class="boton" id="boton">Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>
    </section>

    <!-- Aqui iria la paginación de los cursos  -->
    <!-- Newsletter -->
    <?php include_once "./includes/newsletter.php"; ?>

    <!-- Marquee & Footer -->
    <?php include_once "./includes/marquee.php";
    "./includes/footer.php"; ?>
</body>

</html>