<?php
//NIVEL MODELO ACCESO DATOS
require_once 'modelo_abstraccion_bd.php';

$conexion=crearConexion();

// En una sola función
// $est=getTodosLosEstudiantes($conexion);

//En dos funciones
$resultado=selectEstudiantes($conexion);
$est=fecthResultado($resultado);

cerrarConexion($conexion);

?>