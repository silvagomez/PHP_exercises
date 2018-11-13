<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--Obtener la tabla del 2 con for : 2-4-6-8-10-12-14-16-18-20-
        Colocar al principio del programa la fecha del servidor; con la función date(“d|m|Y”);
        -->
        <?php
        echo date("d/m/Y");echo "<br>";
            for ($i=1; $i <=10 ; $i++) {
                echo (2*$i)."-";
            }
        ?>

    </body>
</html>
