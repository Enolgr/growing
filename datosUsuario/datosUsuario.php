<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
</head>
<body>
    <form method="POST" action="***.php">
        <div class="tarjetaRegistro">
            <input type="file" name="fotoUser" id="fotoUser">
            <h2>Nombre User</h2>
            <div class="rangoTarifa"></div>
            <input type="text" name="nombreUser" id="nombreUser" placeholder="Nombre" required>
            <input type="text" name="emailUser" id="emailUser" placeholder="Email" required>
            <input type="text" name="pagoUser" id="pagoUser" placeholder="Método de pago" required>
            <input type="text" name="direccionUser" id="direccionUser" placeholder="Dirección" required>
            <a href="#">Cambiar contraseña</a>
            <button type="button">Mis pedidos</button>
            <button type="button">Mis cursos</button>
        </div>
    </form>
</body>
</html>