<?php


$id_producto= $_GET['id_producto'];
$sql = "SELECT  id_producto,
                nombre, 
                id_marca,
            	modelo, 
            	stock,
            	fecha,
            	id_provedor,
            	referencia,
            	descripcion,
            	id_categoria
            	
        FROM producto 
        WHERE id_producto='$id_producto'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);