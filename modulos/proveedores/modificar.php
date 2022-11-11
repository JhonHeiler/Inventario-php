<?php
$resultado = [];
$resultado["bueno"]=true;

$id_provedor=$_POST['id_provedor'];
$tipo_docu=$_POST['tipo_docu'];

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

if (empty($tipo_docu )) {
    $resultado["mensaje"]="Seleccione el tipo de documento.";
    $resultado["bueno"]=false;
}
// else if (empty($num_docu)) {
//     $resultado["mensaje"]="Por favor ingrese el numero de identificacion.";
//     $resultado["bueno"]=false;
// }
// else if (!empty($num_docu)){
//     $sql_docu="SELECT * FROM proveedores WHERE num_docu='$num_docu'";
//     $r_docu=mysqli_query($conexion,$sql_docu);
//     $rr_docu=mysqli_fetch_assoc($r_docu);
//     if ($rr_docu["num_docu"]!="") {
//     $resultado["mensaje"]="Ya hay una persona registrada con este numero de identificacion.";
//     $resultado["bueno"]=false;
//     }

else if (empty($nombre)) {
$resultado["mensaje"]="Ingrese el nombre completo.";
 $resultado["bueno"]=false;
}

else if (empty($telefono)) {
$resultado["mensaje"]="Ingrese el número de telefono.";
 $resultado["bueno"]=false;
}
else if (!empty($telefono)){
$sql_docu="SELECT * FROM proveedores WHERE telefono='$telefono'";
$r_docu=mysqli_query($conexion,$sql_docu);
$rr_docu=mysqli_fetch_assoc($r_docu);
if ($rr_docu["telefono"]!="") {
$resultado["mensaje"]="Este número de telefono ya esta registrado.";
$resultado["bueno"]=false;
}

else if (empty($direccion)) {
$resultado["mensaje"]="Ingrese la direccion.";
 $resultado["bueno"]=false;
}
}



if ($resultado["bueno"]==true) {
$sql = "UPDATE proveedores SET 
            tipo_docu = '$tipo_docu', 

            nombre = '$nombre', 
            telefono ='$telefono', 
            direccion ='$direccion' 
             
             WHERE  
            id_provedor ='$id_provedor'    
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