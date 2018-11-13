<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--
        Obtener la tabla del 2 con do…while : 2-4-6-8-10-12-14-16-18-20-
        -->

        <?php
            $var2=2;
            $var1=1;

            do {
                echo ($var2*$var1)."\t";
                $var1++;
            } while ($var1 <= 10);
         ?>

    </body>
</html>
