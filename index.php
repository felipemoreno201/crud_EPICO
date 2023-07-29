<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD EPICO.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/style.css" >
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar este item?");
            return respuesta
        }
    </script>
    <H1 class="text-center ">Crud for EPICO!
    <img class="img" src="recursos/img/1.png" alt="" style="width: 100px; height: 100px">

    </H1>
    
    <?php 
    include "modelo/conexion.php";
    
    ?>
    <div id="form" class="p-5 container-fluid row ">

            <form id="formulario" class=" col-4 p-4" method="POST">
            <h3 class="text-center text-secondary">Formulario registro</h3>
            <?php 
            include "controlador/eliminar_item.php";
            include "controlador/registro_form.php";
            ?>
            <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"     name="nombre" >
       
            <label for="exampleInputPassword1" class="form-label">Category</label>
            <input type="text" class="form-control" name="categoria">
        
            <label for="exampleInputPassword1" class="form-label">cost_price</label>
            <input type="number" class="form-control" name="costo">
        
            <label for="exampleInputPassword1" class="form-label">unit_price</label>
            <input type="number" class="form-control" name="costo_unidad">
        
            <label for="exampleInputPassword1" class="form-label">Archivo</label>
            <input type="file" class="form-control" name="archivo">
        </div>
        
        <button type="submit" class="btn btn-success" name="btnregis" value="ok">Save</button>
        </form>
    <div class="col-8 p-4">
        <table class="table bg-none">
            <thead >
                <tr >
                <th  scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">cost</th>
                <th scope="col">unit</th>
                <th scope="col">doc</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                include "modelo/conexion.php";
                $sql = $conexion->query("select * from epico_items");
                while($datos=$sql->fetch_object()) 
                
                { ?>
                
                <tr >
                <th><?= $datos->id ?></th>
                <th><?= $datos->name ?></th>
                <td><?= $datos->category ?></td>
                <td><?= $datos->cort_price ?></td>
                <td><?= $datos->unit_price ?></td>
                <td><?= substr($datos->pic_filename, 0, 10) . "..." ?></td>
                
                
                <td>
                    <a class="btn btn-warning" href="modificar.php?id=<?= $datos->id ?>">editar</a>
                    <a onclick="return eliminar()"  class="btn btn-danger" href="index.php?id=<?= $datos->id ?>">eliminar</a>
                </td>
                <td></td>
                </tr>

                <?php }
                ?>
                
            </tbody>
            </table>
        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>