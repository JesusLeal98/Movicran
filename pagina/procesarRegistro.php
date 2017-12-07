<?php
    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $mysqli = new mysqli("localhost","root","#Naruto89","programacionweb");
        $consulta = "INSERT INTO usuarios (nombre,correo,password) VALUES ('$nombre','$correo','$password')";

        $resultado = $mysqli->query($consulta);
    }
?>
<script>
    alert("Seras redireccionado a la pagina principal");
</script>
<meta http-equiv = "refresh" content = ".0001; url = http://localhost/pagina/Inicio.php">