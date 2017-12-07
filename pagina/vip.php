<?php
    session_start();
    if(isset($_SESSION["login"])){
        echo "<h1>Muchas gracias por tu confirmación $_SESSION[login]</h1>";
        echo "<h2>Revisa en tu correo electronico para saber sobre tu compra o renta</h2>";
    }
?>