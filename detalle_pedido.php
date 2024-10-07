<?php require_once "vistas/superior.php"?>


<!--INICIO del cont principal-->
     <div class="container">
    <!DOCTYPE html>
     <html lang="en">

     

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b567d3b829.js" crossorigin="anonymous"></script>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <!--PRIMER TABLERO -->

    <script>
      function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar");
        return respuesta
      }
    </script>


    <?php
      include "conexion3.php";
      include "modelo/eliminar_detalle.php";
    ?>


<div class="container-fluid row">

<form class="col-2 p-2" method="POST">

    <h3 class="text-center alert alert-dark">Capturar</h3>
    <?php
       include "modelo/registro_detalle.php";
      ?>
    
   <div class="mb-3">
    <label for="idDetallePedido" class="form-label">#Número De Pedido</label>
    <input type="number" class="form-control" name="fk_idPedido">
  </div>
  <div class="mb-3">
    <label for="fk_idProducto" class="form-label">Número De Producto</label>
    <input type="number" class="form-control" name="fk_idProducto">
  </div>

  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" name="cantidad">
  </div>


  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>



</form>

<!--SEGUNDO TABLERO -->

<div class="col-10 p-2">
<h3 class="text-center alert alert-dark">Registro Detalles Pedidos</h3>

<table class="table">
  <thead class="bg info">
    <tr>
     <!-- <th scope="col">#Número</th>-->
     <th scope="col">Número De Pedido</th>
      <th scope="col">Número De Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

        <?php

            include "conexion3.php";
            $sql=$conexion->query("select * from agiua_roble.detallepedido");
            while ($datos=$sql->fetch_object()) { ?>

        <tr>

        
        <td><?= $datos->fk_idPedido ?></td>
        <td><?= $datos->fk_idProducto ?></td>
        <td><?= $datos->cantidad ?></td>
 

        <td>

        <a href="modificar_detalle.php?id=<?=$datos->idDetallePedido?>"class="btn btn-small btn-secondary" ><i class="fa-solid fa-file-pen"></i></a>
        <a onclick="return eliminar()"href="detalle_pedido.php?id=<?=$datos->idDetallePedido?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>

        </tr>
           <?php }
        ?>
   
  </tbody>
</table>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/inferior.php"?>

