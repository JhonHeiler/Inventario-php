<?php

$resultado = [];
$resultado["bueno"]=true;

$id_sexo=$_POST['id_sexo'];
$nombre=$_POST['nombre'];
if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre del sexo.";
    $resultado["bueno"]=false;
}

if ($resultado["bueno"]==true) {
$sql = "UPDATE sexo SET 
            nombre = '$nombre'
             WHERE  
            id_sexo ='$id_sexo'    
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