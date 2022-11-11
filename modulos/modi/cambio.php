<?php
//require_once("conexion.php");

$resultado = [];
$resultado["bueno"]=true;
$id_persona = $_POST['id_persona'];
$clave =$_POST['clave'];
$clave2 =$_POST['clave2'];
$clave3 =$_POST['clave3'];

$sql_perso="SELECT * FROM persona WHERE id_persona ='$_SESSION[id_per]'";
$datos=mysqli_query($conexion,$sql_perso);
$dato2=mysqli_fetch_assoc($datos);

if (empty($clave)) {
     $resultado["mensaje"]="Por favor dijite su contraseña actual.";
     $resultado["bueno"]=false;
    }
    elseif ($dato2["clave"] != $clave) {
        $resultado["mensaje"]="La contraseña actual no coincide.";
        $resultado["bueno"]=false;
    }
    elseif (empty($clave2)) {
     $resultado["mensaje"]="Por favor dijite su nueva contraseña.";
     $resultado["bueno"]=false;
    }
     elseif (empty($clave3)) {
     $resultado["mensaje"]="Por favor repita su nueva contraseña.";
     $resultado["bueno"]=false;
    }
    elseif ($clave2 != $clave3) {
    $resultado["mensaje"]="Las contraseñas no coinsiden.";
     $resultado["bueno"]=false;
    }
    


if ($resultado["bueno"]==true) {


$sql = "UPDATE persona SET 
                     
            clave ='$clave2'
            
        WHERE  
            id_persona = '$_SESSION[id_per]'    
                 ";
mysqli_query($conexion, $sql);



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