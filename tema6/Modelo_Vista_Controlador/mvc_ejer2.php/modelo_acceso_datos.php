<?php
//NIVEL MODELO ACCESO DATOS
require_once 'modelo_abstraccion_bd.php';

$conexion=crearConexion("localhost","root","", "daw");

// En una sola función
// $est=getTodosLosEstudiantes($conexion);

//En dos funciones
$query=<<<sql
SELECT nombre, telefono FROM estudiante
sql;
$resultado=selectEstudiantes($conexion, $query);
$est=fecthResultado($resultado);

cerrarConexion($conexion);

?>