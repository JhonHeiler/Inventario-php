<?php

//require_once("conexion.php");
$id_persona= $_GET['id_persona'];
$sql = "SELECT  id_persona,
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
            	clave
        FROM persona 
        WHERE id_persona='$id_persona'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);