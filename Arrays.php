<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays.php</title>
</head>

<body>
    <!-- usar el <pre> (pretty) para el var dump de un array multidimensional -->
    <h1>Ejercicio 1</h1>

    <?php

    $Datos = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");

    $counter = 1;
    foreach ($Datos as $x => $y) {
        echo "Dato " . $counter . "°: " . $y . "<br>";
        $counter++;
    }
    ?>

    <h1>Ejercicio 2</h1>


    <?php

    $Datos = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");

    foreach ($Datos as $x => $y) {
        echo "$x: $y <br>";
    }

    ?>

    <h1>Ejercicio 3</h1>

    <?php

    $Datos = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");
    
    $Datos["Edad"] = 24;
    
    foreach ($Datos as $x => $y) {
        echo "$x: $y <br>";
        
    }

    ?>

    <h1>Ejercicio 4</h1>

    <?php 

    $Datos = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");
    $Datos["Edad"] = 24;
    unset($Datos["Ciudad"]);
    unset($Datos["Barcelona"]);
    var_dump($Datos);

    ?>

    <h1>Ejercicio 5</h1>

    <?php

    $counter2 = 6;
    $Letters = ("a,b,c,d,e,f");
    $array = explode(",",$Letters);
    
    rsort($array);
    arsort($array);
    foreach ($array as $x => $y) {
        
        echo "Letter ". $counter2 . "°: " . $y . "<br>";
        $counter2--;
    }

    ?>

    <h1>Ejercicio 6</h1>

    <?php

    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($Notas);
    foreach ($Notas as $x => $y) {
        echo "$x: $y <br>";    
    }

    ?>

    <h1>Ejercicio 7</h1>

    <?php

    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($Notas);
    $sumaNotas = array_sum($Notas);
    $totalAlumnos = count($Notas);
    $media = $sumaNotas / $totalAlumnos;
    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    foreach ($Notas as $x => $y) {
        if ($y > $media)
        echo $x . "<br>";
    }
    
    
    
    ?>

    <h1>Ejercicio 8</h1>

    <?php 

    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    $Mayor = 0;
    foreach ($Notas as $x => $y) {
        if($y > $Mayor) {
            $Mayor = $y;
            $Nombre = $x;
        }
    }
        echo "La nota mas alta es " . $Mayor . " y el mejor alumno es ". $Nombre . "<br>";
    ?>

    <h1>Ejercicio 9</h1>

    <?php

    

    ?>


</body>

</html>