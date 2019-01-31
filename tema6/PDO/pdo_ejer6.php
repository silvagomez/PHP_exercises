<?php
$telefono=66722103;
try {
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
    $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE telefono like :telefono');
    $stmt->bindParam(':telefono',$telefono,PDO::PARAM_INT);
    $stmt->execute();
    while( $datos = $stmt->fetch() )
    echo $datos[0] . '<br/>';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>