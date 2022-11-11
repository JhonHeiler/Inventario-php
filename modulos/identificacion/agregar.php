<?php

$resultado = [];
$resultado["bueno"]=true;

$nombre=$_POST['nombre'];
$abre= $_POST['abre'];


if (empty($nombre )) {
    $resultado["error"]="Ingrese el nombre de la identificación.";
    $resultado["bueno"]=false;
}
elseif (empty($abre )) {
    $resultado["error"]="Ingrese la abreviación de la identificación.";
    $resultado["bueno"]=false;
}


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO identificacion (
                nombre,
                abre) 
                VALUES (
                '$nombre',
                '$abre'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


