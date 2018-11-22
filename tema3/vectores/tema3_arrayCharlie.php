<?php
$temp = array('horario1' => "mañana",array("dia1"=>"lunes"),"horario2"=>"tarde",array('dia1' => "lunes"));

print_r($temp);
echo "<br>";
echo is_array($temp["horario1"])?"array":"no es array";
echo "<br>";
echo is_array($temp["mañana1"])?"array":"no es array";
echo "<br>";
echo is_array($temp["0"])?"array":"no es array";
?>