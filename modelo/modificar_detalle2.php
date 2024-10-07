
<?php

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["id"]) and !empty($_POST["garrafon"]) and !empty($_POST["botella"]) and !empty($_POST["botellas"])){

            $id=$_POST["id"];
            $garrafon=$_POST["garrafon"];
            $botella=$_POST["botella"];
            $botellas=$_POST["botellas"];
  
            $sql=$conexion->query(" update detallepedido set fk_idPedido='$garrafon', fk_idProducto='$botella', cantidad='$botellas' where idDetallePedido='$id'");

            if($sql==1){
                header ("location:detalle_pedido.php");
            }else{
                echo '<div class="alert alert-warning">Error al modificar precios</div>';
            }
        
        } else {
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        } 
    }
?>