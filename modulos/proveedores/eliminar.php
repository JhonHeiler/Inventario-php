<?php

$id_provedor = $_POST['id_provedor'];
$sql = "DELETE FROM proveedores WHERE id_provedor ='$id_provedor'";

mysqli_query($conexion,$sql);
$resultado=[];
if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos eliminados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
    $resultado["mensaje"] = "Este registro no se puede eliminar porque se encuentra relacionado.";
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);
