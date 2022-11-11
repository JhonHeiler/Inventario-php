<?php

$resultado = [];
$resultado["bueno"]=true;

$id_rol=$_POST['id_rol'];
$modulo1= $_POST['modulo1'];
$accion1= $_POST['accion1'];


if (empty($id_rol )) {
    $resultado["error"]="Seleccione el rol.";
    $resultado["bueno"]=false;
}
elseif (empty($modulo1 )) {
    $resultado["error"]="Ingrese el nombre del Módulo.";
    $resultado["bueno"]=false;
}
elseif (empty($accion1 )) {
    $resultado["error"]="Ingrese el nombre de la acción.";
    $resultado["bueno"]=false;
} 


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO permiso_rol (
                id_rol,
                modulo1,
                accion1) 
                VALUES (
                '$id_rol',
                '$modulo1',
                '$accion1'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}elseif($guardar <> 1) {
    $resultado["error"]="El modulo o la acción no existe"; 
}
   
}


echo json_encode($resultado);


