<?php

$resultado = [];
$resultado["bueno"]=true;

$id_entrega=$_POST['id_entrega'];
$id_producto=$_POST['id_producto'];
$fecha_ad = $_POST['fecha_ad'];
$fecha_en = $_POST['fecha_en'];
$respon = $_POST['respon'];
$cantidad = $_POST['cantidad'];
$cargo = $_POST['cargo'];

if (empty($id_producto )) {
    $resultado["mensaje"]="Seleccione el nombre del producto.";
    $resultado["bueno"]=false;
}
else if (empty($fecha_ad )) {
    $resultado["mensaje"]="Seleccione la fecha de adquisición.";
    $resultado["bueno"]=false;
}
else if (empty($fecha_en)) {
    $resultado["mensaje"]="Seleccione la fecha de entrega.";
    $resultado["bueno"]=false;
}

else if (empty($respon)) {
    $resultado["mensaje"]="Seleccione el nombre del responsable.";
    $resultado["bueno"]=false;
}
else if (empty($cantidad)) {
$resultado["mensaje"]="Ingrese la cantidad.";
 $resultado["bueno"]=false;
}
else if (empty($cargo)) {
    $resultado["mensaje"]="Ingrese el cargo.";
     $resultado["bueno"]=false;
    }

    
if ($resultado["bueno"]==true) {


$sql = "UPDATE entrega SET 
            id_producto = '$id_producto', 
            fecha_ad ='$fecha_ad',
            fecha_en = '$fecha_en', 
            respon ='$respon', 
            cantidad ='$cantidad', 
            cargo ='$cargo'   
             WHERE  
            id_entrega ='$id_entrega'    
                 ";
mysqli_query($conexion, $sql);


if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos modificados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);