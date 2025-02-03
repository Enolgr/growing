<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifas</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/tarifas.css">
</head>
<body>

<?php include_once "./includes/menu.php" ?>

<section class="contenedor-tarifas">
<div class="contenedor-titulo">
    <div class="titulo" >
        <h1 >Aprende sobre botánica con el plan ideal para ti</h1>
    </div>
    <div class="iconos" >
        <img src="./img/icons/planta4.svg" alt="">
        <img src="./img/icons/planta5.svg" alt="">
        <img src="./img/icons/planta6.svg" alt="">
        <img src="./img/icons/planta7.svg" alt="">
        <img src="./img/icons/planta8.svg" alt="">
    </div>
</div>

    <div class="metodo" >
        <div  id="oferta" >
            <p>Oferta</p>
        </div>
        <div class="año" >
            <p>Anual</p>
        </div>
        <div class="selector" >
            <img src="" alt="">
        </div>
        <div class="mes" >
            <p>Mensual</p>
        </div>
    </div>

<div class="tarifas" >

<div class="card">

    <div class="titulo-tarifa" >
    <h2 class="nombre-tarifa" >Bonsai</h2>
    <p class="text-tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor-precio" >
        <p class="precio" >7€</p>
        <p class="info-precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor-ventajas" >
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 1</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 2</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 3</p></div>
    </div>

    <button class="btn">Este es mi plan</button>

</div>

<div class="card">

    <div id="mejor-opcion" >
        <p>Mejor opcion</p>
    </div>

    <div class="titulo-tarifa" >
    <h2 class="nombre-tarifa" >Jardin</h2>
    <p class="text-tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor-precio" >
        <p class="precio" >10€</p>
        <p class="info-precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor-ventajas" >
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 1</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 2</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 3</p></div>
    </div>

    <button class="btn" >Empecemos</button>

</div>

<div class="card">

    <div class="titulo-tarifa" >
    <h2 class="nombre-tarifa" >Amazonas</h2>
    <p class="text-tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor-precio" >
        <p class="precio" >13€</p>
        <p class="info-precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor-ventajas" >
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 1</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 2</p></div>
        <div class="ventaja" ><img src="./img/icons/Frame 141.svg" alt=""><p  >Ventaja 3</p></div>
    </div>

    <button class="btn" >Quiero este plan</button>

</div>
</div>
</section>

<?php include("./includes/marquee-solid.php") ?>

<section class="contenedor-cursos-top" >

<h2>Los cursos más top</h2>

<div class="cursos" >

<div class="curso" >
    <img src="./img/images/img-cursos.webp" alt="">
    <p>Titulo curso</p>
</div>

<div class="curso" >
    <img src="./img/images/img-cursos.webp" alt="">
    <p>Titulo curso</p>
</div>

<div class="curso" >
    <img src="./img/images/img-cursos.webp" alt="">
    <p>Titulo curso</p>
</div>

<div class="curso" >
    <img src="./img/images/img-cursos.webp" alt="">
    <p>Titulo curso</p>
</div>

</div>

<button class="btn">Boton 1</button>

</section>

<section class="contenedor-opiniones" >

<div>
    <div>

        <h1 class="titulo-opiniones" >¿Qué opinan sobre nuestros cursos?</h1>

        <div class="opiniones" >
            <div class="opinion" >
                <img src="./img/images/persona-random1.webp" alt="" class="avatar" >
                <p class="name-user" >Laura Martínez</p>
                <p class="descripcion-reseña" >Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at. Ipsum suscipit erat finibus facilisi varius metus donec ridiculus.</p>
            </div>

            <div class="opinion" >
                <img src="./img/images/persona-random2.webp" alt="" class="avatar" >
                <p class="name-user" >Chiara</p>
                <p class="descripcion-reseña" >Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at. Ipsum suscipit erat finibus facilisi varius metus donec ridiculus.</p>
            </div>

            <div class="paginacion" style="background-color: blue; height: 10px; width: 30px;">
                
            </div>
        </div>
        <div class="paginacino" style="background-color: blue; height: 10px; width: 30px;">
            
        </div>
    </div>
</div>

</section>
<section class="contenedor-form">

<?php

include "./includes/newsletter.php";
include "./includes/marquee.php";
include "./includes/footer.php" ?>

?>

</body>
</html>