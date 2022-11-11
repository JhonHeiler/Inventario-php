<?php


$id_marca= $_GET['id_marca'];
$sql = "SELECT  id_marca,
				nombre           	
        FROM marca 
        WHERE id_marca='$id_marca'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);