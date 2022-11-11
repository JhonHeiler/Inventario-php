<?php
require_once("conexion.php");
require_once("funciones.php");
$resultado = [];
// METODO 1
// if (
//     isset($_POST['departamento_id']) == false
//     || $_POST['departamento_id'] == ""
// ) { 
//     $resultado['error']=true;
//     $resultado['mensaje'] = "El tipo de identificación es obligatorio.";
//     echo json_encode($resultado);
//     exit();
// }

// if (
//     isset($_POST['identificacion']) == false
//     || $_POST['identificacion'] == ""
// ) { 
//     $resultado['error']=true;
//     $resultado['mensaje'] = "La identificación es obligatoria.";
//     echo json_encode($resultado);
//     exit();
// }



// METODO 2
// $error = "";
// if (
//     isset($_POST['departamento_id']) == false
//     || $_POST['departamento_id'] == ""
// ) {
//     $error .= "El tipo de identificación es obligatorio.\n";
// }

// if (
//     isset($_POST['identificacion']) == false
//     || $_POST['identificacion'] == ""
// ) {
//     $error .= "La identificación es obligatoria.\n";
// } else {
//     $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
//     if (filter_var($_POST['identificacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
//         $error .= "La identificación solo debe tener número.\n";
//     }
// }


// if (
//     isset($_POST['fecha_nacimiento']) == false
//     || $_POST['fecha_nacimiento'] == ""
// ) {
//     $error .= "La fecha de nacimiento es obligatoria.$_POST[fecha_nacimiento]\n";
// } else {
   
//     if (validar_fecha($_POST['fecha_nacimiento']) == false) {
//         $error .= "La fecha de nacimiento no es valida.\n";
//     }
// }


// if ($error != "") {
//     $resultado['error'] = true;
//     $resultado['mensaje'] = $error;
//     echo json_encode($resultado);
//     exit(0);
// }






$titulo = $_POST['titulo2'];
$modulo = $_POST['modulo'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO contenido (
                titulo, 
                modulo, 
                contenido) 
                VALUES (
                    '$titulo', 
                    '$modulo',
                    '$contenido')";
mysqli_query($conexion, $sql);

//$resultado = array();


if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos agregados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);
