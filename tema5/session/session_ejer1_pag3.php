<?php
session_start();
require_once "../../estilo/formato_i.php";

if (isset($_SESSION['nombre'])) {
    echo<<<html
    <strong>Bienvenido {$_SESSION['nombre']}</strong>
html;
} else {
    echo<<<html
    <strong>No puede acceder</strong>
html;
}


require_once "../../estilo/formato_f.php";
?>