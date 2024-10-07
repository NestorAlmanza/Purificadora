
<?php

if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger">LOS CAMPOS SE ENCUENTRAN VACIOS</div>';
        
    }else{
        $nombre=$_POST["usuario"];
        $contraseña=$_POST["password"];
        $sql=$conexion->query("select * from usuario where nombre='$nombre' and contraseña='$contraseña' ");
        if ($datos=$sql->fetch_object()){
            header("location:mensual.php");
        }else{
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}

?>