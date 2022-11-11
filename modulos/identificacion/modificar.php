<?php


$resultado = [];
$resultado["bueno"]=true;

$id_identificacion=$_POST['id_identificacion'];
$nombre=$_POST['nombre'];
$abre=$_POST['abre'];

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre de la identificación.";
    $resultado["bueno"]=false;
}
elseif (empty($abre )) {
    $resultado["mensaje"]="Ingrese la abreviación de la identificación.";
    $resultado["bueno"]=false;
}

if ($resultado["bueno"]==true) {
$sql = "UPDATE identificacion SET 
            nombre = '$nombre',
            abre = '$abre'
             WHERE  
            id_identificacion ='$id_identificacion'    
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