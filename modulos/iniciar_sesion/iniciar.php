<?php
$usuario = $_POST['usuario'];
$clave  = $_POST['clave'];
$sql = "SELECT  * FROM persona  inner JOIN persona_rol pr on persona.id_persona = pr.id_persona WHERE num_docu='$usuario'";
$rs = mysqli_query($conexion, $sql);
$respuesta = [];
if ($row = mysqli_fetch_assoc($rs)) {
    //En caso de encontrar el usuario  en la base de datos
    if ($row['clave'] == $clave) {
        // Si la clave de la DB es igual a la que escribio el usuario
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id_rol'] = $row['id_rol'];
        $_SESSION['nombre_usuario'] = $row['pri_nombre'] . " "  . $row['seg_nombre'] .  " "  . $row['pri_apellido']
        ;
        $_SESSION['id_per'] =$row['id_persona'];
        
        $respuesta['mensaje'] = "Ok.";
        $respuesta['error'] = false;
    } else {
        // Si la clave que escribio el usuario es diferente a la que hay 
        // en la base de datos
        $respuesta['mensaje'] = "Contraseña incorrecta.";
        $respuesta['error'] = true;
    }
} else {
    //En caso de NO encontrar el usuario  en la base de datos
    $respuesta['mensaje'] = "Usuario no encontrado.";
    $respuesta['error'] = true;
}
echo json_encode($respuesta);
