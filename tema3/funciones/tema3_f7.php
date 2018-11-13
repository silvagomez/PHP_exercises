<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Ejercicio de media</h2>
        <form class="" action="tema3_f7.php" method="post">
            <label>Número 1 <input type="number" name="n1" value=""> </label> <br><br>
            <label>Número 2 <input type="number" name="n2" value=""> </label> <br><br>
            <label>Número 3 <input type="number" name="n3" value=""> </label> <br><br>
            <label>Número 4 <input type="number" name="n4" value=""> </label> <br><br>
            <input type="submit" name="media" value="Media">
        </form>
        <br>
        <?php
            if (!$_REQUEST) {
                // code...
            }
            else{
                $n1=$_REQUEST['n1'];
                $n2=$_REQUEST['n2'];
                $n3=$_REQUEST['n3'];
                $n4=$_REQUEST['n4'];
                function media($n1,$n2,$n3,$n4){
                    $media=($n1+$n2+$n3+$n4)/4;
                    return $media;
                }
                $resultado=media($n1,$n2,$n3,$n4);
                echo <<<abc
                La nota media es $resultado.
abc;
            }
        ?>

    </body>
</html>
