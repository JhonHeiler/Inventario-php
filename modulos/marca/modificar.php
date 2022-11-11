<?php

$resultado = [];
$resultado["bueno"]=true;

$id_marca=$_POST['id_marca'];
$nombre=$_POST['nombre'];

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre de la marca.";
    $resultado["bueno"]=false;
}
if ($resultado["bueno"]==true) {
$sql = "UPDATE marca SET 
            nombre = '$nombre'
             WHERE  
            id_marca ='$id_marca'    
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