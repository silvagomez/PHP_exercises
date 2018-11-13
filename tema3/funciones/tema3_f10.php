<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <style media="screen">

        body{
            /* height: 100vh; */
            font-family: sans-serif;
            direction: ltr;
            line-height: 1.5;
            text-align: justify;
            background-color: #1fc8db;
            background-image: linear-gradient(45deg, #9F86AA 0%, #848DC5 51%, #5F4B8B 95%);
            /* background-size: cover; */
            background-attachment: fixed;

        }

        main{
            margin: 0 auto;
            margin-top: 50px;
            max-width: 60%;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 50px;
            box-shadow: 2px 2px 25px;
        }
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            color: black;
            padding: 15px 30px;
            text-decoration: none;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: #5F4B8B;
            color: white;
        }
        div.box{
            margin-top: 20px;
            text-align: center;
            margin: 0 auto;
            width: 100%;
            color: white;
        }
        div.box1{
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
            border: 1px solid white;
            margin: 15px auto;
            border-radius: 5px;
        }
        div.box2{
            background-color: #848DC5;
            width:10%;
            margin: 10px 10px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 1px 1px 10px black;
        }
        </style>

    </head>
    <body>
        <main>

            <h3>TABLA DE POTENCIAS</h3>
            <form class="" action="tema3_f10.php" method="post">
                <label>Ingresa un número <input type="number" name="base" value="" min="1" max="10"> </label> <br><br>
                <label>Ingresa un exponete <input type="number" name="expo" value="" min="1" max="10"> </label> <br><br>
                <input type="submit" name="" value="Generar">
            </form>

            <?php
            if (!$_REQUEST) {

            }else {
                if (!$_REQUEST['base']) {
                    if (!$_REQUEST['expo']) {
                        echo <<<abc
                        <i class="fa fa-ban" aria-hidden="true"></i><small><i> Ingrese un número y un exponente</i></small>
abc;
                    }else {
                        echo <<<abc
                        <i class="fa fa-ban" aria-hidden="true"></i><small><i> Ingrese un número </i></small>
abc;
                    }

                }else {
                    if (!$_REQUEST['expo']) {
                        echo <<<abc
                        <i class="fa fa-ban" aria-hidden="true"></i><small><i> Ingrese un exponente</i></small>
abc;
                    }else {
                        echo "<div class='box'>";
                        potencia($_REQUEST['base'],$_REQUEST['expo']);
                        echo "</div>";

                    }
                }
            }

            function potencia($base,$expo){
                for ($x=1; $x <=$base ; $x++) {
                    echo "<div class='box1'>";
                    for ($y=1; $y <=$expo ; $y++) {
                        $resultado=$x**$y;
                        echo <<<abc
                        <div class="box2">
                        $resultado
                        </div>
abc;
                    }
                    echo "<br>";
                    echo "</div>";
                }
            }
            ?>

        </main>

    </body>
</html>
