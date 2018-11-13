<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if (!$_REQUEST) {
                echo <<<abc
                <h1>Ejercicio Funciones 4</h1>
                <form class="" action="tema3_f4.php" method="post">
                <label>Ingrese un número <input type="number" name="number" value=""> </label>
                <input type="submit" name="" value="Potenciar">
                </form>
abc;
            }
            else{
                $n1=$_REQUEST['number'];
                function potencia2($n1){
                    echo pow($n1,2);
                }
                function potencia3($n1){
                    echo $n1**3;
                }
                echo <<<abc
                <h1>Ejercicio Funciones 4</h1>
abc;
                echo "La potencia de $n1 ^2 es ";echo potencia2($n1)."<br>";
                echo "La potencia de $n1 ^3 es ";echo potencia3($n1)."<br>";

            }
        ?>

    </body>
</html>
