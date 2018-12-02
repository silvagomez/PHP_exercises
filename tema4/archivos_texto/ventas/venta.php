<?php
require_once '../../../Estilo/formato_i.php';
if (!$_REQUEST) {
    echo "ERROR: Campos vacios <br>";
    organizarDatos();
} else {
    $code_client=$_REQUEST['codigo_c'];
    $code_art=$_REQUEST['codigo_a'];
    $desc=$_REQUEST['descripcion'];
    $price=$_REQUEST['precio'];
    $cant=$_REQUEST['cantidad'];
    $fecha=date('j/n/Y');
    $archivo=fopen("ventas.dat","a") or die("ERROR!"); // "a" para crear y para escribir
    fwrite($archivo,$code_client."|");
    fwrite($archivo,$code_art."|");
    fwrite($archivo,$desc."|");
    fwrite($archivo,$price."|");
    fwrite($archivo,$cant."|");
    fwrite($archivo,$fecha);
    fwrite($archivo, PHP_EOL);
    fclose($archivo);
    echo <<<abc
        <h3>Venta guardada satisfactoriamente</h3>
        <a href="venta.html"><input type="button" value="Volver"></a>
abc;
    organizarDatos();
}
function organizarDatos()
{
    $archivo=fopen('ventas.dat', 'r') or die('ERROR: Revisar código');
    rewind($archivo);
    $contador_lineas=1;
    $linea=fgets($archivo);
    while (!feof($archivo)) {
        utf8_encode($linea);
        $campo[$contador_lineas]=explode("|",$linea);
        $linea=fgets($archivo);
        print_r($campo);
    }
    fclose($archivo);
}
require_once '../../../estilo/formato_f.php';
?>