<?php


$id_identificacion= $_GET['id_identificacion'];
$sql = "SELECT  id_identificacion,
				nombre,
				abre           	
        FROM identificacion 
        WHERE id_identificacion='$id_identificacion'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);