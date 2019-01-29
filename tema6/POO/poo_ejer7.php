<html>
<head>
<title>Métodos Estáticos</title>
<meta  charset="utf-8" />
</head>
<body>
<?php

// Los atributos estáticos de una clase se utilizan para guardar información general sobre la misma.
// Las clases matemáticas suelen tener métodos estáticos para realizar logaritmos o raíces cuadradas. No tiene sentido crear un objeto si lo único que queremos es realizar una operación  matemática.
// Los atributos y métodos estáticos no pueden ser llamados desde un objeto de la clase utilizando el operador ->.
// Si el método o atributo es público, deberá accederse utilizando el nombre de la clase y el operador de resolución de ámbito.
// Producto::nuevoProducto();

class Cadena {
  public static function largo($cad)
  {
    return strlen($cad);
  }
  public static function mayusculas($cad)
  {
    return strtoupper($cad);
  }
  public static function minusculas($cad)
  {
    return strtolower($cad);
  }
}

$c='Hola';
echo 'Cadena original:'.$c;
echo '<br>';
echo 'Largo:'.Cadena::largo($c);
echo '<br>';
echo 'En mayúsculas:'.Cadena::mayusculas($c);
echo '<br>';
echo 'En minúsculas:'.Cadena::minusculas($c);
?>
</body>
</html>
