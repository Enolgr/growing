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
                <img src="./img/icons/green-arrow-left.svg">
                <h2>Capítulo 1, Título curso</h2>
            </div>
            <div class="video">
                <div id="play-button">
                    <img id="play-icon" src="./img/icons/play.svg" alt="Play">
                </div>
            </div>
            <div class="button-caps">
                    <button class="btn" id="button-left">Anterior capítulo</button>
                    <button class="btn" id="button-right">Siguiente capítulo</button>
            </div>
            
        </div>
        <div class="capitulos">
            <div class="tituloCapitulos">
                <h2>Capítulos del curso</h2>
            </div>
            <div class="listaCapitulos">
                <ul>
                    <li id="chapter-01"><a href="*.mp4">
                        <p>Capitulo 1</p>
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Mus quisque condimentum volutpat maximus, potenti interdum ridiculus! Ornare integer taciti luctus nascetur cursus inceptos aptent natoque. Condimentum volutpat nascetur; sem urna etiam magna accumsan varius mus. Curae natoque fringilla pulvinar nam morbi quis torquent. Aptent ex facilisi posuere diam pretium pretium; diam commodo. Morbi faucibus porttitor urna elit; orci cras aenean ligula porta? Sociosqu interdum eu sem; montes malesuada platea nulla at. Dictum maecenas ex duis tempus urna inceptos aptent sem sodales.</p></a></li>
                    <li><a href="*.mp4">Capitulo 2</a></li>
                    <li><a href="*.mp4">Capitulo 3</a></li>
                    <li><a href="...">...</a></li>
                </ul>
            </div>
        </div>
    </main>
    <?php include_once "./includes/marquee.php"; ?>
    <?php include_once "./includes/footer.php"; ?>
</body>
</html>