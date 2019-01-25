<?php
require_once "../../estilo/formato_i.php";

echo <<<html
    <form method="post" action="inyecc_ejer1_p2.php">
        <label>Introduzca el nombre que desea buscar</label><br>
        <label> <input type="text" name="nombre"> </label>
        <input type="submit" value="acpetar">
    </form>

html;

require_once "../../estilo/formato_f.php";
?>