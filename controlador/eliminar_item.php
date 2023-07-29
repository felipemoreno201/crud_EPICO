<?php 
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from epico_items where id=$id ");
    if ($sql==1){
        echo '<div class="alert alert-success" >eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger" >eror al eliminar</div>';
    }
}

?>