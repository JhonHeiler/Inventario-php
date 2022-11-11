<?php


$id_provedor= $_GET['id_provedor'];
$sql = "SELECT  id_provedor,
                tipo_docu, 
                num_docu,
            	nombre,
            	telefono,
            	direccion            	
        FROM proveedores 
        WHERE id_provedor='$id_provedor'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);
