
<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["descripcion"])and !empty($_POST["responsable"])){
           
     
           $descripciones=$_POST["descripcion"];
           $responsables=$_POST["responsable"];
        

           $sql=$conexion->query("insert into departamentos(descripcion,responsable)values('$descripciones','$responsables')");
            
           if($sql==1){
                echo '<div class="alert alert-success">Departamento Registrado</div>';
           }else{
            echo '<div class="alert alert-danger">Error al registrar departamento</div>';
           }
           
        }else{
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        }
    }

?>