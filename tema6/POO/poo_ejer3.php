<html>
<head>
<title>Ejercicio</title>
</head>
<body>
<?php
class Persona {
  protected $nombre;
  protected $edad;
  public function __construct($nombre,$edad)
  {
    $this->nombre=$nombre;
    $this->edad=$edad;
  }
  public function visualizar()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function __construct($nombre,$edad,$sueldo)
  {
     parent::__construct($nombre, $edad);
      $this->sueldo=$sueldo;
  }
 
  public function visualizar(){
   
    parent::visualizar();
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona('Jon Arrieta',34);
echo 'Datos personales de la persona:<br>';
$persona1->visualizar();
$empleado1=New Empleado('Argiñe Bengoa',22,3000);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->visualizar();
?>
</body>
</html>
