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
                    $array1[$clave][$clave2] = $tipo[rand(0, count($tipo) - 1)];
                }
            }
        }

        function imprimir_Array($asiento, $fila) {
            if (!is_array($asiento)) {
                echo "$fila--->$asiento <br>";
            } else {
                echo "<br>$fila: <br>";
                array_walk($asiento, 'imprimir_Array');
            }
        }

        function imprimir_Array2($asiento, $fila, $pruebas) {
            echo "$fila--->$asiento--->$pruebas <br>";
        }

        for ($fila = 0; $fila <= 20; $fila++) {

            for ($asiento = 0; $asiento <= 20; $asiento++) {
                $teatro[$fila][$asiento] = "";
            }
        }
        llenador($teatro);
        /*
        echo "Con var_dump: <br>";
        ($teatro);

        echo "<br><br>Con var_dump: <br>";
        var_dump($teatro);

        echo '<br><br>Con array_walk (LLama a una funcion recursiva)<br>';
        array_walk($teatro, 'imprimir_Array');
        */
        echo '<br><br>Con array_walk_recursive<br>';
        array_walk_recursive($teatro, function ($asiento, $fila){
            echo "$fila--->$asiento <br>";
        });
        ?>
    </body>
</html>