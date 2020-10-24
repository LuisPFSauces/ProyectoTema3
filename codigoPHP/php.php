<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pruebas</title>
    </head>
    <body>
        <h1>Pruebas</h1>

        <div class="checkForm">
            <label class="labelTitle" for="asignaturasConvalidadas[]"> Asignaturas Convalidadas: </label><br>
            <div class="opcionCheck">
                <input type="checkbox" name="asignaturasConvalidadas[][]" value="DWES" <?php isset($_REQUEST["asignaturasConvalidadas"][$nEncuesta]) ? (in_array("DWES", $_REQUEST["asignaturasConvalidadas"][$nEncuesta])) ? print("checked") : null : null ?> ><!-- Comprobamos si el campo asignaturasConvalidadas a sido enviada, en cado positivo comprobamos si el valor 'DWES' esta dentro del array $_REQUEST["asignaturasConvalidadas".$nEncuesta], en caso afirmativo pone el valor checked, de lo contrario no hace nada y si no esta inicializado tampoco hace nada -->
                <label for="asignaturasConvalidadas[]">DWES</label>
            </div>
            <div class="opcionCheck">
                <input type="checkbox" name="asignaturasConvalidadas[][]" value="DWEC" <?php isset($_REQUEST["asignaturasConvalidadas"][$nEncuesta]) ? (in_array("DWEC", $_REQUEST["asignaturasConvalidadas"][$nEncuesta])) ? print("checked") : null : null ?> ><!-- Comprobamos si el campo asignaturasConvalidadas a sido enviada, en cado positivo comprobamos si el valor 'DWEC' esta dentro del array $_REQUEST["asignaturasConvalidadas".$nEncuesta], en caso afirmativo pone el valor checked, de lo contrario no hace nada y si no esta inicializado tampoco hace nada -->
                <label for="asignaturasConvalidadas[]">DWEC</label>
            </div>
            <div class="opcionCheck">
                <input type="checkbox" name="asignaturasConvalidadas[][]" value="DAW" <?php isset($_REQUEST["asignaturasConvalidadas"][$nEncuesta]) ? (in_array("DAW", $_REQUEST["asignaturasConvalidadas"][$nEncuesta])) ? print("checked") : null : null ?> ><!-- Comprobamos si el campo asignaturasConvalidadas a sido enviada, en cado positivo comprobamos si el valor 'DAW' esta dentro del array $_REQUEST["asignaturasConvalidadas".$nEncuesta], en caso afirmativo pone el valor checked, de lo contrario no hace nada y si no esta inicializado tampoco hace nada -->
                <label for="asignaturasConvalidadas[]">DAW</label>
            </div>
            <div class="opcionCheck">
                <input type="checkbox" name="asignaturasConvalidadas[][]" value="DIW" <?php isset($_REQUEST["asignaturasConvalidadas"][$nEncuesta]) ? (in_array("DIW", $_REQUEST["asignaturasConvalidadas"][$nEncuesta])) ? print("checked") : null : null ?> ><!-- Comprobamos si el campo asignaturasConvalidadas a sido enviada, en cado positivo comprobamos si el valor 'DIW' esta dentro del array $_REQUEST["asignaturasConvalidadas".$nEncuesta], en caso afirmativo pone el valor checked, de lo contrario no hace nada y si no esta inicializado tampoco hace nada -->
                <label for="asignaturasConvalidadas[]">DIW</label>
            </div>
            <div class="opcionCheck">
                <input type="checkbox" name="asignaturasConvalidadas[][]" value="Empresa" <?php isset($_REQUEST["asignaturasConvalidadas"][$nEncuesta]) ? (in_array("Empresa", $_REQUEST["asignaturasConvalidadas"][$nEncuesta])) ? print("checked") : null : null ?> ><!-- Comprobamos si el campo asignaturasConvalidadas a sido enviada, en cado positivo comprobamos si el valor 'Empresa' esta dentro del array $_REQUEST["asignaturasConvalidadas".$nEncuesta], en caso afirmativo pone el valor checked, de lo contrario no hace nada y si no esta inicializado tampoco hace nada -->
                <label for="asignaturasConvalidadas[]">Empresa</label>
            </div>
        </div>
        ?>
        <!--Cambios realizadoss -->
    </body>

</html>