<?php


$id_sexo= $_GET['id_sexo'];
$sql = "SELECT  id_sexo,
				nombre           	
        FROM sexo 
        WHERE id_sexo='$id_sexo'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);