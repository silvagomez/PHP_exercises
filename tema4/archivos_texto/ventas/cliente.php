<?php
require_once '../../../Estilo/formato_i.php';
if (!$_REQUEST) {
    echo "ERROR: Campos vacios";
} else {
    $code_client=$_REQUEST['codigo'];
    $nombre=$_REQUEST['nombre'];
    $dir=$_REQUEST['direccion'];
    $archivo=fopen("cliente.dat","a") or die("ERROR!"); // "a" para crear y para escribir
    fwrite($archivo, $code_client."|");
    fwrite($archivo, $nombre."|");
    fwrite($archivo, $dir);
    fwrite($archivo, PHP_EOL); // salto de linea tanto para html como documentos de txt
    fclose($archivo);
    echo <<<abc
    <h3>Cliente guardado satisfactoriamente</h3>
    <a href="cliente.html"><input type="button" value="Volver"></a>
abc;
}
require_once '../../../estilo/formato_f.php';
?>