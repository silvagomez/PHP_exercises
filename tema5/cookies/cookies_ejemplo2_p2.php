<?php

header('Content-Type: text/html; charset=UTF-8');
if ($_REQUEST['radio']=="rojo")
 setcookie("colores","#ff0000",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="verde")
setcookie("colores","#00ff00",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="azul")
setcookie("colores","#0000ff",time()+60*60*24*365);

require_once "../../estilo/formato_i.php";

echo <<<html
    <p>Se creo la cookie</p>
    <a href="cookies_ejemplo1_p1.php">Ir a la otra página</a>
html;

require_once "../../estilo/formato_f.php";

?>