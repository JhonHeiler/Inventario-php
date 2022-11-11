<?php

$resultado = [];
$resultado["bueno"]=true;

$id_producto = $_POST['id_producto'];
$nombre=$_POST['nombre'];
$id_marca = $_POST['id_marca'];
$modelo = $_POST['modelo'];
$stock = $_POST['stock'];
$fecha = $_POST['fecha'];
$id_provedor = $_POST['id_provedor'];
$referencia = $_POST['referencia'];
$descripcion = $_POST['descripcion'];
$id_categoria = $_POST['id_categoria'];

if (empty($nombre )) {
    $resultado["mensaje"]="por favor ingrese el nombre del producto.";
    $resultado["bueno"]=false;
}
else if (empty($id_marca)) {
    $resultado["mensaje"]="seleccione la marca del producto.";
     $resultado["bueno"]=false;
} 
else if (empty($modelo)) {
$resultado["mensaje"]="por favor ingrese el modelo del producto.";
 $resultado["bueno"]=false;
}
else if (empty($stock)) {
$resultado["mensaje"]="por favor ingrese el stock del producto.";
 $resultado["bueno"]=false;
} 
else if (empty($fecha)) {
$resultado["mensaje"]="seleccione la fecha de adquisición del producto.";
 $resultado["bueno"]=false;
}
else if (empty($id_provedor)) {
$resultado["mensaje"]="seleccione el proeevedor del producto.";
 $resultado["bueno"]=false;
}
else if (empty($referencia)) {
$resultado["mensaje"]="ingrese la refencia del producto.";
 $resultado["bueno"]=false;
}
else if (empty($descripcion)) {
$resultado["mensaje"]="ingrese una descripción del producto.";
 $resultado["bueno"]=false;
}
else if (empty($id_categoria)) {
$resultado["mensaje"]="seleccione la categoría del producto.";
 $resultado["bueno"]=false;
}

    


if ($resultado["bueno"]==true) {

$sql = "UPDATE producto SET 
            nombre = '$nombre', 
            id_marca ='$id_marca',
            modelo = '$modelo',
            stock ='$stock', 
            fecha ='$fecha', 
            id_provedor ='$id_provedor', 
            referencia ='$referencia', 
            descripcion ='$descripcion', 
            id_categoria ='$id_categoria' 
             
             WHERE  
            id_producto='$id_producto'    
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