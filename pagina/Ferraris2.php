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
<body >
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
        <section id="centerF">
        <div class="Ferrari">
            <img src="img/ferrariGTB.png.jpg" alt="Ferrari GTB">
            <hgroup>
            <h1><strong>Ferrari GTB</strong></h1>
            <p>El Ferrari 488 GTB abre un nuevo capítulo en la historia de los ocho cilindros de la marca del 'Cavallino Rampante'. Esta nueva berlinetta aúna a la perfección la experiencia de Ferrari en la F1 y en el 'WEC' ('World Endurance Championship'), donde el 458 GT mantiene el título de Campeón del Mundo y ha ganado su categoría en las dos últimas ediciones de las 24 horas de Le Mans.
            236.719 €
            </p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="centerF">
        <div class="Ferrari">
            <img src="img/ferrari458.png.jpg" alt="Ferrari 458">
            <hgroup>
            <h1><strong>Ferrari 458</strong></h1>
            <p>El Ferrari 458 Italia es más que un digno sucesor del Ferrari F430, un biplaza con tracción trasera y motor central atmosférico de 8 cilindros en V y 578 CV que ha sido diseñado por Pininfarina. Va asociado a una caja de cambios automática de doble embrague de siete velocidades con un muy buen resultado, ya que realiza los saltos de marcha de forma muy rápida y eficaz.
            230.985 €
            </p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="centerF">
        <div class="Ferrari">
            <img src="img/ferrariff.png.jpg" alt="Ferrari FF">
            <hgroup>
            <h1><strong>Ferrari FF</strong></h1>
            <p>El nuevo Ferrari FF sustituye al 612 Scaglietti. Además, es el primer modelo de la marca con tracción a las cuatro ruedas, lo que le propone como un deportivo con una capacidad de tracción muy relevante. Monta un propulsor V12 de 660 CV con el que logra pasar de 0 a 100 km/h en 3,7 segundos y ofrece un interior verdaderamente práctico para cuatro pasajeros.
                299.561 €
            </p>
            </hgroup>
            <a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
            <a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
        </div>
        </section>
        <section id="centerF">
        <div class="Ferrari">
            <img src="img/ferraricalifornia.png.jpg" alt="Ferrari California T">
            <hgroup>
            <h1><strong>Ferrari California T</strong></h1>
            <p>Y el Ferrari California T unifica a la perfección el ADN deportivo de Ferrari, y la versatilidad que su techo duro retráctil y su configuración 2+2. En la parte mecánica, el Ferrari California monta un motor V8 turboalimentado de inyección directa de 3.855 centímetros cúbicos que ofrece 560CV de potencia y un par máximo de 755 Nm en la séptima marcha. Gracias a este propulsor, el California T acelera de 0 a 100 km/h en tan solo 3,6 segundos, y pasa de estar parado a 200 km/h en 11,2 segundos.
                214.448 €
            </p>
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