<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Convertir blanco en guiones</h2>
        <form class="" action="tema3_f5.php" method="post">
        <label>Texto: <input type="text" name="texto" value=""> </label>
        <input type="submit" name="" value="Enviar">
        </form>
        <br>
        <?php
            if (!$_REQUEST) {
                echo <<<'abc'
                Se utiliza la función: <br> <br>
                str_replace ( $search , $replace , $subject) <br>
                $search es valor que queremos reemplazar en $subject. <br>
                $replace es el valor que reemplazará en $subject.<br>
abc;
            }
            else {
                function en_guiones($a){
                	return str_replace(" ","-",$a);
                }

                $a=$_REQUEST['texto'];
                echo en_guiones($a);

            }

        ?>

    </body>
</html>
