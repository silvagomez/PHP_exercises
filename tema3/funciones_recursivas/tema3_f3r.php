<?php
$var =array('pepito'=>1,2,5,8,array('pepito'=>2,3,array('pepito'=>1,2)));
function recorrido($arg){
    $resultado=0;
    foreach ($arg as $key => $value) {
        if(is_array($value)){
            $array2=$arg[$key];
            $resultado=$resultado+recorrido($array2);

        }else{
            $resultado=$resultado+$value;
            echo $resultado."<br>";
        }
    }
    echo $arg['pepito'];
    $resultado=$resultado-$arg['pepito']; //toma todos los pepitos del array
    return $resultado;
}
$total = recorrido($var);
echo $total."<br>";

?>