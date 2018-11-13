<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--
        9.Generar un valor aleatorio entre 1 y 100, visualizar desde 1 hasta el valor generado (de uno en uno).
        Función para generar números aleatorios desde 1 hasta 100 : rand(1,100)
        -->

        <?php
            echo rand(1,100);echo "<br>";
            $num = rand(1,100);
            echo $num;echo "<br>";
            $a=1;
            do {
                echo $a."\t";
                $a++;
            } while ($a <= $num);
         ?>

    </body>
</html>
