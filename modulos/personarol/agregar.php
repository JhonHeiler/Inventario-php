<?php

$resultado = [];
$resultado["bueno"]=true;

$id_persona=$_POST['id_persona'];
$id_rol= $_POST['id_rol'];


if (empty($id_persona )) {
    $resultado["error"]="Seleccione la persona.";
    $resultado["bueno"]=false;
}
elseif (empty($id_rol )) {
    $resultado["error"]="Seleccione el rol.";
    $resultado["bueno"]=false;
}




if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO persona_rol (
                id_persona,
                id_rol) 
                VALUES (
                '$id_persona',
                '$id_rol'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}
//$resultado["error"]="No cuenta con permiso para relaizar esta acción.";
}


echo json_encode($resultado);

