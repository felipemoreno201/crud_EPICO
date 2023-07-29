<?php 
if (!empty($_POST["btnregis"])){
    //echo "boton presionado";
    if (!empty($_POST["nombre"]) and !empty($_POST["nombre"]) and !empty($_POST["categoria"]) and !empty($_POST["costo"]) and !empty($_POST["costo_unidad"]) and  !empty($_POST["archivo"])){
       
        $nombre=$_POST["nombre"];
        $categoria=$_POST["categoria"];
        $costo=$_POST["costo"];
        $costo_unidad=$_POST["costo_unidad"];
        $archivo=$_POST["archivo"];

        $sql=$conexion->query(" insert into epico_items(name,category,cort_price,unit_price,pic_filename)values('$nombre','$categoria','$costo','$costo_unidad','$archivo') ");
        if ($sql==1){
            echo '<div class="alert alert-success" >item registrado correctamente</div>';
            
        }else{
            echo '<div class="alert alert-danger" >error</div>';
            
        }


    }else{
        echo '<div class="alert alert-warning" >alguno se los campos esta vacio</div>';
    }
    
}
?>