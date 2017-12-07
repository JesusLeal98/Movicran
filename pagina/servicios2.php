<doctype html>
    <html>

    <head>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="css/stylus.css">
        <title="movicran.com">
            </title>
            <meta charset="utf-8" />
            <script>
                window.addEventListener("load", function() {
                    alert("Bienvenido a MoviCran");
                    var botonStart = document.getElementById("read");
                    console.log(botonStart)

                    botonStart.addEventListener("click", function() {
                        document.location.href = "Inicio2.php";
                    })
                })
            </script>
    </head>

    <body>
        <section id="header2">
            <i class="fa fa-envelope"></i>
            <p>rent_car@contact.es</p>
            <i class="fa fa-phone"></i>
            <p>+52 618 255 157</p>


        </section>




        <hr/>
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
                    <button id="read">Pagina de inicio</button>
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

    </body>

    </html>