<?php
class Usuario 
{
    private $nombre;
    private $apellido;
 
    public function nombreApellido()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}

// Hay que tener en cuenta que para que funcione correctamente, el nombre de los atributos en nuestra clase tienen que ser iguales que los que tienen las columnas en nuestra tabla de la base de datos. Con esto claro vamos a realizar la consulta.

try
{
    $con = new PDO('mysql:host=localhost;dbname=daw', 'root', '');

    $stmt= $con->prepare('SELECT nombre, apellido FROM estudiante');
    $stmt->execute();
 
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
 
    while($usuario = $stmt->fetch())
        echo $usuario->nombreApellido() . '<br>';
 
}
catch(PDOException $e)
{
  echo 'Error: ' . $e->getMessage();
}

// La novedad que podemos ver en este script es la llamada al método setFetchMode() pasándole como primer argumento la constante PDO::FETCH_CLASS que le indica que haga un mapeado en la clase que le indicamos como segundo argumento, en este caso la clase Usuario que hemos creado anteriormente. Después al recorrer los elementos con fetch los resultados en vez de en un vector los obtendremos en el objeto indicado.

?>