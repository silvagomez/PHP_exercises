<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $tel=8106658;
    $datos=$con->query('SELECT nombre FROM estudiante WHERE telefono like '.$con->quote($tel)); //quote() para que no se permita inyeccion de sql
    foreach ($datos as $key => $value) {
        echo $value['nombre'];
    }

} catch (PDOException $e) {
    echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
?>