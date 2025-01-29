<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Descripción del curso</title>
   <link rel="stylesheet" href="./styles/normalize.css" />
   <link rel="stylesheet" href="./styles/general.css" />
</head>

<body>
   <!-- Aquí iría el nav -->

   <!-- Informacion del curso -->
   <div class="info-curso">
      <h1 id="">Título</h1>
      <div class="description">
         <p id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatum quae minima est sequi
            quibusdam dicta laudantium, magni autem dolorem nostrum magnam perferendis suscipit impedit at fuga ad
            facilis in.</p>
      </div>
      <div class="detalles-curso">
         <div class="dificultad">
            <p id="">Dificultad</p>
            <!-- Falta hacer el scroll dinámico de las estrellas -->
            <img src="./img/icons/5stars.svg" alt="">
         </div>
         <div class="duracion">
            <p id="">Duracion</p>
            <p id="tiempo">2h</p>
         </div>
      </div>

      <div class="botones">
         <button class="btn">Ver curso</button>
         <button class="btn">Materiales</button>
      </div>
      
      <div class="img-curso">
         <img src="./img/images/pexels-gary-barnes-6231819.webp" alt="curso tijeras">
      </div>
   </div>

   <!-- Otros cursos -->
   <div class="otros-cursos"></div>
   <h2>Otros cursos relacionados</h2>
   <div class="cursos">
      <div class="detalles-curso">
         <div class="img-curso">
            <img src="./img/images/pexels-cottonbro-4503269.webp" alt="curso palas">
         </div>
         <h2>Titulo curso</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam totam beatae, dignissimos
            consequatur odit? Eaque officiis quam illo aut velit. Nemo cumque obcaecati aliquid exercitationem.
            Blanditiis eligendi quaerat excepturi?</p>

         <!-- Redirigir a la pagina de detalles del curso -->
         <a href="#"><button>Ver curso</button></a>

         <div class="icons">
            <img src="./img/icons/Fav.svg" alt="favoritos">
         </div>
      </div>
   </div>

   <?php include_once("./includes/marquee.php") ?>

   <!-- Aqui va el footer -->

</body>

</html>