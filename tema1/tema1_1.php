<HTML>
<HEAD>
<Title>Bienvenido al curso de PHP </Title>
</HEAD>
<BODY>
  Estas líneas están escritas directamente en HTML
 <br>
	Esta es una línea incluida directamente en el cuerpo de la página web
 <br>
<?php
	$expresion='1';
	if ($expresion == '1'){
		print('1.Empiezan líneas generadas por PHP<br>');
	print('2. Instrucción escrita por print de PHP   <br>');

  print('$expresion');
  echo "$expresion";
  print("$expresion");
	}

echo "<br><br>";

$hola=<<<abc
hola mundo heredoc
abc;
echo $hola;
echo "<br><br>";
$adios=<<<'xyz'
adios mundo nowdoc
xyz;
echo $adios;
echo "<br><br>";
echo "Ejercicio<br>";
$nombre="Diego";
$tel="2162885";
$sueldo="1000";

echo $nombre." ".$tel." ".$sueldo; echo "<br><br>";

echo "El teléfono de $nombre  es: $tel y su sueldo es: $sueldo <br>";

$var=<<<xxx
obetener la siguiente salida: <br>
Crea "3 variables" una para almacenar el nombre, otra para el telefono, y <br>
otra para el sueldo. <br>
visualizar el contenido de las variables: <br>
"El teléfono de $nombre  es: $tel y su sueldo es: $sueldo" <br>
etiquetas HTML <br/>
xxx;
echo $var;
echo htmlspecialchars ("NEGRITA: <b></b>");echo "<br>";
echo htmlspecialchars ("CURSIVA: <i></i>");echo "<br>";
echo htmlspecialchars ("ENCABEZADO: <h1></h1>, <h2></h2>...<h6></6>");echo "<br>";
echo htmlspecialchars ("SUBRAYADO: <u></u>");echo "<br>";
echo htmlspecialchars ("TACAHADO: <s></s>");echo "<br>";
echo htmlspecialchars ("Linea horizontal: <hr>");echo "<br>";
$final=<<<cbc
Para alinear un texto se utiliza el atributo: align="center","left"...
cbc;
echo $final; echo "<br>";
echo "<hr><br>";
echo '<h1 align="center">PHP</h1><br>';
echo "<hr><br>";
echo<<<par
<b>PHP</b> es un lenguaje de programación del <b>lado del servidor.</b><br>
PHP puede ser usado en la mayoria de los servidores web.<br>
En cuanto a las <u>palabras clave</u>, PHP comparte con <i>la mayoria de otros</i><br>
lenguajes con sintaxis C las condiciones  con if, los bucles con for y while y<br>
los retornos de funciones. Como es habitual en este tipo de lenguajes, las<br>
sentencias deben acabar con punto y coma(;).<br>
par;
$v1=18;
$v2="3 de Diciembre";
echo $v1+$v2;echo "<br>";
echo $v1.$v2;echo "<br>";
function f1()
{
  // code...
  $h=9;
}
echo $h;

?>
</BODY>
</HTML>
