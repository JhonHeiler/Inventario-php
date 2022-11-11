<?php
//require_once("conexion.php");
$resultado = [];
$resultado["bueno"]=true;

$nombre=$_POST['nombre'];


if (empty($nombre )) {
    $resultado["error"]="Ingrese el nombre del departamento.";
    $resultado["bueno"]=false;
}



if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO departamento (
                nombre) 
                VALUES (
                '$nombre'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


