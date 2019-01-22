<?php 
require_once "../../estilo/formato_i.php";

    echo<<<html
    <form action="cookies_ejer2_pag2.php" method="post">
    <label>Introduce tu nombre: <input type="text" name="name"></label>
    <input type="submit" value="Aceptar">
    </form>
html;

require_once "../../estilo/formato_f.php";
?>