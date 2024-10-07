
<?php
  include "conexion.php";
  $id=$_GET["id"];
    $sql=$conexion->query("select * from instituciones where idInstitucion=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form class="col-3 p-3 m-auto" method="POST">
    <h3 class="text-center alert alert-primary">Editar Institución</h3>
   
     <?php
        include "modelo/modificar_instituciones2.php";
        while ($datos=$sql->fetch_object()){ 
          
          ?>
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">#Número</label>
    <input type="number" class="form-control" name="id" value="<?= $datos->idInstitucion ?>"readonly>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripción</label>
    <input type="text" class="form-control" name="garrafon"value="<?= $datos->descripcion ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Domicilio</label>
    <input type="text" class="form-control" name="botella" value="<?= $datos->domicilio ?>">
  </div>


       <?php }

     ?>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Institución</button>
  

  
</form>

</head>
<body>
    
</body>
</html>