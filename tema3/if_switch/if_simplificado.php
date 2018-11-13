<?php
$n1=1;
$n2=2;
echo '$n1 < $n2 ? "menor":"mayor" <br>';
echo $n1 < $n2 ? "menor <br>":"mayor <br>";
echo '$n2 < $n1 ? "menor":"mayor" <br>';
echo $n2 < $n1 ? "menor <br>":"mayor <br>";

$a=$n1 < $n2  ? return $o="menor": return $o="mayor";
echo $a;

?>
