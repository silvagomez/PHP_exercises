<?php
require_once "../../estilo/formato_i.php";

if (isset($_COOKIE['la_cookie2'])) {
    // header("Location: ../cookies/cookies_ejer2_pag2.php ");
    //esta parte no me funciona se me va al else, pero la cookie existe
    echo "si";
} else {
    // header("Location: ../cookies/cookies_ejer2_pag1.php");
    echo "no";
}

require_once "../../estilo/formato_f.php";
?>