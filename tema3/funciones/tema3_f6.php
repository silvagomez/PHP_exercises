<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Convesor de Moneda Pesos Colombianos - Euros</h2>
        <form class="" action="tema3_f6.php" method="post">
            <select class="" name="opmoneda">
                <option value="se">Seleccione la moneda</option>
                <option value="co">Peso Colombiano</option>
                <option value="eu">Euro</option>
            </select>
            <input type="number" step="any" name="dinero" value="">
            <input type="submit" name="conversor" value="Convertir">
        </form>
        <br>
        <?php
            function euroApesoco($co){
                $co=$co;
                $euro=3.500;
                $conversion=$co*$euro;
                return $conversion;

            }
            function pesocoAeuro($eu){
                $eu=$eu;
                $pesoCo=0.000285;
                $conversion=$eu*$pesoCo;
                return $conversion;
            }

            if (!$_REQUEST) {
                echo <<<abc
                <small><i>Las tasas están actualizada</i></small>
abc;
            }
            else{

                if (!$_REQUEST['dinero']) {
                    echo <<<abc
                    <h4><i>Seleccione una opción e ingrese el dinero</i></h4>
abc;
                }
                else{
                    $op=$_REQUEST['opmoneda'];
                    $dinero=$_REQUEST['dinero'];

                    switch ($op) {
                        case 'se':
                            echo <<<abc
                            <h4>Seleccione una opción</h4>
abc;
                            break;
                        case 'co':
                            $valor=pesocoAeuro($dinero);
                            echo <<<abc
                            <h4>$dinero pesos colombianos son $valor euros.
abc;
                            break;
                        case 'eu':
                            $valor=euroApesoco($dinero);
                            echo <<<abc
                            <h4>$dinero euros son $valor pesos colombianos.
abc;
                            break;
                    }
                }
            }

        ?>

    </body>
</html>
