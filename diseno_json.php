<?php
if ($mod_permitir_acceso == true) {
    require_once($mod_ruta_archivo);
} else {
    $resultado = [];
    $resultado['error']=true;
    $resultado['mensaje']="Acceso denegado !";
    echo json_encode($resultado);

 }
