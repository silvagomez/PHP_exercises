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
                <form class="" action="tema3_fgrafica6_p1.php" method="post">
                    <label>Números a verificar</label>
                    <br>
                    <img src="tema3_fgrafica6_p2.php">
                    <br>
                    <label>Teclea los números que aparecen en el gráfico </label>
                    <br>
                    <input type="number" name="numero" value="">
                    <input type="submit" name="verificar" value="Verificar">
                </form>
abc;
            }else {
                session_start();
                if ($_REQUEST['numero'] != $_SESSION['valoraleatorio']) {
                    echo "Incorecto";
                }else {
                    echo "Correcto";
                }
            }
        ?>
    </body>
</html>
