<?php

$resultado = [];
$resultado["bueno"]=true;

$nombre=$_POST['nombre'];
$id_departamento= $_POST['id_departamento'];


if (empty($nombre )) {
    $resultado["error"]="Ingrese el nombre del municipio.";
    $resultado["bueno"]=false;
}
elseif (empty($id_departamento )) {
    $resultado["error"]="Seleccione el departamento.";
    $resultado["bueno"]=false;
}




if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO municipio (
                nombre,
                id_departamento) 
                VALUES (
                '$nombre',
                '$id_departamento'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


