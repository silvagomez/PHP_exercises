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
        <h2>Prueba matemática</h2>
        <?php
        $num=$_GET['numero'];
        $cont=1;


        echo "Tabla del ".$num;echo "<br><br>";

        //no me funciona con heredoc, me imprime todo y no realiza el loop
//         echo <<<abc
//         <form class="" action="tema3_multiplicar3.php" method="get">
//             {while ($cont <= 10) {
//                 echo $num." x ".$cont." = <input type="number" name="result" value=""><br>";
//                 $cont++;
//             }}
//             <input type="submit" name="" value="Comprobar">
//         </form>
// abc;

// Asi sale =)
//      $pal='<input type="number" name="result" value=""><br>';
//      while ($cont <= 10) {
//      echo $num."x".$cont."=".$pal;
//      $cont++;
//      }

        echo '<form class="" action="tema3_multiplicar3.php" method="get">';
        while ($cont <= 10) {
            echo $num."x".$cont."= ";
            echo <<<abc
            <input type="number" name="$cont" value=""><br><br>
abc;
            $cont++;
        }
        echo '<input type="hidden" name="numero" value="'.$num.'"><br><br>';
        echo '<input type="reset" value="Borrar">';
        echo '<input type="submit" name="" value="Comprobar">
        </form>';


        ?>
    </body>
</html>
