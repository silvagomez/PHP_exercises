<?php
require_once '../../../../estilo/formato_i.php';
require_once '../conexion.php';
$numero=$_REQUEST['numero_tren'];
$conexion=getConexion();
$q=<<<sql
    SELECT * FROM trenes where numero=$numero
sql;
$registro=mysqli_query($conexion,$q) or die('ERROR en la query');
if (mysqli_num_rows($registro)>0) {
    $reg=mysqli_fetch_array($registro);
    echo <<<html
        Existe el tren $numero <br>
        Fecha de compra: {$reg['fecha_compra']}<br>
        <form action="update_tren3.php" method="post">
            <label for="">Modificar fecha de compra</label><br>
            <input type="date" name="nueva_fecha" required>
            <input type="hidden" name="numero_tren" value="$numero">
            <input type="submit" value="Confirmar">
        </form> 
        <a href="update_tren1.php">Volver</a>
html;
    closeConexion($conexion);
} else {
    echo <<<html
    No existe el tren $numero <br>
    <a href="update_tren1.php">Volver</a>
html;
    closeConexion($conexion);
}
require_once '../../../../estilo/formato_f.php';
?>