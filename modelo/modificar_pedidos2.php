

<?php

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["id"]) and !empty($_POST["garrafon"]) and !empty($_POST["botella"]) and !empty($_POST["botellas"])){

            $id=$_POST["id"];
            $garrafon=$_POST["garrafon"];
            $botella=$_POST["botella"];
            $botellas=$_POST["botellas"];
  
            $sql=$conexion->query(" update pedidos set fk_idCliente='$garrafon', fecha='$botella', estatus='$botellas' where idPedido='$id'");

            if($sql==1){
                header("location:pedidos.php");
            }else{
                echo '<div class="alert alert-warning">Error al modificar precios</div>';
            }
        
        } else {
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        } 
    }
?>