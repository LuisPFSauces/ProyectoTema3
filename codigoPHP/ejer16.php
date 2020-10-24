<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        Autor: Luis Puente Fernandez
    */
    function imprimir_Array( $paga, $dia){// Nota: en funciones & evitara hacer una copia de la variable pasada por parametro y la modificara directamente
        echo "$dia--->$paga <br>";
    }

    $sueldo=array(
        "lunes" => 15,
        "martes" => 11,
        "miercoles" => 16,
        "jueves" => 18,
        "viernes" => 14,
        "sabado" => 12,
        "domingo" => 15
    );

    echo "Con print_r<br>";
    print_r($sueldo);
    echo "<br>Con var_dump<br>";
    var_dump($sueldo);
    echo "<br>Con array_walk<br>";
    array_walk($sueldo, 'imprimir_Array');
    ?>
</body>
</html>