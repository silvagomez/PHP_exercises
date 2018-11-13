<?php
    function esPar($numero){
        if ($numero == 1) {
            return false;
        }elseif ($numero == 0) {
            return true;
        }else {
            $aux=$numero-2;
            $retorno=esPar($aux);
            comprobar($aux);
            return $retorno;
        }
    }
    $num=6;
    if (esPar($num)==true)
        echo $num.' es par<br/>';
    else
        echo $num.' es impar<br/>';

    function comprobar($numero){
        echo 'el valor de $aux es '.$numero.'<br/>';
    }
?>
