<?php

$resultado = [];
$resultado["bueno"]=true;
$id_persona = $_POST['id_persona'];
$id_tipo_docu = $_POST['id_tipo_docu'];
//$num_docu = $_POST['num_docu'];
$pri_nombre = $_POST['pri_nombre'];
$seg_nombre = $_POST['seg_nombre'];
$pri_apellido = $_POST['pri_apellido'];
$seg_apellido = $_POST['seg_apellido'];
$fecha_nac = $_POST['fecha_nac'];
$id_sexo = $_POST['id_sexo'];


$id_mun_res = $_POST['id_mun_res'];

$direccion = $_POST['direccion'];
$cor_pri = $_POST['cor_pri'];
$cor_alt = $_POST['cor_alt'];

$tel_pri = $_POST['tel_pri'];
$tel_alt = $_POST['tel_alt'];

if (empty($id_tipo_docu )) {
    $resultado["mensaje"]="Por favor seleccione el tipo identificación.";
    $resultado["bueno"]=false;
}
// else if (empty($num_docu)) {
//     $resultado["mensaje"]="Por favor ingrese el número de identificación.";
//     $resultado["bueno"]=false;
// }
// else if (!empty($num_docu)){
//     $sql_docu="SELECT * FROM persona WHERE num_docu='$num_docu'";
//     $r_docu=mysqli_query($conexion,$sql_docu);
//     $rr_docu=mysqli_fetch_assoc($r_docu);
//     if ($rr_docu["num_docu"]!="") {
//     $resultado["mensaje"]="Ya hay una persona registrada con este número de identificación.";
//     $resultado["bueno"]=false;
//     }
    
else if (empty($pri_nombre)) {
    $resultado["mensaje"]="Por favor ingrese su primer nombre.";
     $resultado["bueno"]=false;
    }

    else if (empty($pri_apellido)) {
    $resultado["mensaje"]="Por favor ingrese su primer apellido.";
     $resultado["bueno"]=false;
    } 
    else if (empty($fecha_nac)) {
    $resultado["mensaje"]="Seleccione la fecha de nacimiento.";
     $resultado["bueno"]=false;
    }
    else if (empty($id_sexo)) {
    $resultado["mensaje"]="Seleccione su sexo.";
     $resultado["bueno"]=false;
    }

    else if (empty($id_mun_res)) {
    $resultado["mensaje"]="Seleccione su municipio de residencia.";
     $resultado["bueno"]=false;
    }
    
    else if (empty($direccion)) {
    $resultado["mensaje"]="Ingrese su direccion.";
     $resultado["bueno"]=false;
    }
    else if (empty($cor_pri)) {
    $resultado["mensaje"]="Ingrese su correo electrónico principal.";
     $resultado["bueno"]=false;
     
    }
    else if (empty($cor_pri) || !filter_var($cor_pri,FILTER_VALIDATE_EMAIL)) {
    $resultado["mensaje"]="Correo principal invalido.";
     $resultado["bueno"]=false;
     
    }
    else if (!empty($cor_alt) && !filter_var($cor_alt,FILTER_VALIDATE_EMAIL)) {
    $resultado["mensaje"]="El correo alternativo es invalido.";
     $resultado["bueno"]=false;   
    }
    

    else if (empty($tel_pri)) {
    $resultado["mensaje"]="Ingrese su numero de telefono.";
     $resultado["bueno"]=false;
    }
    


if ($resultado["bueno"]==true) {
$sql = "UPDATE persona SET 
            id_tipo_docu = '$id_tipo_docu', 
            
            
            
            pri_nombre ='$pri_nombre',
            seg_nombre = '$seg_nombre',
            pri_apellido = '$pri_apellido',
            seg_apellido = '$seg_apellido',
            fecha_nac = '$fecha_nac',
            id_sexo = '$id_sexo',
            
            id_mun_res = '$id_mun_res',
            
            direccion = '$direccion',
            cor_pri = '$cor_pri',
            cor_alt = '$cor_alt',
            
            tel_pri = '$tel_pri',
            tel_alt = '$tel_alt'

            
        WHERE  
            id_persona = '$id_persona'    
                 ";
mysqli_query($conexion, $sql);

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