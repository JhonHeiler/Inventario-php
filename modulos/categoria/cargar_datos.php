<?php

//require_once("conexion.php");
$id_categoria= $_GET['id_categoria'];
$sql = "SELECT  id_categoria,
				nombre           	
        FROM categoria 
        WHERE id_categoria='$id_categoria'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);