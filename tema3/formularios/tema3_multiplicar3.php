<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            body{
                margin: 0 auto;
                text-align: center;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <h2>Prueba matemática resultado</h2>
        <?php
        $num=$_GET['numero'];
        //$result=$_GET['1'];
        $cont=1;
        echo "Tabla del ".$num;echo "<br><br>";

        while ($cont <=10) {
            //echo $_GET[$cont];
            if ($_GET[$cont]==$num*$cont) {
                echo $num."x".$cont."= ";
                echo $_GET[$cont];
                echo "\tcorrecto<br><br>";
                echo <<<abc
                <iframe src="https://giphy.com/embed/26tknCqiJrBQG6bxC" width="180" height="146" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><br><br>
abc;
            }
            else {
                echo $num."x".$cont."= ";
                echo $_GET[$cont];
                echo "\tincorrecto<br><br>";
                echo <<<abc
                <iframe src="https://giphy.com/embed/hPPx8yk3Bmqys" width="180" height="135" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><br><br>
abc;
            }
            $cont++;
        }
        echo <<<abc
        <a href="tema3_multiplicar1.html"><input type="button" value="Volver a intentar"></a>
abc;

        ?>
    </body>
</html>
