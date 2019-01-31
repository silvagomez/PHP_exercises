<!-- El código siguiente es difícil de mantener y actualizar.
Los principales problemas del código son:
• No existe protección frente a errores (¿qué ocurre si falla la conexión con la base de datos?).
• El código HTML y el código PHP están mezclados en el mismo archivo e incluso en algunas partes están entrelazados.
• El código solo funciona si la base de datos es MySQL. -->

<?php
$conexion=mysqli_connect("localhost","root","", "daw"); 
$resultado = mysqli_query($conexion,'SELECT nombre, telefono FROM estudiante');
?>
<html>

<head>
    <title>Listado de Estudiantes</title>
</head>

<body>
    <h1>Listado de Estudiantes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
        <?php
while ($fila = mysqli_fetch_array($resultado)){
echo "\t<tr>\n";
printf("\t\t<td> %s </td>\n", $fila['nombre']);
printf("\t\t<td> %s </td>\n", $fila['telefono']);
echo "\t</tr>\n";
}
?>
    </table>
</body>

</html>
<?php
// Cerrar la conexion
mysqli_close($conexion);
?>