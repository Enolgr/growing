<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>

    <!-- CSS & normalize -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/perfil-usuario.css">
</head>

<body>
    <?php include_once "./includes/menu.php" ?>
    <main>
        <h1 class="titulo-card">Gestiona tu perfil</h1>
        <section>
            <div class="card-oscura">
                <h2>Mis pedidos</h2>
                <p>Accede al historial de tus pedidos, Lorem ipsum odor amet, consectetuer adipiscing elit. Netus
                    pretium dictum auctor integer magnis suscipit justo orci.</p>
                <button type="submit" class="boton"><a href="tusPedidos.php">Ver mis pedidos</a></button>
            </div>

            <div class="card-oscura">
                <h2>Mis cursos</h2>
                <p>Accede al historial de tus cursos, Lorem ipsum odor amet, consectetuer adipiscing elit. Netus pretium
                    dictum auctor integer magnis suscipit justo orci.</p>
                <button>Ver mis cursos</button>
            </div>
        </section>

        <section>
            <div>
                <img>
            </div>
            <div>
                <form method="post" action="***.php">
                    <div class="tarjetaRegistro">
                        <input type="text" name="name" id="name" placeholder="Nombre" required>
                        <input type="text" name="surname" id="surname" placeholder="Apellidos" required>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
                        <input type="text" name="pago" id="pago" placeholder="Método de pago" required>
                    </div>
                </form>
            </div>
        </section>



    </main>
    <?php include_once "./includes/marquee.php" ?>
    <?php include_once "./includes/footer.php" ?>
</body>

</html>