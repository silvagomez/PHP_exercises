<?php
$mail=$_REQUEST['mail'];
echo $mail;
$conexion=mysqli_connect("localhost","root","", "daw") or die("Error en la conexion"); 
$q=<<<sql
    DELETE from USUARIOS where mail='$mail';
sql;
$registro=mysqli_query($conexion,$q);
mysqli_close($conexion);
?>