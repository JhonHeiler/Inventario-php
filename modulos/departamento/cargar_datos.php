<?php

//require_once("conexion.php");
$id_departamento= $_GET['id_departamento'];
$sql = "SELECT  id_departamento,
				nombre           	
        FROM departamento 
        WHERE id_departamento='$id_departamento'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);