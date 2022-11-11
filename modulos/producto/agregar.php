<?php

$resultado = [];
$resultado["bueno"]=true;

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
    $resultado["error"]="por favor ingrese el nombre del producto.";
    $resultado["bueno"]=false;
}
else if (empty($id_marca)) {
    $resultado["error"]="seleccione la marca del producto.";
     $resultado["bueno"]=false;
} 
else if (empty($modelo)) {
$resultado["error"]="por favor ingrese el modelo del producto.";
 $resultado["bueno"]=false;
}
else if (empty($stock)) {
$resultado["error"]="por favor ingrese el stock del producto.";
 $resultado["bueno"]=false;
} 
else if (empty($fecha)) {
$resultado["error"]="seleccione la fecha de adquisición del producto.";
 $resultado["bueno"]=false;
}
else if (empty($id_provedor)) {
$resultado["error"]="seleccione el proeevedor del producto.";
 $resultado["bueno"]=false;
}
else if (empty($referencia)) {
$resultado["error"]="ingrese la refencia del producto.";
 $resultado["bueno"]=false;
}
else if (empty($descripcion)) {
$resultado["error"]="ingrese una descripción del producto.";
 $resultado["bueno"]=false;
}
else if (empty($id_categoria)) {
$resultado["error"]="seleccione la categoría del producto.";
 $resultado["bueno"]=false;
}

    


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO producto (
                nombre, 
                id_marca, 
                modelo, 
                stock, 
                fecha, 
                id_provedor, 
                referencia,
                descripcion,
                id_categoria) 
                VALUES (
                '$nombre', 
                '$id_marca', 
                '$modelo', 
                '$stock', 
                '$fecha', 
                '$id_provedor', 
                '$referencia',
                '$descripcion',
                '$id_categoria'
                )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


