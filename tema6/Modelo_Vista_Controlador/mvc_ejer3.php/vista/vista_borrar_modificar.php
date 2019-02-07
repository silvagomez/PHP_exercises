<h1>Listado de Estudiantes</h1>
<table>
<tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Borrar</th><th>Modificar</th></tr>
<?php foreach ($estudiante as $student){ ?>
<tr>
<td><?php echo $student['nombre'] ?></td>
<td><?php echo $student['apellido'] ?></td>
<td><?php echo $student['telefono'] ?></td>
<td><a href=<?php echo "controlador.php?borrar=".base64_encode($student['id'])?> >Borrar</a></td>
<td><a href=<?php echo "controlador.php?modificar=".base64_encode($student['id'])?>>Modificar</a></td>
</tr>
<?php } ?>
</table>
<a href="controlador.php"><input type="button" value="Volver"></a>