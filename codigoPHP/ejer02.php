<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 . 0">
    <title>Ejer 1</title>
</head>
<body>
    <p>
    <?php
        /*
        Autor: Luis Puente Fernandez
        */
	    $numero = 13;
        $decimal = 9.3;
        $cadena = "Hola mundo";
        $logico = true;

        echo 'Usando echo:<br/>';
        echo 'El operador $numero es "' . gettype($numero) . '" y contiene el valor ' . "$numero<br/>";
        echo 'El operador $decimal es "' . gettype($decimal) . '" y contiene el valor ' . "$decimal<br/>";
        echo 'El operador $cadena es "' . gettype($cadena) . '" y contiene el valor ' . "$cadena<br/>";
        echo 'El operador $logico es "' . gettype($logico) . '" y contiene el valor ' . "$logico<br/>";
        echo '<br/>';

        echo 'Usando print:<br/>';
        print 'El operador $numero es "' . gettype($numero) . '" y contiene el valor ' . "$numero<br/>";
        print 'El operador $decimal es "' . gettype($decimal) . '" y contiene el valor ' . "$decimal<br/>";
        print 'El operador $cadena es "' . gettype($cadena) . '" y contiene el valor ' . "$cadena<br/>";
        print 'El operador $logico es "' . gettype($logico) . '" y contiene el valor ' . "$logico<br/>";
        echo '<br/>';

        echo 'Usando printf:<br/>';
        printf ('El operador $numero es "' . gettype($numero) . '"" y contiene el valor ' . "$numero<br/>");
        printf ('El operador $decimal es "' . gettype($decimal) . '" y contiene el valor ' . "$decimal<br/>");
        printf ('El operador $cadena es "' . gettype($cadena) . '" y contiene el valor ' . "$cadena<br/>");
        printf ('El operador $logico es "' .  gettype($logico)  . '" y contiene el valor ' . "$logico<br/>");
        echo ('<br/>');
        
        echo 'Usando print_r:<br/>';
        print_r ('El operador $numero es "' . gettype($numero) . '" y contiene el valor ' . "$numero<br/>");
        print_r ('El operador $decimal es "' . gettype($decimal) . '" y contiene el valor ' . "$decimal<br/>");
        print_r ('El operador $cadena es "' . gettype($cadena) . '" y contiene el valor ' . "$cadena<br/>");
        print_r ('El operador $logico es "' . gettype($logico) . '" y contiene el valor ' . "$logico<br/>");
        echo ('<br/>');


        echo 'Usando var_dump:<br/>';
        var_dump ('El operador $numero es "' . gettype($numero) . '" y contiene el valor ' . "$numero<br/>");
        var_dump ('El operador $decimal es "' . gettype($decimal) . '" y contiene el valor ' . "$decimal<br/>");
        var_dump ('El operador $cadena es "' . gettype($cadena) . '" y contiene el valor ' . "$cadena<br/>");
        var_dump ('El operador $logico es "' . gettype($logico) . '" y contiene el valor ' . "$logico<br/>");
        echo ('<br/>');
    ?>
    </p>
</body>
</html>