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
            <h1>Ejercicio Funciones 3</h1>
            <form class="" action="tema3_f3.php" method="post">
                <label>Número 1 <input type="number" name="num1" value=""> </label>
                <br><br>
                <label>Número 2 <input type="number" name="num2" value=""> </label>
                <br><br>
                <input type="submit" name="compare" value="Comparar">
            </form>
abc;
        }
        else {
            echo <<<abc
            <h1>Resultado</h1>
abc;
            $n1=$_REQUEST['num1'];
            $n2=$_REQUEST['num2'];

            function funcion3($n1,$n2){
                if($n1>$n2){
                    echo <<<abc
                    $n1 es mayor que $n2
abc;
                }
                elseif ($n1==$n2) {
                    echo <<<abc
                    $n2 y $n1 son iguales
abc;
                }
                else{
                    echo <<<abc
                    $n2 es mayor que $n1
abc;
                }
            }
            echo funcion3($n1,$n2);
        }
         ?>


    </body>
</html>
