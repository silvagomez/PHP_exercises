<?php
require_once '../../../../estilo/formato_i.php';
require_once '../conexion.php';
$numero=$_REQUEST['numero_tren'];
$fecha=$_REQUEST['nueva_fecha'];
$conexion=getConexion();
$q=<<<sql
    UPDATE trenes SET fecha_compra='$fecha' WHERE numero='$numero'
sql;
mysqli_query($conexion,$q) or die('ERROR');
echo "Actualizado";
$q=<<<sql
    SELECT * FROM trenes WHERE numero='$numero'
sql;
$registro=mysqli_query($conexion,$q) or die ();
while ($reg=mysqli_fetch_array($registro)) {
    echo <<<html
        <p>
        Número de tren: {$reg['numero']} <br>
        Fecha de compra: {$reg['fecha_compra']} <br>
        Km recorridos: {$reg['km_recorridos']} <br>
        </p>
html;
}
mysqli_close($conexion);
require_once '../../../../estilo/formato_f.php';
?>