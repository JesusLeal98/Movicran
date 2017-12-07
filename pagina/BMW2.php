<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ca.css">
    <link rel="stylesheet" href="css/si.css">
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
            <a href="catalogo2.php" class="nav-link" data-toggle="pagehome">Catalogo</a>
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
                    header("Location: http://localhost/pagina/Inicio.php");
                }
            ?>
        </div>
    </section>
</div>
</nav>
        <section id="center">
        <div class="bmw">
            <img src="img/bmw-convertible.jpg" alt="BMW 4 Series Comvertible">
            <hgroup>
            <h1><strong>BMW Serie 4 Convertible 2018</strong></h1>
            <p>El BMW Serie 4 Convertible: Tome el sol, sienta el viento y disfrute esos momentos especiales de conducción. Con agilidad deportiva y dinámica emotiva – acompañadas por un impresionante diseño aerodinámico y un equipo elegante lleno de funcionalidades innovadoras. El contemporáneo supremo define libertad en cuatro ruedas.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="bmw">
            <img src="img/bmw-iperformance.jpg" alt="BMW Iperformance-330e">
            <hgroup>
            <h1><strong>BMW Serie 3 iPerformance 2018</strong></h1>
            <p>El BMW Serie 3 cuenta con  el consumo de un compacto. Con la tecnología BMW eDrive de BMW EfficientDynamics, se puede alcanzar una autonomía de unos 35 kilómetros en el modo totalmente eléctrico, con cero emisiones y sin consumir combustible. La batería de alto voltaje se aloja debajo del maletero. Este, que tiene un volumen de 360 litros.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="bmw">
            <img src="img/bmwM5.jpg" alt="Lamborghini One Off">
            <hgroup>
            <h1><strong>BMW M5 con M xDrive</strong></h1>
            <p>Con emocionante y elegante forma. Más potente que nunca. La nueva generación del BMW M5 es la total declaración de un nivel de ingeniería supremo e inteligencia de conducción innovadora. Con dimensiones hasta ahora inimaginables en la dinámica de conducción que superan los límites.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="bmw">
            <img src="img/bmw-X2.jpg" alt="Lamborghini Concept Asterion">
            <hgroup>
            <h1><strong>BMW X2 </strong></h1>
            <p>Totalmente único. Extremadamente excepcional. El nuevo BMW X2 deja muy claras sus ambiciones deportivas a primera vista. Gracias a su audaz atletismo, ofrece un rendimiento dinámico y ágil que es inigualable en su clase. Aunado al interior de alta calidad y a muchas tecnologías innovadoras.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
    </section>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>