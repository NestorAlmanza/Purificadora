
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
      include "conexion5.php";
      include "modelo/eliminar_pedidos.php";
    ?>


<div class="container-fluid row">

<form class="col-2 p-2" method="POST">

    <h3 class="text-center alert alert-dark">Capturar</h3>
    <?php
       include "modelo/registro_pedidos.php";
      ?>
    
   <div class="mb-3">
    <label for="idPedido" class="form-label">Número de pedido</label>
    <input type="number" class="form-control" name="idPedido">
  </div>

  <div class="mb-3">
    <label for="fk_idCliente" class="form-label">Número de cliente</label>
    <input type="number" class="form-control" name="fk_idCliente">
  </div>

  <div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="fecha">
  </div>

  <div class="mb-3">
    <label for="estatus" class="form-label">Estatus</label>
    <input type="text" class="form-control" name="estatus">
  </div>


  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>



</form>

<!--SEGUNDO TABLERO -->

<div class="col-10 p-2">
<h3 class="text-center alert alert-dark">Registro De Pedidos</h3>

<table class="table">
  <thead class="bg info">
    <tr>
     <!-- <th scope="col">#Número</th>-->
     <th scope="col">Número De Pedido</th>
      <th scope="col">Número De Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estatus</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

        <?php

            include "conexion5.php";
            $sql=$conexion->query("select * from agiua_roble.pedidos");
            while ($datos=$sql->fetch_object()) { ?>

        <tr>

        <td><?= $datos->idPedido ?></td>
        <td><?= $datos->fk_idCliente ?></td>
        <td><?= $datos->fecha ?></td>
        <td><?= $datos->estatus ?></td>
 

        <td>

        <a href="modificar_pedidos.php?id=<?=$datos->idPedido?>"class="btn btn-small btn-secondary" ><i class="fa-solid fa-file-pen"></i></a>
        <a onclick="return eliminar()"href="pedidos.php?id=<?=$datos->idPedido?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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

