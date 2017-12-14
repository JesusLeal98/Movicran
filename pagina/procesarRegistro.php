<?php
    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $mysqli = new mysqli("localhost", "id3957045_jesus", "#Naruto89", "id3957045_paginaweb");
        $consulta = "INSERT INTO usuarios (nombre,correo,password) VALUES ('$nombre','$correo','$password')";

        $resultado = $mysqli->query($consulta);
    }
?>
<script>
    alert("Seras redireccionado a la pagina principal");
</script>
<meta http-equiv = "refresh" content = ".0001; url = https://movicran.000webhostapp.com/pagina/Inicio.php">