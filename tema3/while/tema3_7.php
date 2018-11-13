<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h2>Múltiplos de 4 de 100 a 400";
            echo "<hr>";
            $num1=4;
            $num2=100;
            $num3=400;

            for ($cont=0;$num2<=$num3;$num2++ ) {
                if ($num2%$num1==0) {
                    echo "$num2- ";
                }
            }
            echo "<br>";
            echo "<br>";
            $num1=4;
            $num2=100;
            $num3=400;
            $cont=0;

            while ($num2<=$num3) {
                if ($num2%$num1==0) {
                    echo "$num2- ";
                }
                $num2++;
            }

            echo "<br>";
            echo "<br>";
            $num1=4;
            $num2=100;
            $num3=400;
            $cont=0;

            while ($num2<=$num3 && $cont<=10) {
                if ($num2%$num1==0) {
                    echo "$num2- ";
                }
                if ($cont==10) {
                    echo "<br>";
                    $cont=0;
                }
                $num2++;
                $cont++;
            }




        ?>

    </body>
</html>
