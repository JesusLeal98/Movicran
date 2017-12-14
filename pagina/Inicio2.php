<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehiculos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/si2.css">
    <style>
        body {
            padding-top: 3.5rem;
        }
        
        .form-group {
            margin-bottom: 0;
            display: inline-block;
            vertical-align: top;
        }

        #loader {
            display: none;
            width: 53px;
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
                            header("Location: https://movicran.000webhostapp.com/pagina/Inicio.php");
                        }
                    ?>
                </div>
            </section>
        </div>
    </nav>

    <main role="main">
        <section class="center">
            <section>
                <hgroup>
                    <h1 class="display-3"><strong>¿Necesitas un carro?</strong></h1>
                    <h2>Es tan facil que con solo darle clic lo tendras.</h2>
                </hgroup>
            </section>
        </section>
    </main>
    
    <section class="abajo2">
    <a class="btn btn-primary btn-lg" href="catalogo2.php">Ver coches</a>
    </section>
    <section class="info">
            <a class="i1" href="https://twitter.com/"><i class="fa fa-twitter fa-5x"></i></a>
            <a class="i2" href="https://www.facebook.com/"><i class="fa fa-facebook fa-5x"></i></a>
            <a class="i3" href="https://www.youtube.com/"><i class="fa fa-youtube fa-5x"></i></a>
            <a class="i4" href="https://plus.google.com/"><i class="fa fa-google-plus fa-5x"></i></a>
            <a class="i5" href="https://www.instagram.com/"><i class="fa fa-instagram fa-5x"></i></a>
            <a class="i6" href="https://www.skype.com/es/new/"><i class="fa fa-skype fa-5x"></i></a>
    </section>
    <footer class="container">
        <p>&copy; Mi compañía Movicran</p>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min"></script>

    <script>
        $(document).ready(function(){
            $("#ingresar").on("click",function(evento){
                evento.preventDefault();

                var caja_correo = $("#correo").val();
                var caja_pass = $("#pass").val();

                $('#loader').show();

                $.ajax({
                    type: "POST",
                    url: "localhost/pagina/log.php",
                    data: {
                        correo: caja_correo,
                        pass: caja_pass
                    }
                }).done(function(datos){
                    setTimeout(function() {
                        $('#loader').hide();
                    },8000);
                    if(datos == 'Usuario correcto'){
                        window.location.href = "localhost/pagina/registro.php"
                    }
                    
                }).fail(function(error){
                    setTimeout(function() {
                        $('#loader').hide();
                    },8000);
                }); 
            });
        });
    </script>
</body>
</html>