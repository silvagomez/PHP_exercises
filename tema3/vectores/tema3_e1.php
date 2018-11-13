<?php
    $numeros= array(1,2,3,4,5,6,7,8,9,10);
    foreach ($numeros as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
    $numeros2=[1,2,3,4,5,6,7,8,9,10];
    foreach ($numeros2 as $key => $value) {
        echo $value." ";
    }

    echo "<br>";
    echo "<br>";
    foreach (array_reverse($numeros) as $key => $value) {
        echo $value." ";
    }

    echo "<br>";
    for($x = count($numeros)-1; $x >= 0; $x--) {
    echo $numeros[$x].'-';
    }
    echo "<br>";
    echo "<br>";
    /*************/

    for ($x=0; $x <count($numeros)/2 ; $x++) {
        echo $numeros[$x].' ';
    }
    echo "<br>";
    echo "<br>";
    /*************/

    for ($x=5; $x <count($numeros) ; $x++) {
        echo $numeros[$x].' ';
    }
    echo "<br>";
    echo "<br>";


    shuffle($numeros);
    foreach ($numeros as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
    sort($numeros);
    foreach ($numeros as $key => $value) {
        echo $value." ";
    }




?>
