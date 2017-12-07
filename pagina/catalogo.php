<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Movicran</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="css/cat.css">
<style>
    body {
        padding-top: 3.5rem;
    }
    
    .form-group {
        margin-bottom: 0;
        display: inline-block;
        vertical-align: top;
    }


</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Venta y Renta</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="Inicio.php" class="nav-link" data-toggle="pagehome">Inicio</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link" data-toggle="pagehome">Catalogo</a>
            </li>
            <li class="nav-item active">
                <a href="servicios.php" class="nav-link" data-toggle="pagehome">Servicios</a>
            </li>
        </ul>
        <form class="navbar-form navbar-right" role="form" action="Inicio.php" method="post">
            <p id="coelec">Correo electronico: rent_car@contact.es</p>
            <a id="btn1" href="login.php" class="nav-link" data-toggle="pagehome">Iniciar sesión</a>
        </form>
    </div>
</nav>
<div class="carros">
<div id="ferrarilog">
<img src="img/ferrarilogo.png" alt="Logo Ferrari">
<button id="ferr" onclick="window.location.href='Ferraris.php'">Ver mas...</button>
</div>
<div id="BMWlog">
<img src="img/BMW-logo.png" alt="Logo BMW">
<button id="bmw" onclick="window.location.href='BMW.php'">Ver mas...</button>
</div>
<div id="Audilog">
<img src="img/audilogo.png" alt="Logo Audi">
<button id="aud" onclick="window.location.href='Audis.php'">Ver mas...</button>
</div>
<div id="lamborghinilog">
<img src="img/LamborghiniLogo-1.png" alt="Logo Lamborghini">
<button id="lamb" onclick="window.location.href='lamborghini.php'">Ver mas...</button>
</div>
</div>
</body>
</html>