<?php 
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from epico_items where id=$id ")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/style.css" >
</head>
<body >
    <h1 class="text-center">EPICO!</h1>

<form id="formulario2" class=" col-4 p-4 m-auto" method="POST">
            <h3 class="text-center text-secondary"> Modificar producto</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php 
            include "controlador/modificar.php";
            while($datos=$sql->fetch_object())
            {?>
                        <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->name ?>">
            
                    <label for="exampleInputPassword1" class="form-label">Category</label>
                    <input type="text" class="form-control" name="categoria" value="<?= $datos->category ?>">
                
                    <label for="exampleInputPassword1" class="form-label">cost_price</label>
                    <input type="number" class="form-control" name="costo" value="<?= $datos->cort_price ?>">
                
                    <label for="exampleInputPassword1" class="form-label">unit_price</label>
                    <input type="number" class="form-control" name="costo_unidad" value="<?= $datos->unit_price ?>">
                
                    <label for="exampleInputPassword1" class="form-label">Archivo</label>
                    <input type="file" class="form-control" name="archivo" value="<?= $datos->pic_filename ?>">
                </div>

            <?php }
            ?>
            
        
        <button type="submit" class="btn btn-success" name="btnregis" value="ok">Modificar</button>
        </form>
        
</body>
</html>