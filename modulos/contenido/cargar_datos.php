<?php

require_once("conexion.php");
$contenido_id = $_GET['contenido_id'];
$sql = "SELECT  contenido_id,
                titulo,
                modulo,
                contenido
        FROM contenido 
        WHERE contenido_id='$contenido_id'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);