<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <section>
        <div class="">
            <form action="registro.php" method="post">
                <div clas="">
                    <h1>REGISTRO</h1>
                    <input type="text" id="name" name="name" placeholder="Nombre" required>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <input type="password" id="pass" name="pass" placeholder="Contraseña" required>
                    <input type="password" id="pass2" name="pass2" placeholder="Confirmar Contraseña" required>
                    <button type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>