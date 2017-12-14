<?php
session_start();
?>
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
                    header("Location: https://movicran.000webhostapp.com/pagina/Inicio.php");
                }
            ?>
        </div>
    </section>
</div>
</nav>
<?php
$enlace = mysql_connect('localhost','id3957045_jesus','#Naruto89');
mysql_select_db('id3957045_paginaweb');
$resultado = mysql_query('SELECT titulo FROM audis;');
for($i=0;$i<mysql_num_rows($resultado);$i++){
?>
<section id="centerA">
<div class="Audi">
<img src="<?php
    $resultado = mysql_query('SELECT img FROM audis;');
    echo mysql_result($resultado,$i);
?>" alt="Audi A5">
<hgroup>
<h1><strong><?php
    $resultado = mysql_query('SELECT titulo FROM audis;');
    echo mysql_result($resultado,$i);
?></strong></h1>
<p><?php
    $resultado = mysql_query('SELECT descrpcion FROM audis;');
    echo mysql_result($resultado,$i);
?></p>
</hgroup>
<a id="comprar" href="vip.php" class="nav-link">Comprar Ahora</a>
<a id="rentar" href="vip.php" class="nav-link">Rentar Ahora</a>
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