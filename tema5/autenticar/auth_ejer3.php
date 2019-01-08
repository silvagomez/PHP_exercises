<?php
// require_once "../../estilo/formato_i.php";
// echo <<<html
//     <form action="pizza2.php" method="POST">
//     <label>Usuario <input type="text" name="user"></label>
//     <br><br>
//     <label>Contraseña <input type="password" name="pass"></label>
//     <input type="submit" value="Hacer pedido">
//     </form>
// html;
// require_once "../../estilo/formato_f.php";

header('Content-Type: text/html; charset=UTF-8');

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<p>Has pulsado cancelar</p>";
    exit;
}
else{
    $user=$_SERVER['PHP_AUTH_USER'];
    $pass=md5($_SERVER['PHP_AUTH_PW']);
    echo $pass;
    $conection = mysqli_connect("localhost","root","","dwes") or die("Error en la conexión");
    $q=<<<sql
    SELECT * FROM usuarios WHERE usuario='$user' AND contrasenha='$pass'
sql;
    $registro=mysqli_query($conection,$q) or die ("Error en la query");
    if (mysqli_affected_rows($conection)==0) { // $conection->affected_rows==0 para 
        echo "no existe el usuario";
        mysqli_close($conection);
    } else {
        echo "<p>Entrando...</p>";
        echo "<p>Bienvenido {$_SERVER['PHP_AUTH_USER']} </p>";
        mysqli_close($conection);
    }
    
}
?>