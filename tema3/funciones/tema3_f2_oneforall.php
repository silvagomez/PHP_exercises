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
                <h1>Ejercicio Funciones 2</h1>
                <form class="" action="tema3_f2_oneforall.php" method="post">
                    <label>Ingrese un número <input type="number" name="number" value=""></label>
                    <input type="submit" name="exe" value="ejecutar">
                </form>
abc;
            }
            else{
                echo <<<abc
                <h1>Ejercicio Funciones 2</h1>
abc;
                $num=$_REQUEST['number'];
                function funcion1($numero){
                    $aux=0;
                    for ($x=1; $x <=$numero ; $x++) {
                        $aux+=$x;
                    }
                    return $aux;
                }
                $resul=funcion1($num);
                echo <<<abc
                Resultado de la suma de los numeros hasta el $num es $resul <br>
abc;
            }


        ?>

    </body>
</html>
