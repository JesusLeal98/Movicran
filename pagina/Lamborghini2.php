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
        <div class="lamborgini">
            <img src="img/Lamborghini-Huracan.png" alt="Lamborghini Huracán">
            <hgroup>
            <h1><strong>Lamborghini Huracán</strong></h1>
            <p>El Huracán, con su motor V10 aspirado de 610 CV, es capaz de llevarle de 0 a 100 km/h en 3,2 segundos y de garantizarle al mismo tiempo toda la tecnología necesaria para poder conducirlo de la mejor manera posible.
Diseñado para garantizar las mejores prestaciones y ser controlable en cualquier situación de conducción, es fácil de llevar al límite y extremadamente emocionante, gracias a tecnologías como el cambio Lamborghini Doppia Frizione (LDF) y el sistema de tracción total con control electrónico.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="lamborgini">
            <img src="img/Aventador.png" alt="Lamborghini Aventator">
            <hgroup>
            <h1><strong>Lamborghini Aventator</strong></h1>
            <p>El Aventador fue creado con el objetivo de adelantarse al futuro, como se refleja en el uso de tecnologías innovadoras, tales como el motor V12, y en el uso de la fibra de carbono.
Verdaderas obras maestras de diseño que expresan dinamismo y agresividad y que han hecho del monocasco de carbono su punta de lanza. El interior del Aventador combina tecnologías de altísimo nivel y equipamientos de lujo con materiales de altísima calidad magistralmente elaborados, como exige la mejor tradición italiana.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="lamborgini">
            <img src="img/Lamborghini-Veneno-Roadsterpng.png" alt="Lamborghini One Off">
            <hgroup>
            <h1><strong>Lamborghini One Off</strong></h1>
            <p>Los One-Off son Lamborghini más exclusivos, fabricados en edición limitada para un reducido y selectísimo número de clientes. Los One-Off, auténtica tecnología punta en el ámbito de los superdeportivos, representan el espíritu Lamborghini más puro en todos los aspectos y cuentan con las características más avanzadas disponibles, tanto en su diseño como en su tecnología</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="center">
        <div class="lamborgini">
            <img src="img/Lamborghini-Asterion.png" alt="Lamborghini Concept Asterion">
            <hgroup>
            <h1><strong>Lamborghini Concept Asterion</strong></h1>
            <p>Los modelos más visionarios, ejemplares únicos destinados a definir los límites más altos de tecnología y diseño. Presentados en los Salones Internacionales más importantes, ofrecen una mirada exclusiva a las soluciones más innovadoras que Lamborghini podría adoptar en sus futuros modelos de serie.</p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
    </section>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min"></script>
</body>
</html>