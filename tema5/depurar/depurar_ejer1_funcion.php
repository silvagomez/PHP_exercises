<?php
function depurar_array($miarray, $die=0) {
    // Muestro el esquema del array
    echo "<pre> ";
    print_r($miarray);
    echo "</pre> ";
    // Detengo la ejecución
    if($die) die();
}    
?>