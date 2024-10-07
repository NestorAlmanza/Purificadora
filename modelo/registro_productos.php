

<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["descripcion"])and !empty($_POST["precio"])){
           
        
           $descripcion_p=$_POST["descripcion"];
           $precio_p=$_POST["precio"];
    
        

           $sql=$conexion->query("insert into productos(descripcion,precio)values('$descripcion_p','$precio_p')");
            
           if($sql==1){
                echo '<div class="alert alert-success">Producto registrado</div>';
           }else{
            echo '<div class="alert alert-danger">Error al registrar precio</div>';
           }
           
        }else{
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        }
    }

?>