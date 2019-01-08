<?php
header('Content-Type: text/html; charset=UTF-8');

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<p>Has pusaldo cancelar</p>";
    exit;
}
else{
    if ($_SERVER['PHP_AUTH_USER']=="dwes" && $_SERVER['PHP_AUTH_PW']=="abc123") {
        echo "<p>Entrando...</p>";
    }
    echo "<p>Bienvenido {$_SERVER['PHP_AUTH_USER']} </p>";
}
?>