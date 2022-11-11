<?php
$resultado = [];
$resultado["bueno"]=true;


$id_rol=$_POST['id_rol'];
$nombre=$_POST['nombre'];

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre del rol.";
    $resultado["bueno"]=false;
}

if ($resultado["bueno"]==true) {
$sql = "UPDATE rol SET 
            nombre = '$nombre'
             WHERE  
            id_rol ='$id_rol'    
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