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
            <a href="Inicio.php" class="nav-link" data-toggle="pagehome">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="catalogo.php" class="nav-link" data-toggle="pagehome">Catalogo</a>
        </li>
        <li class="nav-item">
            <a href="servicios1.php" class="nav-link" data-toggle="pagehome">Servicios</a>
        </li>
    </ul>
    <form class="navbar-form navbar-right" role="form" action="Inicio.php" method="post">
        <p id="coelec">Correo electronico: rent_car@contact.es</p>
        <a id="btn1" href="login.php" class="nav-link" data-toggle="pagehome">Iniciar sesión</a>
    </form>
</div>
</nav>
<?php
$enlace = mysql_connect('localhost','id3957045_jesus','#Naruto89');
mysql_select_db('id3957045_paginaweb');
$resultado = mysql_query('SELECT titulo FROM ferraris;');
for($i=0;$i<mysql_num_rows($resultado);$i++){
?>
<section id="centerF">
<div class="Ferrari">
<img src="<?php
    $resultado = mysql_query('SELECT img FROM ferraris;');
    echo mysql_result($resultado,$i);
?>" alt="Ferrari GTB">
<hgroup>
<h1><strong><?php
    $resultado = mysql_query('SELECT titulo FROM ferraris;');
    echo mysql_result($resultado,$i);
?></strong></h1>
<p><?php
    $resultado = mysql_query('SELECT descrpcion FROM ferraris;');
    echo mysql_result($resultado,$i);
?></p>
</hgroup>
<a id="comprar" href="login.php" class="nav-link">Comprar Ahora</a>
<a id="rentar" href="login.php" class="nav-link">Rentar Ahora</a>
</div>
</section>
<?php
}
?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min"></script>
</body>
</html>