<?php

//require_once("conexion.php");
$id_devolucion= $_GET['id_devolucion'];
$sql = "SELECT  id_devolucion,
                obse, 
                id_producto, 
                responsable, 
                fecha_de, 
                cantidad
            	
        FROM devolucion 
        WHERE id_devolucion='$id_devolucion'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);