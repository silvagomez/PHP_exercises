<h1>Listado de Estudiantes</h1>
<table>
<tr><th>Nombre</th><th>Apellido</th><th>Telefono</th></tr>
<?php foreach ($estudiante as $student){ ?>
<tr>
<td><?php echo $student['nombre'] ?></td>
<td><?php echo $student['apellido'] ?></td>
<td><?php echo $student['telefono'] ?></td>
</tr>
<?php } ?>
</table>
<a href="controlador.php"><input type="button" value="Volver"></a>