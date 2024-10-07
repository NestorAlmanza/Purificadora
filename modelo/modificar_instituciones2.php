

<?php

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["id"]) and !empty($_POST["garrafon"]) and !empty($_POST["botella"])){

            $id=$_POST["id"];
            $garrafon=$_POST["garrafon"];
            $botella=$_POST["botella"];
      
  
            $sql=$conexion->query(" update instituciones set descripcion='$garrafon', domicilio='$botella' where idInstitucion=$id");

            if($sql==1){
                header("location:instituciones.php");
            }else{
                echo '<div class="alert alert-warning">Error al modificar precios</div>';
            }
        
        } else {
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        } 
    }
?>