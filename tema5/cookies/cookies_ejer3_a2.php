<?php 
if(isset($_COOKIE['la_cookie2'])){
    setcookie('la_cookie2',"",time()-1000);
    require_once "../../estilo/formato_i.php";

    echo<<<html
        <p>Cookie eliminada</p>
html;

    require_once "../../estilo/formato_f.php";

}else {

    require_once "../../estilo/formato_i.php";

    echo<<<html
        <p>La cookie no existe</p>
html;

    require_once "../../estilo/formato_f.php";
}
?>