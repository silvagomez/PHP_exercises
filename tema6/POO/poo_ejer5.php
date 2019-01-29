<html>
<head>
<title>Herencia</title>
</head>
<body>
<?php

abstract class Operacion { // colocar la palabra abstract por que no queremos instanciar la clase, no se debe colocar public porque da error
  protected $n1;
  protected $n2;
  protected $resultado;
  public function valorN1($v)
  {
    $this->n1=$v;
  }
  public function valorN2($v)
  {
    $this->n2=$v;
  }
  public function visualizar()
  {
    echo $this->resultado.'<br>';
  }
  public abstract function operar(); // en métodos/funciones se puede colocar public, si colocamos abstract en un método/función obligamos a que se utilice la función en los hijos (para que no se le olvide utilizarlo), no se abren llaves sólo se coloca ;
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->n1+$this->n2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->n1-$this->n2;
  }
}

$suma=new Suma();
$suma->valorN1(10);
$suma->valorN2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es:';
$suma->visualizar();

$resta=new Resta();
$resta->valorN1(10);
$resta->valorN2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->visualizar();

?>
</body>
</html> 