<?php
if(isset($_POST["enviar"])){
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $mysqli = new mysqli("localhost", "id3957045_jesus", "#Naruto89", "id3957045_paginaweb");
    $consulta = "SELECT * FROM usuarios";
    $resultado = $mysqli->query($consulta);
    
    while($fila=$resultado->fetch_assoc()){
        if($fila["correo"]==$correo && $fila["password"]==$password){
            $autenticado = true;
        }
    }
}
    
?>
<script>
    alert("Seras redireccionado a la pagina principal");
</script>
<meta http-equiv = "refresh" content = ".0001; url = https://movicran.000webhostapp.com/pagina/Inicio2.php">