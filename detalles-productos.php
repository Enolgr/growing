<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles producto</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/detalles-productos.css">
</head>

<body>
    <?php include_once "./includes/menu.php" ?>

    <section class="card" id="card">

            <div class="producto">

                <div class="texto-producto" >

                    <div class="texto" >

                    <h3>Nombre producto</h3>
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Mus quisque condimentum volutpat maximus, potenti interdum ridiculus! Ornare integer taciti luctus nascetur cursus inceptos aptent natoque. Condimentum volutpat nascetur; sem urna etiam magna accumsan varius mus. Curae natoque fringilla pulvinar nam morbi quis torquent. Aptent ex facilisi posuere diam pretium pretium; diam commodo. Morbi faucibus porttitor urna elit; orci cras aenean ligula porta? Sociosqu interdum eu sem; montes malesuada platea nulla at. Dictum maecenas ex duis tempus urna inceptos aptent sem sodales.</p>

                    </div>

                    <div class="contenedor-precio">

                        <p>6,00€</p>
                        <button class="btn" >Añadir al carrito</button>

                    </div>

                </div>

                <div class="imagen-producto">

                    <img src="./img/images/img-cursos.webp" alt="">

                </div>

            </div>

    </section>

    <h2 class="info-titulo">Instrucciones</h2>

    <section class="card info-producto">

        <div class="contenedor-instrucciones">

            <div class="contenedor-info dificultad">

                <h3>1 .Dificultad</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info toxicidad">

                <h3>2. Toxicidad</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info luz">

                <h3>3. Luz</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info riesgo">

                <h3>4. riesgo</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

            <div class="linea" ></div>

            <div class="contenedor-info temporada">

                <h3>5. Temporada</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, minima magnam temporibus maiores, exercitationem, dolores laborum deserunt voluptas repudiandae voluptates provident eos et? Nobis, laborum? Delectus placeat expedita deleniti recusandae!</p>

            </div>

        </div>

    </section>

    <h2 id="otros-productos" >Otros productos relacionados</h2>

    <section class="otros-productos">

        <div class="producto-card card">

            <img src="./img/images/img-cursos.webp" alt="">

            <p class="nombre" >Producto</p>

            <p class="precio" >0€</p>

            <button class="btn">Añadir al carrito</button>

        </div>

                <div class="producto-card card">

            <img src="./img/images/img-cursos.webp" alt="">

            <p class="nombre" >Producto</p>

            <p class="precio" >0€</p>

            <button class="btn">Añadir al carrito</button>

        </div>

        <div class="producto-card card">

            <img src="./img/images/img-cursos.webp" alt="">

            <p class="nombre" >Producto</p>

            <p class="precio" >0€</p>

            <button class="btn">Añadir al carrito</button>

        </div>

    </section>

    <?php include "./includes/marquee.php" ?>
    <?php include "./includes/footer.php" ?>
</body>

</html>