<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/reproductor.css">
</head>
<body>
    <?php include_once "./includes/menu.php"; ?>
    <main>
        <div class="reproductor">
            <div class="tituloReproductor">
                <a href="./mis-cursos.php"><img src="./img/icons/green-arrow-left.svg"></a>
                <h2>Capítulo 1 - Título curso</h2>
            </div>
            <div class="video">
                <div id="play-button">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id="play-icon" src="./img/icons/play.svg" alt="Play"></a>
                </div>
            </div>
            <div class="button-caps">
                    <button class="btn" id="button-left">Anterior capítulo</button>
                    <button class="btn" id="button-right">Siguiente capítulo</button>
            </div>
            
        </div>


    <section class="instruciones">

    <h2 class="info-instruciones">Caítulos del curso</h2>

        <div class="card info-producto">

            <div class="contenedor-info">

                <h3>1 .Nombre capítulo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info">

                <h3>2. Nombre capítulo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info">

                <h3>3. Nombre capítulo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info">

                <h3>4. Nombre capítulo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info">

                <h3>5. Nombre capítulo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

        </div>

    </section>
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
</body>
</html>