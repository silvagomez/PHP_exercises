<?php
//EJERCICIO DE INSERT
$nom="andres";
$apel="gomez";
$tel=2474900;
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $smt = $con->prepare('INSERT INTO estudiante (nombre, apellido, telefono) VALUES (:nombre, :apellido, :telefono)');
    $rows = $smt->execute(array(':nombre' => $nom , ':apellido' => $apel,':telefono' => $tel ));
    if ($rows==1) {
        echo "Insert OK";
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
