<?php
    $numeros = array(1,2,3,4,5);
    $numeros2=[1,2,3,4,5];
    $numeros3 = array('a' => 1, 'b' => 2,'c' => 3,'d' => 4,'e' => 5,);
    $numeros4[]=1;
    $numeros4[]=2;
    $numeros4[]=3;
    $numeros4[]=4;
    $numeros4[]=5;

    foreach ($numeros4 as $key => $value) {
        echo $value."<br>";
    }

    foreach ($numeros3 as $key => $value) {
        echo $key." ".$value."<br>";
    }

    $provincia = array('nombre1' => "Bizkaia", 'habitantes1' => 2000,'nombre2' => "Gipuzkoa", 'habitantes2' => 1000);
    foreach ($provincia as $key => $value) {
        echo $key." ".$value."<br>";
    }
    $provincia2 = ['nombre' => "Bizkaia", 'habitantes' => 2000];
    $provincia3['nombre']="Bizkaia";
    $provincia3['habitantes']=2000;

    print_r($provincia);

    /************************/

    echo "<br>";
    $lista = [
        'curso1' => ['nombre0'=>'Jon', 'nombre1'=>'Ane', 'nombre2'=>'Miren', 'nombre3'=>'Aitor', 'nombre4'=>'Alberto'],
        'curso2'=>['nombre0'=>'Begoña', 'nombre1'=>'Beatriz', 'nombre2'=>'Carmen', 'nombre3'=>'María', 'nombre4'=>'Zaloa']
        ];

    foreach ($lista as $curso => $nombre) {
        // code...
        echo $curso;
        echo "<br />";
        foreach ($nombre as $indice => $alumno) {
            echo $indice.": ".$alumno;
            echo "<br />";
        }
    }
    echo "<br>";
    echo count($lista);

    echo "<br>";
    for ($x=0; $x < count($lista); $x++) {
        echo "Alumnos del Curso".($x+1);
        echo "<br>";
        for ($y=0; $y <5 ; $y++) {
            echo $lista['curso'.($x+1)]['nombre'.$y];
            echo "<br>";
        }
    }
    echo "<br>";


    echo "<br>";
    $libros = array();
    $libros[0] = array('titulo'=>'Aprendiendo PHP', 'autor'=>'Ramses Velasquez');
    $libros[1] = array('titulo'=>'Aprendiendo a desarrollar', 'autor'=>'CodeHero');
    echo $libros[1]['autor'];
    // esto devolver el valor CodeHero, ya que especificamos la fila numero 1 y la columna autor







?>
