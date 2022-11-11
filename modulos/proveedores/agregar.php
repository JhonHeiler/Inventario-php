<?php

$resultado = [];
$resultado["bueno"]=true;

$tipo_docu=$_POST['tipo_docu'];
$num_docu = $_POST['num_docu'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];



if (empty($tipo_docu )) {
    $resultado["error"]="Seleccione el tipo de documento.";
    $resultado["bueno"]=false;
}
else if (empty($num_docu)) {
    $resultado["error"]="Por favor ingrese el numero de identificacion.";
    $resultado["bueno"]=false;
}
else if (!empty($num_docu)){
    $sql_docu="SELECT * FROM proveedores WHERE num_docu='$num_docu'";
    $r_docu=mysqli_query($conexion,$sql_docu);
    $rr_docu=mysqli_fetch_assoc($r_docu);
    if ($rr_docu["num_docu"]!="") {
    $resultado["error"]="Ya hay una persona registrada con este numero de identificacion.";
    $resultado["bueno"]=false;
    }


    else if (empty($nombre)) {
    $resultado["error"]="Ingrese el nombre completo.";
     $resultado["bueno"]=false;
    }

    else if (empty($telefono)) {
    $resultado["error"]="Ingrese el número de telefono.";
     $resultado["bueno"]=false;
    }
    else if (!empty($telefono)){
    $sql_docu="SELECT * FROM proveedores WHERE telefono='$telefono'";
    $r_docu=mysqli_query($conexion,$sql_docu);
    $rr_docu=mysqli_fetch_assoc($r_docu);
    if ($rr_docu["telefono"]!="") {
    $resultado["error"]="Este número de telefono ya esta registrado.";
    $resultado["bueno"]=false;
    }

    else if (empty($direccion)) {
    $resultado["error"]="Ingrese la direccion.";
     $resultado["bueno"]=false;
    }
    }
}

    


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO proveedores (
     
                tipo_docu, 
                num_docu, 
                nombre,
                telefono,
                direccion) 
                VALUES (
                '$tipo_docu', 
                '$num_docu', 
                '$nombre',
                '$telefono', 
                '$direccion'
                 )";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);


