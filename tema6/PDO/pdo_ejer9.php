<?php
//EJERCICIO DE DELETE
$id=7; //verificar con la base de datos
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $smt = $con->prepare('DELETE FROM estudiante WHERE id = :id');
    $rows = $smt->execute(array(':id' => $id ));
    if ($rows==1) {
        echo "Delete OK";
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
