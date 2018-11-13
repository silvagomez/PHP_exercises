<!doctype html
<html>
<head>
<meta charset="UTF-8">
       <title>Title here!</title>
</head>
<body>
 <?php

$pepe="";

# Definimos las variables $Pepe y $Pepa (ojo con mayúsculas y minúsculas)
$Pepe="Me llamo Pepe y soy serio y formal";
$Pepa="Me llamo Pepa y también soy seria y formal";

?>

<!-- esto es HTML, hemos cerrado el script -->

<center><b>Vamos a ver el contenido de las variables</b></center>

<!--   un nuevo script PHP -->

<?php
echo "<br> El valor de la variable $pepe es: ".$pepe;
echo "<br> No ha puesto nada porque $pepe esta vacía";
echo "<br> El valor de la variable Pepe es: ".$Pepe;
?>

<center><b><br>Invocando la variable desde una función</b></center>

<?php
/* Escribiremos una function llamada vervariable
   Observa la sintaxis. La palabra function delante
   y el () al final seguidos de la llave.
   Hasta que no cerremos la llave todas las líneas
   serán consideradas parte de la función */

function vervariable(){

// Aquí se produce un error de tipo: notice, soluciona el error

// echo "<br>El valor de la variable Pepe es: ".$Pepe;
echo "<br>El valor de la variable Pepe es: ".$GLOBALS['Pepe'];
}


vervariable();
?>




<center><b><br>Un solo nombre y dos <i>variables distintas</i></b><br>
Dentro de la función el valor de la variable es <br></center>

<?php
function cambiaPepa(){

	$Pepa="Ahora voy a llamarme Luisa por un ratito";

	echo "<br>".$Pepa;
}

cambiaPepa();
?>
<center>... pero después de salir de la función
                    vuelvo al valor original...</center>
<?php
echo "<br>".$Pepa;

?>
</body>
</html>
