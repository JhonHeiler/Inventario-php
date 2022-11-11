<?php

$resultado = [];
$resultado["bueno"]=true;

$id_producto=$_POST['id_producto'];
$fecha_ad = $_POST['fecha_ad'];
$fecha_en = $_POST['fecha_en'];
$respon = $_POST['respon'];
$cantidad = $_POST['cantidad'];
$cargo = $_POST['cargo'];



if (empty($id_producto )) {
    $resultado["error"]="Seleccione el nombre del producto.";
    $resultado["bueno"]=false;
}
else if (empty($fecha_ad )) {
    $resultado["error"]="Seleccione la fecha de adquisición.";
     $resultado["bueno"]=false;
    }
    else if (empty($fecha_en)) {
    $resultado["error"]="Seleccione la fecha de entrega.";
     $resultado["bueno"]=false;
    }

    else if (empty($respon)) {
    $resultado["error"]="Seleccione el nombre del responsable.";
     $resultado["bueno"]=false;
    }
    else if (empty($cantidad)) {
    $resultado["error"]="Ingrese la cantidad.";
     $resultado["bueno"]=false;
    }
    else if (empty($cargo)) {
        $resultado["error"]="Ingrese la cantidad.";
         $resultado["bueno"]=false;
        }

    


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO entrega (
     
                id_producto, 
                fecha_ad, 
                fecha_en,
                respon,
                cantidad,cargo) 
                VALUES (
                '$id_producto', 
                '$fecha_ad', 
                '$fecha_en',
                '$respon', 
                '$cantidad',
                '$cargo'
                 )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


