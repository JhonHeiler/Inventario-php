<?php
//require_once("conexion.php");
$resultado = [];
$resultado["bueno"]=true;

$modulo1=$_POST['modulo1'];
$accion1=$_POST['accion1'];


if (empty($modulo1 )) {
    $resultado["error"]="Ingrese el nombre del módulo.";
    $resultado["bueno"]=false;
}
elseif (empty($accion1)) {
	$resultado["error"]="Ingrese el nombre de la acción.";
    $resultado["bueno"]=false;
}




if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO modulo_accion (
                modulo1,
                accion1) 
                VALUES (
                '$modulo1',
                '$accion1'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}else
$resultado["error"]=" Este módulo y acción ya esta registrado";
}


echo json_encode($resultado);


