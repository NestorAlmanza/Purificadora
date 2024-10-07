
<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["idPedido"])and !empty($_POST["fk_idCliente"])and !empty($_POST["fecha"])and !empty($_POST["estatus"])){
           
            $idPedido=$_POST["idPedido"];
           $fk_idCliente_p=$_POST["fk_idCliente"];
           $fecha_p=$_POST["fecha"];
           $estatus_p=$_POST["estatus"];
        

           $sql=$conexion->query("insert into pedidos(idPedido,fk_idCliente,fecha,estatus)values('$idPedido','$fk_idCliente_p','$fecha_p','$estatus_p')");
            
           if($sql==1){
                echo '<div class="alert alert-success">Pedido registrado</div>';
           }else{
            echo '<div class="alert alert-danger">Error al registrar precio</div>';
           }
           
        }else{
            echo '<div class="alert alert-warning">Campos Vacios</div>';
        }
    }

?>