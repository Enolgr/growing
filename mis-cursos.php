<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis cursos</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
</head>

<body>
    <!-- Menu -->
    <?php include_once "./includes/menu.php" ?>

    <!-- Información cursos -->
    <h1>Mis cursos</h1>
    <div class="cursos" name="cursos" id="cursos">
        <div class="detalles-curso">
            <div class="img-curso">
                <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
            </div>
            <h2>Titulo curso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
                consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
                Blanditiis eligendi quaerat excepturi?</p>

            <!-- Redirigir a la pagina de detalles del curso -->
            <a href="./detalles-curso.php"><button>Ver curso</button></a>

            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
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
            <a href="#"><button>Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
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
            <a href="#"><button>Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
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
            <a href="#"><button>Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
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
            <a href="#"><button>Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
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
            <a href="#"><button>Ver curso</button></a>
            <div class="icons">
                <img src="./img/icons/Fav.svg" alt="favoritos">
            </div>
        </div>
    </div>

    <!-- Paginación de los cursos  -->

    <!-- Newsletter -->
    <?php include_once "./includes/newsletter.php"; ?>
    <!-- Marquee & Footer -->
    <?php include_once "./includes/marquee.php"; "./includes/footer.php"; ?>


</body>

</html>