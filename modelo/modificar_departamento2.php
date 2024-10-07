<?php

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["id"]) and !empty($_POST["botella"]) and !empty($_POST["botellas"])){

            $id=$_POST["id"];
           
            $botella=$_POST["botella"];
            $botellas=$_POST["botellas"];
  
            $sql=$conexion->query(" update departamentos set descripcion='$botella', responsable='$botellas' where idDepartamentos=$id");

            if($sql==1){
                header("location:departamento.php");
            }else{
                echo '<div class="alert alert-warning">Error al modificar precios</div>';
            }
        
        } else {
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        } 
    }
?>