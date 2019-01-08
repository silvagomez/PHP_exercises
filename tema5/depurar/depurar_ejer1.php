<?php
$capitales=array('Madrid','París','Londres');
echo "<b>Matriz vista por echo</b><br>";
foreach ($capitales as $key => $value) {
    echo $value."<br>";
}
echo "<br>";
echo "<b>Matriz vista por print_r</b><br>";
print_r($capitales);
echo "<br><br>";
echo "<b>Matriz vista por print_r y la etiqueta pre</b><br>";
echo "<pre>";
print_r($capitales);
echo "</pre>";
echo "<br>";
echo "<b>Matriz vista por var_dump()</b><br>";
var_dump($capitales);
echo "<br>";
echo "<b>Mediante la función depurar_array()</b><br>";
require_once "depurar_ejer1_funcion.php";
depurar_array($capitales,0);
?>