<?php
//unset($_SERVER);

header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {	
header('WWW-Authenticate: Basic Realm="Contenido restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "Usuario no reconocido!";
exit;
}
	
else { 
echo "<p>Has pulsado INICIAR SESION</p>"; 
 echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}</p>"; 
echo "<p>Contraseña: {$_SERVER['PHP_AUTH_PW']} </p>"; 
} 

?>
