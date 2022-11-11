<?php

$resultado = [];
$resultado["bueno"]=true;
$id_municipio=$_POST['id_municipio'];
$nombre=$_POST['nombre'];
$id_departamento=$_POST['id_departamento'];

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre del municipio.";
    $resultado["bueno"]=false;
}
elseif (empty($id_departamento )) {
    $resultado["mensaje"]="Seleccione el departamento.";
    $resultado["bueno"]=false;
}
if ($resultado["bueno"]==true) {
$sql = "UPDATE municipio SET 
            nombre = '$nombre',
            id_departamento = '$id_departamento'
             WHERE  
            id_municipio ='$id_municipio'    
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