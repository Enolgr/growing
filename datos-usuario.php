<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
</head>
<body>
    <form method="post" action="***.php">
        <div class="tarjetaRegistro">
            <input type="file" name="fotoUser" id="fotoUser">
            <h2>Nombre User</h2>
            <div class="rangoTarifa"></div>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
            <input type="text" name="email" id="email" placeholder="Email" required>
            <input type="text" name="pago" id="pago" placeholder="Método de pago" required>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
            <a href="#">Cambiar contraseña</a>
            <button type="button" id="pedidos">Mis pedidos</button>
            <button type="button" id="cursos">Mis cursos</button>
        </div>
    </form>
</body>
</html>