<?php

$resultado = [];
$resultado["bueno"]=true;

$nombre=$_POST['nombre'];


if (empty($nombre )) {
    $resultado["error"]="Ingrese el nombre de la categoria.";
    $resultado["bueno"]=false;
}



if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO categoria (
                nombre) 
                VALUES (
                '$nombre'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
} else
	$resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}


echo json_encode($resultado);


