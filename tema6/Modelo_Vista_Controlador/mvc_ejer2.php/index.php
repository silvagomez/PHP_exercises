<?php
//NIVEL CONTROLADOR
require_once 'modelo_abstraccion_bd.php';
require_once 'modelo_acceso_datos.php';
$est=getTodosLosEstudiantes();
require_once 'logica.php';
require_once 'layout.php';
?>