<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Password</title>
        <style media="screen">
            body{
                /* height: 100vh; */
                font-family: sans-serif;
                direction: ltr;
                line-height: 1.5;
                text-align: justify;
                background-color: #1fc8db;
                background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
                /* background-size: cover; */
                background-attachment: fixed;

            }
                main{
                    margin: 0 auto;
                    margin-top: 50px;
                    max-width: 40%;
                    background-color: rgba(255, 255, 255, 0.5);
                    border-radius: 25px;
                    padding: 50px;
                    box-shadow: 5px 5px 25px;
                }
                div.box{
                    text-align: center;
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
                    iframe{
                        border-radius: 15px;
                    }

        </style>
    </head>
    <body>
        <main>

        <?php
            if (!$_REQUEST) {
                echo <<<abc
                <h3>Seleccionar los caracteres que quieres utilizar en la contraseña</h3>
                <form class="" action="tema3_password.php" method="post">
                    <label> <input type="checkbox" name="mayus" value="Yes"> A-Z</label><br><br>
                    <label> <input type="checkbox" name="minus" value="Yes"> a-z</label><br><br>
                    <label> <input type="checkbox" name="number" value="Yes"> 0-9</label><br><br>
                    <label> <input type="checkbox" name="special" value="Yes"> ?!*-$</label><br><br>
                    <label>Número de caracteres de la contraseña <small><i> (min 8 max 15) </i></small><input type="number" name="long" value="" min="8" max="15"></label><br><br>
                    <input type="submit" name="generate" value="Generar">
                </form>
abc;
            }
            else {
                if ( (isset($_REQUEST['mayus'])) || (isset($_REQUEST['minus'])) || (isset($_REQUEST['number'])) || (isset($_REQUEST['special'])) ) {
                    if (!$_REQUEST['long']) {
                        echo <<<abc
                        <div class="box">
                            <h3>Debe ingresar la longitud de la contraseña a generar</h3>
                            <iframe src="https://giphy.com/embed/qjt2qWDkDx2lW" width="280" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                            <br><br>
                            <form class="" action="tema3_password.php" method="post">
                                <input type="button" name="return" value="volver" onclick="history.go(-1)">
                            </form>
                        </div>

abc;
                    }
                    else {
                        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $letrasMinus = "abcdefghijklmnopqrstuvwxyz";
                        $numeros = "0123456789";
                        $especiales = "?!*-$";
                        $ingrediente = "";
                        $longitud=$_REQUEST['long'];

                        function funcion1(){
                            if (isset($_REQUEST['mayus'])) {
                                $GLOBALS['ingrediente'].=$GLOBALS['letrasMayus'];
                            }
                            if (isset($_REQUEST['minus'])) {
                                $GLOBALS['ingrediente'].=$GLOBALS['letrasMinus'];
                            }
                            if (isset($_REQUEST['number'])) {
                                $GLOBALS['ingrediente'].=$GLOBALS['numeros'];
                            }
                            if (isset($_REQUEST['special'])) {
                                $GLOBALS['ingrediente'].=$GLOBALS['especiales'];
                            }
                        }

                        //rand(mínimo,máximo)
                        // strlen($ingrediente)-1-->Para contar los caracteres de $ingrediente con la función strlen() a la que restamos un valor añadiendo -1 ya que cuando utilicemos la cadena de texto mas adelante, el primer carácter al igual que sucede con un array corresponde el número 0 y no al número 1. Por ejemplo, podemos contar 20 caracteres pero en la variable estarán asignándolos del 0 al 19, y no del 0 al 20 que sumarían 21. Si no se coloca el -1 genera un error Notice: Uninitialized string offset. Este error cuando el numero de veces que iteramos el array es mayor a la longitud del array ó ocurre si alguna variable es un string o null en vez de array.

                        function funcion2($ingrediente, $longitud){
                            $password="";
                            for ($x=0; $x<$longitud; $x++) {
                                $password.=$ingrediente[rand(0,strlen($ingrediente)-1)]; //toma un ingrediente aleatorio del 0 hasta el límite del string generado por la función strlen, para pasarlo a $password
                            }
                            return $password;
                        }
                        funcion1();
                        echo <<<abc
                        <h3>Resultado</h3>
                        Los ingredientes para realizar la contraseña son : <br> $ingrediente <br><br>
abc;
                        $contrasenha=funcion2($ingrediente,$longitud);

                        echo <<<abc
                        Su contraseña es $contrasenha
abc;
                    }
                }
                else{
                    if (!$_REQUEST['long']) {
                        echo <<<abc
                        <div class="box">
                            <h3>Debe seleccionar alguna opción de los caracteres e ingresar la longitud de la contraseña a generar</h3>
                            <iframe src="https://giphy.com/embed/qjt2qWDkDx2lW" width="280" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                            <br><br>
                            <form class="" action="tema3_password.php" method="post">
                                <input type="button" name="return" value="volver" onclick="history.go(-1)">
                            </form>
                        </div>
abc;
                    }
                    else {
                        echo <<<abc
                        <div class="box">
                            <h3>Debe seleccionar alguna opción de los caracteres para generar la contraseña</h3>
                            <iframe src="https://giphy.com/embed/qjt2qWDkDx2lW" width="280" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                            <br><br>
                            <form class="" action="tema3_password.php" method="post">
                                <input type="button" name="return" value="volver" onclick="history.go(-1)">
                            </form>
                        </div>
abc;
                    }
                }
            }
        ?>
        </main>
    </body>
</html>
