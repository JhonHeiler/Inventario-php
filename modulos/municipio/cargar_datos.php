<?php


$id_municipio= $_GET['id_municipio'];
$sql = "SELECT  id_municipio,
				nombre,
				id_departamento           	
        FROM municipio 
        WHERE id_municipio='$id_municipio'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);