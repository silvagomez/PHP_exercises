<?php
require_once 'conexion.php';
$conexion=getConexion();
$q=<<<sql
INSERT INTO recorridos(cod_tren, cod_estacion) VALUES('{$_REQUEST['cod_tren']}','{$_REQUEST['cod_estacion']}');
sql;
mysqli_query($conexion,$q) or die("ERROR: Insert");
closeConexion($conexion);
echo<<<html
    Correcto <br> <a href="recorrido.html">Agregar más</a>
html;
?>