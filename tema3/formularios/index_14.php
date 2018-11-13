<?php
    // con el método get en el form method="get"
    $nom = $_GET['nombre'];
    echo $nom;echo " ";

    // con el método post en el form method="post"
    //$nom = $_POST['nombre'];

    //con request en el form method="post" ó method="get"
    // $nom = $_REQUEST['nombre'];
    // echo $nom;

    /*----------------*/

    echo $_GET['apellidos'];echo "<br>";
    echo $_GET['mail'];echo "<br>";
    echo $_GET['domicilio']; echo "<br>";

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

    if ($_GET['r1']=="H") {
        // code...
        echo "Soy hombre <br>";
    }else {
        echo "Soy mujer <br>";
    }

    echo $_GET['dia'];echo "<br>";
    echo $_GET['area'];


?>
