<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 1</title>
</head>
<body>
    <?php
        /*
        Autor: Luis Puente Fernandez
        */
        setlocale(LC_ALL,"es_ES.UTF-8");
        date_default_timezone_set("Europe/Madrid");

        echo "Fecha Madrid <br>";
        $fecha = new DateTime();
        echo $fecha->format('Y-m-d H:i')."<br>";
        echo $fecha-> getTimestamp()."<br>";

        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        date_default_timezone_set("Europe/Lisbon");
        
        echo "Fecha Lisboa/Oporto<br>";
        $fecha = new DateTime();
        echo $fecha->format('Y-m-d H:i')."<br>";
        echo $fecha-> getTimestamp();
         
    ?>
</body>
</html>