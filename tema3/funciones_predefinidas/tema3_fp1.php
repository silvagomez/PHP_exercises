<?php
    echo <<<abc
    Cadena:<br>
    El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito.<br><br>
    <b>Indicar cuántas veces aparece cada vocal usando funciones para cadenas PHP en</b><br><br>
abc;
    $cadena=<<<abc
    El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito
abc;
    $a=substr_count($cadena, 'a');
    $e=substr_count($cadena, 'e');
    $i=substr_count($cadena, 'i');
    $o=substr_count($cadena, 'o');
    $u=substr_count($cadena, 'u');
    echo <<<abc
    Apariciones de a en cadena es: $a <br>
    Apariciones de e en cadena es: $e <br>
    Apariciones de i en cadena es: $i <br>
    Apariciones de o en cadena es: $o <br>
    Apariciones de u en cadena es: $u <br>
abc;
    $cadena=mb_strtolower($cadena);
    echo "<br>".$cadena;
    $abecedario="a á b c d e é f g h i í j k l m n ñ o ó p q r s t u ú x y z";
    $abecedario=explode(" ",$abecedario);
    echo "<br><br>";
    print_r($abecedario);
    echo "<br><br>";
    for ($x=0; $x < count($abecedario); $x++) {
        if ($abecedario[$x]=="a" || $abecedario[$x]=="á" ||
        $abecedario[$x]=="e" || $abecedario[$x]=="é" ||
        $abecedario[$x]=="i" || $abecedario[$x]=="í" ||
        $abecedario[$x]=="o" || $abecedario[$x]=="ó" ||
        $abecedario[$x]=="u" || $abecedario[$x]=="ú") {
            $vocal=substr_count($cadena, $abecedario[$x]);
            echo <<<abc
            Apariciones de <b>$abecedario[$x]</b> en cadena es: $vocal <br>
abc;
        }
    }
    echo "<br>";
    $vocales1 = array('a','e','i','o','u');
    $vocales2 = array('á','é','í','ó','ú');
    for ($x=0; $x < count($vocales1); $x++) {
        $numv=substr_count($cadena,$vocales1[$x]);
        $numv+=substr_count($cadena,$vocales2[$x]);
        echo <<<abc
        Apariciones de <b>$vocales1[$x]</b> en cadena es: $numv <br>
abc;
    }

    echo <<<abc
    <br><b>Indicar qué consonantes son las que aparecen y cuántas veces aparecen usando funciones para cadenas PHP</b><br><br>
abc;

    for ($x=0; $x < count($abecedario); $x++) {
        if ($abecedario[$x]!="a" && $abecedario[$x]!="á" &&
        $abecedario[$x]!="e" && $abecedario[$x]!="é" &&
        $abecedario[$x]!="i" && $abecedario[$x]!="í" &&
        $abecedario[$x]!="o" && $abecedario[$x]!="ó" &&
        $abecedario[$x]!="u" && $abecedario[$x]!="ú") {
            $consonante=substr_count($cadena,$abecedario[$x]);
            if ($consonante!=0) {
                echo <<<abc
                Apariciones de la consonante <b>$abecedario[$x]</b> en cadena es: $consonante<br>
abc;
            }
        }
    }

    echo "<br>";
    $consonantes_ = array('b','c','d','f','g','h','j','k','l','m','n','ñ','p','q','r','s','t','v','w','x','y','z');
    for ($x=0; $x < count($consonantes_); $x++) {
        $numv=substr_count($cadena,$consonantes_[$x]);
        echo <<<abc
        Apariciones de <b>$consonantes_[$x]</b> en cadena es: $numv <br>
abc;
    }
    echo <<<abc
    <br>FOREACH<br>
abc;
    foreach ($consonantes_ as $indice => $valor) {
        $numv=substr_count($cadena,$valor);
        echo <<<abc
        Apariciones de <b>$valor</b> en cadena es: $numv <br>
abc;

    }

    echo <<<abc
    <br><b>Mostrar la cadena donde todas las a hayan sido sustituídas por el símbolo *. Por ejemplo en lugar de &lt&lt El doctor David… &gt&gt se habrá de mostrar &lt&lt El doctor D*vid… &gt&gt</b><br><br>
abc;
    echo str_replace("a","*",$cadena)."<br>";

    echo <<<abc
    <br><b>Mostrar la subcadena desde la aparición de &lt&lt años &gt&gt excluyendo años, es decir, deberá mostrarse &lt&lt averiguar cuáles eran las 100 claves que garantizan el éxito &gt&gt. Para ello usa una o varias funciones para cadenas PHP.</b><br><br>
abc;

    echo strstr($cadena,"averiguar");

?>
