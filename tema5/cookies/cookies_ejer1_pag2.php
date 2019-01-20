<?php 
if(isset($_REQUEST['name'])){
    setcookie('la_cookie',$_REQUEST['name']);
}

require_once "../../estilo/formato_i.php";

echo<<<html
    <a href="cookies_ejer1_pag3.php">Ver información de la página</a>
html;

require_once "../../estilo/formato_f.php";
?>