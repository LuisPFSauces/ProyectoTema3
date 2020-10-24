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
        $dia=date('d-m-Y', strtotime('+60 days'));
        echo $dia."<br>";

        $fecha = new DateTime();
        $fecha -> add(new DateInterval('P60D'));
        echo $fecha->format('Y-m-d H:i');
    ?>
</body>
</html>