<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tabla de multiplicar</title>
        <style media="screen">
            body{
                margin: 0 auto;
                text-align: center;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <main>
            <?php
            if(!$_GET){
                echo <<<abc
                <h2>Comprueba tu habilidad matemática</h2>
                <form class="" action="tema3_multiplicar_oneforall.php" method="get">
                    <label for="">Ingresa un número</label>
                    <br>
                    <input type="number" name="numero" value="">
                    <br>
                    <input type="submit" name="Iniciar" value="Iniciar">
                </form>
abc;
            }
            else if (isset($_GET['Iniciar'])){
                echo <<<abc
                <h2>Comprueba tu habilidad matemática</h2>
                <form class="" action="tema3_multiplicar_oneforall.php" method="get">
                    <label for="">Ingresa un número</label>
                    <br>
                    <input type="number" name="numero" value="">
                    <br>
                    <input type="submit" name="Iniciar" value="Iniciar">
                </form>
abc;
                echo "<br><br>";
                $num=$_GET['numero'];
                $cont=1;
                echo "Tabla del ".$num;echo "<br><br>";

                echo '<form class="" action="tema3_multiplicar_oneforall.php" method="get">';
                while ($cont <= 10) {
                    echo $num."x".$cont."= ";
                    echo <<<abc
                    <input type="number" name="$cont" value=""><br><br>
abc;
                    $cont++;
                }
                echo '<input type="hidden" name="numero" value="'.$num.'"><br>';
                echo '<input type="reset" value="Borrar">';
                echo '<input type="submit" name="Comprobar" value="Comprobar">
                </form>';
                /**/


            }
            else {
                echo "parte tres";
                echo <<<abc
                <h2>Comprueba tu habilidad matemática</h2>
                <form class="" action="tema3_multiplicar_oneforall.php" method="get">
                    <label for="">Ingresa un número</label>
                    <br>
                    <input type="number" name="numero" value="">
                    <br>
                    <input type="submit" name="" value="Iniciar">
                </form>
abc;
                echo "<br><br>";
                $num=$_GET['numero'];
                $cont=1;
                echo "Tabla del ".$num;echo "<br><br>";

                echo '<form class="" action="tema3_multiplicar_oneforall.php" method="get">';
                while ($cont <= 10) {
                    echo $num."x".$cont."= ";
                    echo <<<abc
                    <input type="number" name="$cont" value=""><br><br>
abc;
                    $cont++;
                }
                echo '<input type="hidden" name="numero" value="'.$num.'"><br>';
                echo '<input type="reset" value="Borrar">';
                echo '<input type="submit" name="" value="Comprobar">
                </form>';
                /**/
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
            }
            ?>
        </main>
    </body>
</html>
