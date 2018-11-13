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
            <form class="" action="tema3_example2.php" method="post">
                <label>Nombre <input type="text" name="nombre" value=""></label>
                <br><br>
                <label>Apellido <input type="text" name="apellido" value=""></label>
                <br><br>
                <label>Nota Entorno sevidor <input type="number" name="nota1" value=""></label>
                <br><br>
                <label>Nota Entorno cliente <input type="number" name="nota2" value=""></label>
                <br><br>
                <label>Nota Diseño <input type="number" name="nota3" value=""></label>
                <br><br>
                <input type="submit" name="media" value="Nota media">
            </form>
            <br><br>
abc;
        }else {
            // $nom = $_REQUEST['nombre'];
            // $apel = $_REQUEST['apellido'];
            // $no1 = $_REQUEST['nota1'];
            // $no2 = $_REQUEST['nota2'];
            // $no3 = $_REQUEST['nota3'];

            function funcion1(){
                echo <<<abc
                El nombre del alumno es {$_REQUEST['nombre']} <br>
abc;
            }
            function funcion2($apel){
                echo <<<abc
                El apellido del alumno es $apel <br>
abc;
            }
            function funcion3(){
                return <<<abc
                Las notas para realizar la media son: {$_REQUEST['nota1']}, {$_REQUEST['nota2']}, {$_REQUEST['nota3']} <br>
abc;
            }
            function funcion4($nota1, $nota2, $nota3){
                $media = ($nota1+$nota2+$nota3)/3;
                return <<<abc
                La nota media es $media;
abc;
            }

            funcion1();
            funcion2($_REQUEST['apellido']);
            $notas=funcion3();
            echo $notas;
            $media=funcion4($_REQUEST['nota1'],$_REQUEST['nota2'],$_REQUEST['nota3']);
            echo $media;

        }





 ?>

    </body>
</html>
