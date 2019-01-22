<?php 
require_once "../../estilo/formato_i.php";

if (isset($_COOKIE['la_cookie'])) {
    echo <<<html
        <p>
            HOLA {$_COOKIE['la_cookie']} <br>
            <strong>Árboles</strong> <br>
            Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros
        </p>
html;
} else {
    echo <<<html
        <p>
            <strong>Árboles</strong> <br>
            Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros
        </p>
        <a href="cookies_ejer1_pag1.php">Introducir nombre</a>
html;
}

require_once "../../estilo/formato_f.php";
?>