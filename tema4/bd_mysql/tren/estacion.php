<?php
require_once 'conexion.php';
$conexion=getConexion();
$q=<<<sql
INSERT INTO estaciones(nombre,poblacion) VALUES('{$_REQUEST['nom_estacion']}','{$_REQUEST['poblacion']}');
sql;
mysqli_query($conexion,$q) or die("ERROR: Insert");
closeConexion($conexion);
?>