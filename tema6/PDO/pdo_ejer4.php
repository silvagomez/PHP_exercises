<?php

$telefono=2162885;
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE telefono like :telefono');
    $stmt->execute(array(':telefono' => $telefono ));
    while( $datos = $stmt->fetch() )
    echo $datos[0] . '<br/>';

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>