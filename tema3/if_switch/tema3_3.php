<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?PHP
    $nota1=9;

    if($nota1>=5 && $nota1<6){
      echo "aprobado";
    }elseif ($nota1>=6 && $nota1<7) {
      // code...
      echo "bien";
    }elseif ($nota1>=7 && $nota1<8) {
      // code...
      echo "notable";
    }elseif ($nota1>8) {
      // code...
      echo "sobresaliente";
    }
    echo "<br>";

    if ($nota1>=5 && $nota1<6) {
      // code...
      echo "aprobado";
    }else {
      if ($nota1>=6 && $nota1<7) {
        // code...
        echo "bien";
      }else {
        if ($nota1>=7 && $nota1<8) {
          // code...
          echo "notable";
        }else {
          if ($nota1>8) {
            // code...
            echo "sobresaliente";
          }
        }
      }

    }
    ?>
  </body>
</html>
