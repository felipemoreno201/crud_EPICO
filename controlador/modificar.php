<?php

if (!empty($_POST["btnregis"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["categoria"]) and !empty($_POST["costo"]) and !empty($_POST["costo_unidad"]) and !empty($_POST["archivo"]) ){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $categoria=$_POST["categoria"];
        $costo=$_POST["costo"];
        $costo_unidad=$_POST["costo_unidad"];
        $archivo=$_POST["archivo"];
        $sql=$conexion->query(" update epico_items set name='$nombre',category='$categoria',cort_price='$costo',unit_price='$costo_unidad',pic_filename='$archivo' where id=$id ");
        if($sql==1) {
            
            header("location:index.php");
            
        }else{
            echo '<div class="alert alert-danger" >Error al modificar producto</div>';
        }

    }else{
        echo '<div class="alert alert-warning" >Alguno se los campos esta vacio</div>';
    }
}

?>