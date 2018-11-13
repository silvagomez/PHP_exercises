<?php
    if (isset($_REQUEST['comprobar'])) {
        $n=[];
        print_r($_REQUEST);
        foreach ($_REQUEST as $key => $value) {
            if (is_numeric($value)) {
                $n[]=$value;
            }
        }

        // print_r($n);
        $rango_lote=1;
        $aleatorio=rand(1,9);
        $numeros[]=$aleatorio;

        while ($rango_lote<4) {
            $aleatorio=rand(1,9);
            if (!in_array($aleatorio,$numeros)) {
                $numeros[]=$aleatorio;
                $rango_lote++;
            }
            else {
                $rango_lote=$rango_lote;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secret Code</title>
        <style media="screen">
            main{
                width: 70%;
                margin: 0 auto;
            }
            div.loteria{
                display: flex;
                justify-content: space-around;
                width: 100%;
            }
            div.correcto{
                background-color: green;
                width: 5%;
                text-align: center;
                padding: 10px;
            }
            div.incorrecto{
                background-color: red;
                width: 5%;
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <main>
            <section>
                <h2>Introduce 4 números</h2>
                <br>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="number" name="n0" value="" required>
                    <input type="number" name="n1" value="" required>
                    <input type="number" name="n2" value="" required>
                    <input type="number" name="n3" value="" required>
                    <input type="submit" name="comprobar" value="Comprobar">
                </form>
            </section>
            <br>
            <section>

                <?php
                if (isset($_REQUEST['comprobar'])) {
                    echo <<< abc
                    <h3>Tu apuesta</3><br>
abc;
                    echo <<<abc
                    <div class="loteria">
abc;
                    for ($z=0; $z < 4 ; $z++) {
                        if($n[$z]==$numeros[$z]){
                            echo <<< abc
                            <div class="correcto">$n[$z]</div>
abc;
                        }else {
                            echo <<< abc
                            <div class="incorrecto">$n[$z]</div>
abc;
                        }
                    }
                    echo "</div>";
                }
                ?>

            </section>
            <br>
            <section>
                <?php
                if (isset($_REQUEST['comprobar'])) {
                    echo <<< abc
                    <h3>Los numeros de la loteria</3><br>
abc;
                    print_r($numeros);
                }
                ?>
            </section>
        </main>
    </body>
</html>
