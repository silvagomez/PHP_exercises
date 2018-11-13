<?php
if (!$_REQUEST) {
    // code...
}else {
    if (isset($_REQUEST['crear'])) {
        mkdir("mis_apuntes"); //funciona
        echo file_exists("mis_apuntes");
    }
    if (isset($_REQUEST['borrar'])) {
        rmdir("mis_apuntes"); //funciona
        echo file_exists("mis_apuntes");
    }
}


// para eliminar un fichero

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <main>
            <h2>Creación y eliminación de una carpeta</h2>
            <p>Ruta de creación: D:\wamp64\www\php_diego\tema3\directorios</p>
            <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="submit" name="crear" value="Crear">
                <input type="submit" name="borrar" value="Borrar">
            </form>
        </main>

    </body>
</html>
