<?php
//NIVEL MODELO ACCESO DATOS
require_once 'modelo_abstraccion_bd.php';

$con=crearConexion();
$est=getTodosLosEstudiantes($con);
cerrarConexion($con);

?>