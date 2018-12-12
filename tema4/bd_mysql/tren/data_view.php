<?php
require_once '../../../estilo/formato_i.php';
require_once 'conexion.php';
$conexion=getConexion();

echo <<<sql
    SELECT numero, fecha_compra FROM trenes 
sql;

echo <<<sql
    SELECT 
sql;

closeConexion($conexion);
require_once '../../../estilo/formato_f.php'
?>