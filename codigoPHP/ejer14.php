<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once '../core/Calculadora.php';
        $numero1 = 10;
        $numero2 = 5;
        
        echo suma($numero1, $numero2)."<br>";
        echo resta($numero1, $numero2)."<br>";
        echo multiplicacion($numero1, $numero2)."<br>";
        echo division($numero1, $numero2)."<br>";
        
    ?>
</body>
</html>