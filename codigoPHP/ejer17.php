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

        function llenador(&$array1) {
            $tipo = array("María", "Laura", "Francisco", "Paula", "Julia", "David", "Javier", "Manuel", "Iker", "Julio", "Raul", "Cristina", "Cristian", "Roberto", "Rebeca", "Gloria", "Carmen", "Rodrigo", "Cesar", "Sergio", "Alain", "Alejandro", "Alejandra", "Alvaro", "Alba");
            foreach ($array1 as $clave => $valor) {
                foreach ($valor as $clave2 => $valor2) {
                    $array1[$clave][$clave2] = $tipo[rand(0, count($tipo)-1)];
                }
            }
        }

        for ($fila = 0; $fila <= 20; $fila++) {
            
            for ($asiento = 0; $asiento <= 20; $asiento++) {
                $teatro[$fila][$asiento] = "";
            }
        }
        llenador($teatro);
        /*
        for($i = 0; $i < count($teatro); $i++){
            echo count($teatro[$i]);
            echo "<br><br><br><br><br>";
        }
        */
        echo "Con forEach<br>";
        foreach ($teatro as $clave => $valor ) {
            echo "<br>Fila: ".$clave."<br>";
            foreach ($valor as $clave2 => $valor2) {
                echo "Asiento: ".$clave2." -> ".$valor2."<br>" ;
            }
        }
        echo '<br><br><br><br>';
        echo "Con for<br>";
        for ($fila = 0; $fila < count($teatro); $fila++) {
            echo "<br>Fila: ".$fila."<br>";
            for ($asiento = 0; $asiento < count($teatro[$fila]); $asiento++) {
                echo "Asiento ".$asiento." -> ".$teatro[$fila][$asiento] . "<br>";
            }
        }

        echo '<br><br><br><br>';
        echo "Con while<br>";
        reset($teatro);

        while (list($clave, $valor) = each($teatro)) {
            echo "<br>Fila: ".$clave."<br>"; 
            while (list($clave2, $valor2) = each($valor)) {
                echo "Asiento".$clave2."->".$valor2. "<br>";
            }
        }
        ?>
    </body>
</html>