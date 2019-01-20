<?php
require_once "../../estilo/formato_i.php";

if (isset($_COOKIE['colores']))  echo "bgcolor=\"$_COOKIE[colores]\"";

echo<<<html
<form action="cookies_ejemplo1_p2.php" method="post">
Seleccione de que color desea que sea la página :<br />
<input type="radio" value="rojo" name="radio">Rojo<br />
<input type="radio" value="verde" name="radio">Verde<br />
<input type="radio" value="azul" name="radio">Azul<br />

<input type="submit" value="Crear cookie">
</form>
html;

require_once "../../estilo/formato_f.php";
?>