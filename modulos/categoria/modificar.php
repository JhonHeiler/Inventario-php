<?php
//require_once("conexion.php");

$id_categoria=$_POST['id_categoria'];
$nombre=$_POST['nombre'];

$resultado = [];
$resultado["bueno"]=true;

if (empty($nombre )) {
    $resultado["mensaje"]="Ingrese el nombre de la categoria.";
    $resultado["bueno"]=false;
}


if ($resultado["bueno"]==true) {


$sql = "UPDATE categoria SET 
            nombre = '$nombre'
             WHERE  
            id_categoria ='$id_categoria'    
                 ";
mysqli_query($conexion, $sql);

//$resultado = array();
	
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