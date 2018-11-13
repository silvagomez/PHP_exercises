<?php
$num=array(
    'position0' => array(
        00
    ),
    'position1' => array(
        10
    ),
    'position2' => array(
        20
    ),
    'position3' => array(
        30
    ),
    'position4' => array(
        'dentro4' =>array(
            400,401,410,411,420,422
        ),
    ),
    'position5' => array(
        50
    )
);
print_r($num);
echo "<br><br>";
$numeros=[
    '0'=>['00'=>00],
    '1'=>['10'=>10],
    '2'=>['20'=>20],
    '3'=>['30'=>30],
    '4'=>['40'=>[400,401,402,403,404]],
    '5'=>['50'=>50]
];

print_r($numeros);
echo "<br><br>";

foreach ($numeros as $indice1 => $indice2) {
    echo $indice1;
    echo "<br>";
    foreach ($indice2 as $indice3 => $contenido) {
        echo "----".$indice3." contiene<br>"; //no puedo concatenar $contenido
        // echo "<br>";
        //Hay que preguntar si es un array por da un error pero igual muestra la info
        if (is_array($contenido)) {
            foreach ($contenido as $key => $value) {
                echo "----------------".$value;
                echo "<br>";
            }
        }else {
            //hay que hacer el else para eliminar el error de cast string array
            echo "----------------".$contenido;
        }
        echo "<br>";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "VERSION CORRECTA";
echo "<br>";
echo "<br>";
$numerin=[00,10,20,30,[[400,401],[410,411],[420,422]],50];
print_r($numerin);
echo "<br>";
echo "<br>";
foreach ($numerin as $indice1 => $valor) {
    echo $indice1." = ";
    if (is_array($valor)) {
        echo "<br>";
        foreach ($valor as $indice2 => $valor2) {
            // echo "--- = ";
            if (is_array($valor2)) {
                foreach ($valor2 as $indice3 => $valor3) {
                    echo "---".$valor3;
                    echo "<br>";
                }
            }else {
                // code...
            }
            // echo "<br>";
        }
    }else {
        echo $valor;
        echo "<br>";
    }
}

?>
