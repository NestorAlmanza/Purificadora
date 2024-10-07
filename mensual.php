<?php require_once "vistas/superior.php"?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

 
    <link rel="stylesheet" href="../css/es.css">

    

    <title>Usuarios</title>
</head>

<br>
<div class="container is-fluid">


<div class="col-xs-12">


		<h2>Reporte</h2>
<br>

		<div>
       
<style>	th {
        font-weight: bold;
        color: white;
    }</style>

<form action="" method="GET">
    
                            <div class="row">
                                
                                <div class="col-md-4">
                                    
                                    <div class="form-group">
                                        <label><b>Del Dia</b></label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b> Hasta  el Dia</b></label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b></b></label> <br>
                                      <button type="submit" class="btn btn-primary">Buscar</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>




                    <table class="table table-striped" id= "table_id">
                            <thead>
                            <tr class="bg-dark">
                            <th>N.Pedido</th>
                        <th>N.Cliente</th>
                        <th>Departamento</th>
                
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>N.Producto</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>   
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                         include "conexion4.php"; 

                         if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                            $from_date = $_GET['from_date'];
                            $to_date = $_GET['to_date'];
                        
                            $query = "SELECT 
                            p.idpedido,
                            dp.fk_idPedido,
                            p.fk_idCliente,
                            d.descripcion AS departamento,
                            p.fecha,
                            p.estatus,
                            pr.idproducto,
                            pr.descripcion AS producto,
                            pr.precio,
                            dp.cantidad,
                            (pr.precio * dp.cantidad) AS Total
                        FROM
                            pedidos p,
                            detallepedido dp,
                            productos pr,
                            departamentos d
                        WHERE
                            p.fecha BETWEEN DATE('$from_date') AND DATE('$to_date') 
                            AND p.idPedido = dp.fk_idPedido
                            AND pr.idproducto=dp.fk_idProducto
                            AND p.fk_idCliente=d.idDepartamentos
                        #detallepedidoGROUP BY 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9
                        ORDER BY p.idpedido DESC";
                                    $query_run = mysqli_query($conexion, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $fila)
                                        {
                                            ?>
                                            <tr>
                                            <td><?php echo $fila['fk_idPedido']; ?></td>
                                            <td><?php echo $fila['fk_idCliente']; ?></td>
                                            <td><?php echo $fila['departamento']; ?></td>
                                            <td><?php echo $fila['fecha']; ?></td>
                                            <td><?php echo $fila['estatus']; ?></td>
                                            <td><?php echo $fila['idproducto']; ?></td>
                                            <td><?php echo $fila['producto']; ?></td>
                                            <td><?php echo $fila['precio']; ?></td>
                                            <td><?php echo $fila['cantidad']; ?></td>
                                            <td><?php echo $fila['Total']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                      
                                         <tr>
                                         <td><?php  echo "No se encontraron resultados"; ?></td>
                                  <?php
                                    }
                                }
                            ?>
		</div>





</html>

<?php require_once "vistas/inferior.php"?>