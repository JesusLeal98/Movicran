<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movicran</title>
    <link rel="stylesheet" href="css/stylus.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/si.css">
    
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
                <li class="nav-item">
                    <a href="catalogo.php" class="nav-link" data-toggle="pagehome">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a href="servicios.php" class="nav-link" data-toggle="pagehome">Servicios</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="form" action="Inicio.php" method="post">
                <p id="coelec">Correo electronico: rent_car@contact.es</p>
                <a id="btn1" href="login.php" class="nav-link" data-toggle="pagehome">Iniciar sesión</a>
            </form>
        </div>
    </nav>

    <section id="header">
    <section>
        <img src="Imagenes/carro_chido.png" alt="logo">
    </section>

</section>


<section id="middle">
    <section="center">
        <section>
            <hgroup>
                <h1 class="top">LA MANERA MAS FACIL & RAPIDA DE TENER UN AUTO <br> TO CREATE AWESOME WEBSITE
                </h1>
                <h2>RAPIDO Y SENCILLO </h2>
            </hgroup>
            <button id="read" onclick="window.location.href='registro.php'">Registrarse</button>
            <button id="go" onclick="window.location.href='Inicio.php'">Página de incio</button>
        </section>
</section>
</section>

<section id="abajo">
    <div class="item">
        <button id="desk"><i class="fa fa-medkit"></i></button>
        <p>
            <strong>Asistencia Medica</strong>
        </p>

        <p>Este es un servicio que te ofrecemos al momento de comprar o rentar un auto con nosotros

        </p>
        <hr/>

    </div>
    <div class="item">
        <button id="desk"><i class="fa fa-phone-square"></i></button>
        <p>
            <strong>Asistencia Telefonica 24/7</strong>
        </p>

        <p>Para cualquier duda o aclaracion puedes contactar con nuestros ejecutivos telefonicos, que te atenderan 24/7 los 365 dias del años
        </p>
        <hr/>

    </div>

    <div class="item">
        <button id="desk"><i class="fa fa-suitcase"></i></button>
        <p>
            <strong>Seguros</strong>
        </p>

        <p>Te ayudaremos en cualquier problema externo a ti con nuestro equipo de seguros</p>
        <hr/>

    </div>
    <div class="item">
        <button id="desk"><i class="fa fa-car"></i></button>
        <p>
            <strong>Mecanicos A Tu Servicios</strong>
        </p>

        <p>Un gran equipo de mecanicos estaran a tu disposicion 24/7</p>
        <hr/>

    </div>
</section>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min"></script>
    </body>

    

</html>