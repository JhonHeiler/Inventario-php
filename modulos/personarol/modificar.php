<?php

$resultado = [];
$resultado["bueno"]=true;
 
$id_persona_rol=$_POST['id_persona_rol'];
$id_persona=$_POST['id_persona'];
$id_rol=$_POST['id_rol'];

if (empty($id_persona )) {
    $resultado["mensaje"]="Seleccione la persona.";
    $resultado["bueno"]=false;
}
elseif (empty($id_rol )) {
    $resultado["mensaje"]="Seleccione el rol.";
    $resultado["bueno"]=false;
}

if ($resultado["bueno"]==true) {
$sql = "UPDATE persona_rol SET 
            id_persona = '$id_persona',
            id_rol = '$id_rol'
             WHERE  
            id_persona_rol ='$id_persona_rol'    
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