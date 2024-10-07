

<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["fk_idPedido"])and !empty($_POST["fk_idProducto"])and !empty($_POST["cantidad"])){
           
      
            $fk_idPedido=$_POST["fk_idPedido"];
           $fk_idProducto=$_POST["fk_idProducto"];
           $cantidad=$_POST["cantidad"];
        

           $sql=$conexion->query("insert into detallepedido(fk_idPedido,fk_idProducto,cantidad)values('$fk_idPedido','$fk_idProducto','$cantidad')");
            
           if($sql==1){
                echo '<div class="alert alert-success">Detalle del pedido registrado</div>';
           }else{
            echo '<div class="alert alert-danger">Error al registrar precio</div>';
           }
           
        }else{
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        }
    }

?>