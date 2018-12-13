<?php
require_once '../../../../estilo/formato_i.php';
require_once '../conexion.php';
$conexion=getConexion();

mysqli_close($conexion);
require_once '../../../../estilo/formato_f.php';
?>