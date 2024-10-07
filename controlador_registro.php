
<?php

if (!empty($_POST["btningresar"])){
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["correos"]) or empty($_POST["contraseñas"])){
        echo '<div class="alert alert-danger">CAMPOS VACIOS</div>';
    }else{
      
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $correos=$_POST["correos"];
        $contraseñas=$_POST["contraseñas"];
        $sql=$conexion->query(" insert into usuario(nombre,apellido,correo,contraseña)values('$nombres','$apellidos','$correos','$contraseñas')");
        if ($sql==1){
            echo '<div class="alert alert-success">Usuario Registrado</div>';
        }else{

        }
     }
  }
?>

