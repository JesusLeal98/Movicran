<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <h1>Registro</h1>
    <form action="procesarRegistro.php" method="post">
    <section id="middle">
        <div id="reg">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div id="reg2">
            <label for="correo">Correo:</label>
            <input type="email" name="correo">
        </div>
        <div id="reg3">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div id="button">
            <button id="btn" type="submit" name="enviar" value="registrarse">Registrarse</button>
        </div>
    </section>
    </form>
</body>