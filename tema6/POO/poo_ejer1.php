<html>
<head>
<title> P O O </title>
<meta  charset="utf-8" />
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $provincia;  
  private $sueldo;
  const COMISION=256; // las constantes no usan el carácter $
  //Los atributos constantes solo pueden almacenar datos primitivos: enteros, flotantes, cadenas, arrays. 
  //No pueden almacenar objetos
  //Si accedemos desde dentro de la clase utilizaremos la palabra reservada self seguida de '::'    y del nombre de la constante.
  //A partir de PHP 5.3.0. nombre de la clase::nombre de la constante. 
  // Si accedemos desde fuera de la clase, ya que las constantes se consideran atributos públicos,
   //utilizaremos el nombre de la clase seguido de '::' y el nombre de la constante.
  public function __construct($nom,$prov,$sueldo){
      $this->nombre=$nom;
      $this->provincia=$prov;
      $this->sueldo=$sueldo;
      
  }  
  public function visualizar()
  {
    echo $this->nombre." &nbsp;&nbsp;". $this->provincia;   
  
    $aumento=$this->subirSueldo(500);
    echo "  tiene un sueldo de:  ".$aumento;
      echo '<br>';    
  }
  public function subirSueldo($aumento){
      $this->sueldo+=$aumento;
      return $this->sueldo;    
  }
   public function sueldoMasComision(){
       
       echo "sueldo  + comisión: " .(Persona::COMISION+$this->sueldo); //también self::COMISION       
   }
public function __destruct() {//Es opcional. Sólo debemos crearlo si deseamos hacer alguna cosa cuando un objeto se elimine de la memoria. 
       echo '<br>';
       echo "Borrando  ". $this->nombre ;       
   } 
} 
$per1=new Persona('Jon','Bizkaia',1500.60);
$per1->visualizar();
$per2=new Persona('Ane','Bizkaia',1700.32);
$per2->visualizar();
$per2->sueldoMasComision();
?>
</body>
</html>
