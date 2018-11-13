<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Ejercicio 8 de funciones</h2>
        <form class="" action="tema3_f8.php" method="post">
            <label>Ingrese un caracter <input type="text" name="caracter" value=""> </label><br><br>
            <label>Ingrese un número <input type="number" name="number" value=""> </label><br><br>
            <input type="submit" name="" value="Dibujar">
        </form>
        <br>

        <?php
            $ca;
            $nu;
            function dibujo($ca,$nu){
                for ($x=0; $x <$nu ; $x++) {
                    for ($y=0; $y <$nu ; $y++) {
                        echo $ca;
                    }
                    echo "<br>";
                }
            }
            if (!$_REQUEST) {
            }
            else{

                if (!$_REQUEST['caracter']) {
                    if (!$_REQUEST['number']) {
                        echo "Ingrese un caracter y número";
                    }
                    else {
                        echo "Ingrese un caracter";
                    }
                }
                else {
                    if (!$_REQUEST['number']) {
                        echo "Ingrese un número";
                    }
                    else {
                        $ca=$_REQUEST['caracter'];
                        $nu=$_REQUEST['number'];
                        dibujo($ca,$nu);
                    }
                }
            }
        ?>

    </body>
</html>
