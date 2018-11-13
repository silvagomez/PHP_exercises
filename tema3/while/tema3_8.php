<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <!--
        8.Mostramos los números de los días del 1 a la fecha actual.
        Para obtener el día de la fecha del servidor : date(“d”);
        -->
        <?php
            echo date("l");echo "<br>"; //Texto representativo del día, con todas las letras y en inglés
            echo date("d");echo "<br>"; //Día del mes
            echo date("N");echo "<br>"; //Representación numérica del día de la semana 1 (lunes) a 7 (domingo)
            echo date("w");echo "<br>"; //Representación numérica del día de la semana siendo 0 domingo y 6 el sábado
            echo date("z");echo "<br>"; //Día del año desde 0 hasta 365

            $cont=1;

            while ($cont <= date("d")) {
                echo $cont." \t";
                $cont++;
            }

        ?>

    </body>
</html>
