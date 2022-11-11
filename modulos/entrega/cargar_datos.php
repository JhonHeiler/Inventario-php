<?php


$id_entrega= $_GET['id_entrega'];
$sql = "SELECT  id_entrega,
                id_producto, 
                fecha_ad,
            	fecha_en,
            	respon,
            	cantidad,
                cargo            	
        FROM entrega 
        WHERE id_entrega='$id_entrega'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);