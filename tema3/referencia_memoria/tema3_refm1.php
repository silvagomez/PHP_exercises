<?php
function sumar_uno(&$x) {
    $x++;
    echo $x."<br>";
}

$a = 2;
echo $a."<br>";

sumar_uno($a); // 3

// $a se pasó por referencia a suma_uno()
// El cambio dentro de la función
// se refleja en la referencia original
echo $a; // 3

?>