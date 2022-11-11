<?php
require_once("conexion.php");

$contenido_id = $_POST['contenido_id'];
$titulo = $_POST['titulo2'];
//$modulo = $_POST['modulo'];
$contenido = $_POST['contenido'];

$sql = "UPDATE contenido SET 
            titulo = '$titulo', 
 
            contenido ='$contenido'
        WHERE  
            contenido_id='$contenido_id'    
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
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);