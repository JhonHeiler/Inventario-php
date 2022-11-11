<?php
//require_once("conexion.php");
$resultado = [];
$resultado["bueno"]=true;

$obse=$_POST['obse'];
$id_producto = $_POST['id_producto'];
$responsable = $_POST['responsable'];
$fecha_de = $_POST['fecha_de'];
$cantidad = $_POST['cantidad'];



if (empty($obse )) {
    $resultado["error"]="Por favor ingrese una observación.";
    $resultado["bueno"]=false;
}
else if (empty($id_producto)) {
    $resultado["error"]="Seleccione el producto.";
     $resultado["bueno"]=false;
} 
else if (empty($responsable)) {
$resultado["error"]="Por favor seleccione a la persona responsable.";
 $resultado["bueno"]=false;
}
else if (empty($fecha_de)) {
$resultado["error"]="Seleccione la fecha de devolución.";
 $resultado["bueno"]=false;
} 
else if (empty($cantidad)) {
$resultado["error"]="Ingrese la cantidad.";
 $resultado["bueno"]=false;
}


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO devolucion (
     
                obse, 
                id_producto, 
                responsable, 
                fecha_de, 
                cantidad) 
                VALUES (
                '$obse', 
                '$id_producto', 
                '$responsable', 
                '$fecha_de', 
                '$cantidad'
                 )";
$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}else
    $resultado["mensaje"] = mysqli_error($conexion);
}


echo json_encode($resultado);


