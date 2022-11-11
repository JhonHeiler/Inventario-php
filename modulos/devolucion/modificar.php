<?php

$resultado = [];
$resultado["bueno"]=true;

$id_devolucion = $_POST['id_devolucion'];
$obse=$_POST['obse'];
$id_producto = $_POST['id_producto'];
$responsable = $_POST['responsable'];
$fecha_de = $_POST['fecha_de'];
$cantidad = $_POST['cantidad'];


if (empty($obse )) {
    $resultado["mensaje"]="Por favor ingrese una observación.";
    $resultado["bueno"]=false;
}
else if (empty($id_producto)) {
    $resultado["mensaje"]="seleccione el producto.";
     $resultado["bueno"]=false;
} 
else if (empty($responsable)) {
$resultado["mensaje"]="Por favor seleccione al responsable.";
 $resultado["bueno"]=false;
}
else if (empty($fecha_de)) {
$resultado["mensaje"]="Seleccione la fecha de devolución.";
 $resultado["bueno"]=false;
} 
else if (empty($cantidad)) {
$resultado["mensaje"]="Ingrese la cantidad.";
 $resultado["bueno"]=false;
}


if ($resultado["bueno"]==true) {

$sql = "UPDATE devolucion SET 
            obse = '$obse', 
            id_producto = '$id_producto',
            responsable = '$responsable',
            fecha_de = '$fecha_de', 
            cantidad = '$cantidad'
             
                         
             WHERE  
            id_devolucion = '$id_devolucion'    
                 ";
mysqli_query($conexion, $sql);

//$resultado = array();
$resultado = [];

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