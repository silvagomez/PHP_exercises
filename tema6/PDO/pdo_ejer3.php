<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $stmt = $con->prepare('SELECT nombre FROM estudiante');
    $stmt->execute();
    print_r($stmt);
    while ($datos=$stmt->fetch()) {
        echo "<br>".$datos[0]."<br>";
    }

    echo "<hr>";

    $stmt2 = $con->prepare('SELECT nombre, count(*) as total FROM estudiante GROUP BY nombre ');
    $stmt2->execute();
    while ($datos2=$stmt2->fetch()) {
        echo "<br>".$datos2['nombre']." ".$datos2['total']."<br>";
        // print_r($datos2);
    }
    
    echo "<hr>";

    $stmt3 = $con->prepare('SELECT nombre, count(*) as total FROM estudiante GROUP BY nombre HAVING count(nombre)>=2');
    $stmt3->execute();
    while ($datos3=$stmt3->fetch()) {
        echo "<br>".$datos3['nombre']." ".$datos3['total']."<br>";
        // print_r($datos2);
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>