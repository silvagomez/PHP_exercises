<?php
print "<B><U>Recursividad </U></B><BR><BR>";
echo "El factorial de 4 es " . (factorial(4));

function factorial($var) {
    if ($var == 0) return 1;
    else
    return $var * factorial ($var -1);
}
?>
