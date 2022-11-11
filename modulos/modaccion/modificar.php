<?php
//require_once("conexion.php");
$resultado = [];
$resultado["bueno"]=true;
$id_modulo_accion=$_POST['id_modulo_accion'];
$modulo1=$_POST['modulo1'];
$accion1=$_POST['accion1'];

if (empty($modulo1 )) {
    $resultado["mensaje"]="Ingrese el nombre del módulo.";
    $resultado["bueno"]=false;
}
elseif (empty($accion1)) {
	$resultado["mensaje"]="Ingrese el nombre de la acción.";
    $resultado["bueno"]=false;
}


if ($resultado["bueno"]==true) {
$sql = "UPDATE modulo_accion SET 
            modulo1 = '$modulo1',
            accion1 = '$accion1'
             WHERE  
            id_modulo_accion ='$id_modulo_accion'    
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