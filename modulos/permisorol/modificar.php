<?php

$resultado = [];
$resultado["bueno"]=true;
$id_permiso_rol=$_POST['id_permiso_rol'];
$id_rol=$_POST['id_rol'];
$modulo1=$_POST['modulo1'];
$accion1=$_POST['accion1'];

if (empty($id_rol )) {
    $resultado["mensaje"]="Seleccione el rol.";
    $resultado["bueno"]=false;
}
elseif (empty($modulo1 )) {
    $resultado["mensaje"]="Ingrese el nombre del Módulo.";
    $resultado["bueno"]=false;
}
elseif (empty($accion1 )) {
    $resultado["mensaje"]="Ingrese el nombre de la acción.";
    $resultado["bueno"]=false;
}

if ($resultado["bueno"]==true) {
$sql = "UPDATE permiso_rol SET 
            id_rol = '$id_rol',
            modulo1 = '$modulo1',
            accion1 = '$accion1'
             WHERE  
            id_permiso_rol ='$id_permiso_rol'    
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