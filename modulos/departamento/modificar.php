<?php
//require_once("conexion.php");

$resultado = [];
$resultado["bueno"]=true;

$id_departamento=$_POST['id_departamento'];
$nombre=$_POST['nombre'];

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre del departamento.";
    $resultado["bueno"]=false;
}
if ($resultado["bueno"]==true) {

$sql = "UPDATE departamento SET 
            nombre = '$nombre'
             WHERE  
            id_departamento ='$id_departamento'    
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

echo json_encode($resultado);