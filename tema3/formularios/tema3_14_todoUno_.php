<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Suscripción Electrónica</title>
        <style media="screen">

        </style>
    </head>
    <body>
        <h2>Suscripción Electrónica</h2>
        <?php
        if(!$_GET){

        echo <<<abc

        <form class="" action="tema3_14_todoUno.php" method="get">

            <section class="s1">
                <label>Nombre: </label><input type="text" name="nombre" value="">
                <label>Apellidos: </label><input type="text" name="apellidos" value="">
                <label>E-mail: </label><input type="text" name="mail" value="">
                <br>
                <br>
            </section>
            <section class="s2">
                <label>Domicilio: </label><input type="text" name="domicilio" value="">
                <br>
                <br>
            </section>
            <section class="s3">
                <div class="sd">
                    <label>Interesado en los siguientes temas:</label>
                    <input type="checkbox" name="c1" value=""><label>Música</label>
                    <input type="checkbox" name="c2" value=""><label>Libros</label>
                    <input type="checkbox" name="c3" value=""><label>Deportes</label>
                    <input type="checkbox" name="c4" value=""><label>Cine</label>
                    <br>
                </div>
                <div class="sd">
                    <label>Sexo</label>
                    <input type="radio" name="r1" value="H"><label>Hombre</label>
                    <input type="radio" name="r1" value="M"><label>Mujer</label>
                    <br>
                    <br>
                </div>
            </section>
            <section class="s4">
                <label>Día de la semana que le interesa recibirlo</label>
                <select class="" name="dia">
                    <option value="" selected>día de la semana</option>
                    <option value="lunes">lunes</option>
                    <option value="martes">martes</option>
                    <option value="miercoles">miercoles</option>
                    <option value="jueves">jueves</option>
                    <option value="viernes">viernes</option>
                </select>
                <br>
                <label>Su opinión</label>
                <br>
                <textarea name="area" rows="8" cols="80"></textarea>
                <br>
                <input type="submit" name="" value="Enviar datos">
                <input type="reset" name="" value="Borrar todo">
            </section>
        </form>
abc;
        }
        else{
            // con el método get en el form method="get"
            $nom = $_GET['nombre'];
            echo $nom;echo " ";

            // con el método post en el form method="post"
            //$nom = $_POST['nombre'];

            //con request en el form method="post" ó method="get"
            // $nom = $_REQUEST['nombre'];
            // echo $nom;

            /*----------------*/

            //Recoger los datos

            echo $_GET['apellidos'];echo "<br>";
            echo $_GET['mail'];echo "<br>";
            echo $_GET['domicilio']; echo "<br>";

            //Recoger los datos de los checkbox

            if (isset($_GET['c1'])) {
                // code...
                echo "Me gusta la música";
            }
            if (isset($_GET['c2'])) {
                // code...
                echo "Me gusta los libros";
            }
            if (isset($_GET['c3'])) {
                // code...
                echo "Me gusta los deportes";
            }
            if (isset($_GET['c4'])) {
                // code...
                echo "Me gusta el cine";
            }

            //Recoger los datos del radio button

            if ($_GET['r1']=="H") {
                // code...
                echo "Soy hombre <br>";
            }else {
                echo "Soy mujer <br>";
            }

            //Recoger el dato del select

            echo $_GET['dia'];echo "<br>";

            //Recoger los datos del textarea
            echo $_GET['area'];

        }
        ?>

    </body>
</html>
