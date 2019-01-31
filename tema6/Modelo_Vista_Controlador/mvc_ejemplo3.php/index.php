<?php
//NIVEL CONTROLADOR
// En este módulo se decide qué se ha de hacer, en función de las acciones del usuario con su interface. Con esta información, interactúa con el modelo para indicarle las acciones a realizar y, según el resultado obtenido, envía a la vista las instrucciones necesarias para generar el nuevo interface.
require_once('modelo3.php');
$est=getTodosLosEstudiantes();
require('vista3.php');
?>
