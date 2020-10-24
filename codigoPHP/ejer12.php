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
       print_r($_GET);
       echo "<br>";
       print_r($_POST);
       echo "<br>";
       print_r($_REQUEST);
       echo "<br>";
       print_r($_SERVER);
       echo "<br>";
       print_r($_SESSION);
       echo "<br>";
       print_r($_COOKIE);
       echo "<br>";
       print_r($_ENV);
       echo "<br>";
       print_r($_FILES);
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";


       foreach ($_GET as $valor){
           echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_POST as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_REQUEST as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_SERVER as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_SESSION as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_COOKIE as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_ENV as $valor){
        echo $valor . "<br>";
       }
       echo "<br>";
       foreach ($_FILES as $valor){
        echo $valor . "<br>";
       }
    ?>
</body>
</html>