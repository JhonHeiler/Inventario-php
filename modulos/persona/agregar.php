<?php
//require_once("conexion.php");


$resultado = [];
$resultado["bueno"]=true;
$id_tipo_docu=$_POST['id_tipo_docu'];
$num_docu = $_POST['num_docu'];
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
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];


if (empty($id_tipo_docu )) {
    $resultado["error"]="Por favor seleccione el tipo identificación.";
    $resultado["bueno"]=false;
}
else if (empty($num_docu)) {
    $resultado["error"]="Por favor ingrese el número de identificación.";
    $resultado["bueno"]=false;
}else if (!empty($num_docu)){
    $sql_docu="SELECT * FROM persona WHERE num_docu='$num_docu'";
    $r_docu=mysqli_query($conexion,$sql_docu);
    $rr_docu=mysqli_fetch_assoc($r_docu);
    if ($rr_docu["num_docu"]!="") {
    $resultado["error"]="Ya hay una persona registrada con este número de identificación.";
    $resultado["bueno"]=false;
    }
    
    else if (empty($pri_nombre)) {
    $resultado["error"]="Por favor ingrese su primer nombre.";
     $resultado["bueno"]=false;
    }

    else if (empty($pri_apellido)) {
    $resultado["error"]="Por favor ingrese su primer apellido.";
     $resultado["bueno"]=false;
    } 
    else if (empty($fecha_nac)) {
    $resultado["error"]="Seleccione la fecha de nacimiento.";
     $resultado["bueno"]=false;
    }
    else if (empty($id_sexo)) {
    $resultado["error"]="Seleccione su sexo.";
     $resultado["bueno"]=false;
    }

    else if (empty($id_mun_res)) {
    $resultado["error"]="Seleccione su municipio de residencia.";
     $resultado["bueno"]=false;
    }
    
    else if (empty($direccion)) {
    $resultado["error"]="Ingrese su direccion.";
     $resultado["bueno"]=false;
    }
    else if (empty($cor_pri)) {
    $resultado["error"]="Ingrese su correo electrónico principal.";
     $resultado["bueno"]=false;
     
    }
    else if (empty($cor_pri) || !filter_var($cor_pri,FILTER_VALIDATE_EMAIL)) {
    $resultado["error"]="Correo principal invalido.";
     $resultado["bueno"]=false;
     
    }
    else if (!empty($cor_alt) && !filter_var($cor_alt,FILTER_VALIDATE_EMAIL)) {
    $resultado["error"]="El correo alternativo es invalido.";
     $resultado["bueno"]=false;   
    }
    

    else if (empty($tel_pri)) {
    $resultado["error"]="Ingrese su numero de telefono.";
     $resultado["bueno"]=false;
    }
    elseif (empty($clave)) {
     $resultado["error"]="Por favor dijite su clave.";
     $resultado["bueno"]=false;
    }
    elseif (empty($clave2)) {
     $resultado["error"]="Por favor repita la clave.";
     $resultado["bueno"]=false;
    }
    elseif ($clave != $clave2) {
    $resultado["error"]="Las claves no coinsiden.";
     $resultado["bueno"]=false;
    }


  
}


if ($resultado["bueno"]==true) {
    $sql = "INSERT INTO persona (
                 id_tipo_docu, 
                num_docu,
                pri_nombre,
                seg_nombre,
                pri_apellido,
                seg_apellido,
                fecha_nac,
                id_sexo,
                id_mun_res,
                direccion,
                cor_pri,
                cor_alt,
                tel_pri,
                tel_alt,
                clave) 
                VALUES (
                '$id_tipo_docu', 
                '$num_docu',
                '$pri_nombre', 
                '$seg_nombre', 
                '$pri_apellido',
                '$seg_apellido',
                '$fecha_nac',
                '$id_sexo',
                '$id_mun_res',
                
                '$direccion',
                '$cor_pri',
                '$cor_alt',
                '$tel_pri',
                '$tel_alt',
                '$clave')";

$guardar=mysqli_query($conexion, $sql);
if ($guardar==1) {
      $resultado["error"]="Registro guardado con exito";
}

}


echo json_encode($resultado);










