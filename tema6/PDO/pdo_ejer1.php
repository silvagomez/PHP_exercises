<?php
// $con = new PDO('mysql:host=localhost;dbname=nombreBaseDatos', 'user', 'pass');
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $datos = $con->query('SELECT nombre FROM estudiante');
    print_r($datos);
    foreach ($datos as $key => $value) {
        echo "<br>".$value['nombre']."<br>";
    }
} catch (PDOException $e) {
    echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
?>