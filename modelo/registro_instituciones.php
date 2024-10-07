

<?php

    if (!empty($_POST["btnregistrar"])){
        if ( !empty($_POST["descripcion"])and !empty($_POST["domicilio"])){
           
        
           $descripcion_i=$_POST["descripcion"];
           $domicilio_i=$_POST["domicilio"];
    
        

           $sql=$conexion->query("insert into instituciones(descripcion,domicilio)values('$descripcion_i','$domicilio_i')");
            
           if($sql==1){
                echo '<div class="alert alert-success">Institución registrada</div>';
           }else{
            echo '<div class="alert alert-danger">Error al registrar precio</div>';
           }
           
        }else{
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        }
    }

?>