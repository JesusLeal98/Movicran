<?php
session_start();
?>
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
            <a href="Inicio2.php" class="nav-link" data-toggle="pagehome">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="catalogo.php" class="nav-link" data-toggle="pagehome">Catalogo</a>
        </li>
        <li class="nav-item">
            <a href="servicios2.php" class="nav-link" data-toggle="pagehome">Servicios</a>
        </li>
    </ul>
    <section id="login">
        <div id="d">
            <?php
                session_start();
                if(isset($_SESSION["login"])){
                    echo "<h1> $_SESSION[login]</h1>";
                }
                else{
                    header("Location: https://movicran.000webhostapp.com/pagina/Inicio.php");
                }
            ?>
        </div>
    </section>
</div>
</nav>
<div class="carros">
<div id="ferrarilog">
<img src="img/ferrarilogo.png" alt="Logo Ferrari">
<button id="ferr" onclick="window.location.href='Ferraris2.php'">Ver mas...</button>
</div>
<div id="BMWlog">
<img src="img/BMW-logo.png" alt="Logo BMW">
<button id="bmw" onclick="window.location.href='BMW2.php'">Ver mas...</button>
</div>
<div id="Audilog">
<img src="img/audilogo.png" alt="Logo Audi">
<button id="aud" onclick="window.location.href='Audis2.php'">Ver mas...</button>
</div>
<div id="lamborghinilog">
<img src="img/LamborghiniLogo-1.png" alt="Logo Lamborghini">
<button id="lamb" onclick="window.location.href='Lamborghini2.php'">Ver mas...</button>
</div>
</div>
</body>
</html>