<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--
        Realizar el ejercicio con switch
        Declarar 3 variables: $opcion, $n1,$n2
        Si opción contiene una s, visualizar la suma de $n1 más $n2.
        Si opción contiene una r, visualizar la resta de $n1 menos $n2.
        Si  opción contiene una m, visualizar el producto de  $n1 por $n2,
        Si  opción contiene una d,  visualizar el cociente de $n1 entre $n2,
        Si opción no contiene ninguno de los valores anteriores, visualizar un mensaje de error.
        -->

        <?php
            $opcion="s";
            $n1=2;
            $n2=4;

            switch ($opcion) {
                case 's':
                    echo "La suma de ".$n1." más ".$n2." es: ".($n1+$n2);
                    break;
                case 'r':
                    echo "La resta de ".$n1." más ".$n2." es: ".($n1-$n2);
                    break;
                case 'm':
                    echo "La multiplicación de ".$n1." más ".$n2." es: ".($n1*$n2);
                    break;
                case 'd':
                    echo "La división de ".$n1." más ".$n2." es: ".($n1/$n2);
                    break;
                default:
                    echo "error";
                    break;
            }

        ?>

    </body>
</html>
