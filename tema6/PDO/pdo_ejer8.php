<?php
//EJERCICIO DE UPDATE
$nom="andres";
$id=5;
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $smt = $con->prepare('UPDATE estudiante SET nombre = :nombre WHERE id = :id');
    $rows = $smt->execute(array(':nombre' => $nom , ':id' => $id ));
    if ($rows==1) {
        echo "Update OK";
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>