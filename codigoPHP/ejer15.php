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
    $sueldo=array(
        "lunes" => 15,
        "martes" => 11,
        "miercoles" => 16,
        "jueves" => 18,
        "viernes" => 14,
        "sabado" => 12,
        "domingo" => 15
    );

    foreach ( $sueldo as $dia => $paga){
        echo "El $dia cobra $paga <br>";
    }
    ?>
</body>
</html>