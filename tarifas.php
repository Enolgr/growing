<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifas</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
</head>
<body>

<section class="contenedor_tarifas" >
<div class="contenedor_titulo" >
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

<div class="metodo_pago" >
    <div class="metodo" >
        <div  class="oferta" >
            <p>Oferta</p>
        </div>
        <div class="año" >
            <p>año</p>
        </div>
        <div class="selector" >
            <img src="" alt="">
        </div>
        <div class="mes" >
            <p>Mes</p>
        </div>
    </div>
</div>

<div class="tarifas" >

<div class="card">

    <div class="titulo_tarifa" >
    <h2 class="nombre_tarifa" >Bonsai</h2>
    <p class="text_tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor_precio" >
        <p class="precio" >7€</p>
        <p class="info_precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor_ventajas" >
        <p class="ventaja" >Ventaja 1</p>
        <p class="ventaja" >Ventaja 2</p>
        <p class="ventaja" >Ventaja 3</p>
    </div>

    <button>Este es mi plan</button>

</div>

<div class="card">

<div class="mejor_opcion" >
    <p>Mejor opcion</p>
</div>

    <div class="titulo_tarifa" >
    <h2 class="nombre_tarifa" >Jardin</h2>
    <p class="text_tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor_precio" >
        <p class="precio" >10€</p>
        <p class="info_precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor_ventajas" >
        <p class="ventaja" >Ventaja 1</p>
        <p class="ventaja" >Ventaja 2</p>
        <p class="ventaja" >Ventaja 3</p>
    </div>

    <button>Empecemos</button>

</div>

<div class="card">

    <div class="titulo_tarifa" >
    <h2 class="nombre_tarifa" >Amazonas</h2>
    <p class="text_tarifa" >Quisque donec nibh diam tellus integer eros.</p>
    </div>
    
    <div class="contenedor_precio" >
        <p class="precio" >13€</p>
        <p class="info_precio" >Precio por mes, pago anual</p>
    </div>

    <div class="contenedor_ventajas" >
        <p class="ventaja" >Ventaja 1</p>
        <p class="ventaja" >Ventaja 2</p>
        <p class="ventaja" >Ventaja 3</p>
    </div>

    <button>Quiero este plan</button>

</div>
</div>
</section>

<?php include("./includes/marquee-solid.php") ?>

<section class="contenedor_cursos_top" >

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

<button>Boton 1</button>
</section>

<section class="contenedor_opiniones" >

<div>
    <div>

        <h1 class="titulo opiniones" >¿Qué opinan sobre nuestros cursos?</h1>

        <div class="opiniones" >
            <div class="opinion" >
                <img src="./img/images/persona-random1.webp" alt="" class="avatar" >
                <p class="name_user" >Nombre persona</p>
                <p class="descripcion_reseña" >reseña</p>
            </div>

            <div class="opinion" >
                <img src="./img/images/persona-random2.webp" alt="" class="avatar" >
                <p class="name_user" >Nombre persona</p>
                <p class="descripcion_reseña" >reseña</p>
            </div>
        </div>
        <div class="paginacino" style="background-color: blue; height: 10px; width: 30px;">
            
        </div>
    </div>
</div>

</section>

<section class="contenedor_form">

<div class="form">
<h1>Únete a nuestra newsletter</h1>

<form action="">
    
<div class="campos">
    <input type="text" class="nombre">
    <input type="text" class="email">
</div>

<button class="enviar" >Enviar</button>

</form>

</div>

</section>

<?php include("./includes/marquee.php") ?>

</body>
</html>