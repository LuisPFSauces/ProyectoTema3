<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 25 - Nerea Nuevo Pascual</title>
        <style>
            .error{
                color: red;
                font-weight: bold;
            }
            
            legend{
                color: black;
                font-weight: bold;
            }
            input{
                padding: 5px;
                border-radius: 10px;
            }
            .obligatorio input{
                background-color: #ccc;
            }
        </style>
    </head>
    <body>
        <h2>Nerea Nuevo Pascual</h2>
        <?php
        /*
         * Autor: Nerea Nuevo Pascual
         * @since: 22/10/2020
         */

        //Declaramos la variables
        require_once '../core/201020libreriaValidacion.php'; //Importamos la librería 
        $entradaOK = true;
        
        $arrayErrores = [ //Recoge los errores del formulario
            'nombreApellidos' => null,
            
            'curso' => null, 
            
            'nacimiento' => null,
            
            'descripcion' => null,
            
            'sentimiento' => null,
            
            'vacaciones' => null
            
        ]; 
        
        $arrayFormulario = [ //Recoge los datos del formulario
            'nombreApellidos' => null,
            
            'curso' => null, 
            
            'nacimiento' => null,
            
            'descripcion' => null,
            
            'sentimiento' => null,
            
            'vacaciones' => null
            
        ];  


        if (isset($_POST['enviar'])) { //Código que se ejecuta cuando se envía el formulario
            
            #OBLIGATORIOS
            $arrayErrores['nombreApellidos'] = validacionFormularios::comprobarAlfabetico($_POST['nombreApellidos'], 40, 2, 1);  //Máximo, mínimo y opcionalidad
            $arrayErrores['curso'] = validacionFormularios::comprobarEntero($_POST['curso'], 10, 0, 1); //Máximo, mínimo y opcionalidad
            $arrayErrores['nacimiento'] = validacionFormularios::validarFecha($_POST['nacimiento'], "10/22/2020", "01/01/1900", 1); //Opcionalidad
            $arrayErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_POST['descripcion'], 500, 1, 1); //Máximo, mínimo y opcionalidad
            if(!isset($_POST['sentimiento'])){$arrayErrores['sentimiento'] = "Debe marcarse un valor";}
            $arrayErrores['vacaciones'] = validacionFormularios::validarElementoEnLista($_POST['vacaciones'], array("ni idea", "con la familia", "de fiesta", "trabajando", "estudiando DWES")); //Opciones de la lista
            
            
            foreach ($arrayErrores as $campo => $error) { //Recorre el array en busca de mensajes de error
                if ($error != null) { //Si lo encuentra vacia el campo y cambia la condiccion
                    $entradaOK = false; //Cambia la condiccion de la variable
                }
            }
        } else {
            $entradaOK = false;
        }


        if ($entradaOK) { // Si el formulario se ha rellenado correctamente
         
            #OBLIGATORIOS
            // Cargamos en el $arrayFormulario el valos de aquellos campos que se han rellenado correctamente
            
            $arrayFormulario['nombreApellidos'] = $_POST['nombreApellidos'];
            $arrayFormulario['curso'] = $_POST['curso'];
            $arrayFormulario['nacimiento'] = $_POST['nacimiento'];
            $arrayFormulario['descripcion'] = $_POST['descripcion'];
            $arrayFormulario['sentimiento'] = $_POST['sentimiento'];
            $arrayFormulario['vacaciones'] = $_POST['vacaciones'];
            
            date_default_timezone_set('Europe/Madrid');
            $date = new DateTime();
            
            $fechaNacimiento = strtotime($arrayFormulario['nacimiento']);
            
            
            // Mostramos los valores de cada campo obligatorio
            echo "Hoy ".$date->format('l h F')." a las ".$date->format("g:ia")."<br>";
            echo "D. " . $arrayFormulario['nombreApellidos']." nacido hace <br>";
            echo "Entero: " . $arrayFormulario['curso'] . "<br>";
            echo "Fecha: " . date('d/m/Y', strtotime($arrayFormulario['nacimiento'])) . "<br>";
            echo "Campo de texto: " . $arrayFormulario['descripcion'] . "<br>";
            echo "Radio button: " . $arrayFormulario['sentimiento'] . "<br>";
            echo "Lista: " . $arrayFormulario['vacaciones'] . "<br>";
            
            
        } else { //Código que se ejecuta antes de rellenar el formulario
            ?>
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                <fieldset>
                    <legend>Encuesta de satisfación personal</legend>
                    <div class="obligatorio">
                        <label>Nombre y apellidos: </label>
                        <input type = "text" name = "nombreApellidos"
                               value="<?php if($arrayErrores['nombreApellidos'] == NULL && isset($_POST['nombreApellidos'])){ echo $_POST['nombreApellidos'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['nombreApellidos'] != NULL) {
                        echo $arrayErrores['nombreApellidos']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br><!---------------------------- ENTERO -------------------------------------------->
                    
                    <div class="obligatorio">
                        <label>¿Comó va el curso?: </label>
                        <input type = "number" name = "curso"
                               value="<?php if($arrayErrores['curso'] == NULL && isset($_POST['curso'])){ echo $_POST['curso'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['curso'] != NULL) {
                        echo $arrayErrores['curso']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    <br> <!---------------------------- FECHA -------------------------------------------->
                    
                    <div class="obligatorio">
                        <label>Fecha: </label>
                        <input type = "date" name = "nacimiento"
                               value="<?php if($arrayErrores['nacimiento'] == NULL && isset($_POST['nacimiento'])){ echo $_POST['nacimiento'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['nacimiento'] != NULL) {
                        echo $arrayErrores['nacimiento']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br> <!---------------------------- AREA DE TEXTO -------------------------------------------->
                    
                    <div>
                        <label>Describe brevemente tu estado de ánimo:</label>
                        <textarea name="descripcion" placeholder="Maximo 500 caracteres" value="<?php if($arrayErrores['descripcion'] == NULL && isset($_POST['descripcion'])){ echo $_POST['descripcion'];} ?>"></textarea>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['descripcion'] != NULL) {
                        echo $arrayErrores['descripcion']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br> <!---------------------------- SELECTOR RADIO -------------------------------------------->
                    
                    <div>
                        <label>Fecha nacimiento: </label><br><br>
                        <input type="radio" id="RO1" name="sentimiento" value="muy mal" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "muy mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO1">Muy mal</label><br/>
                        <input type="radio" id="RO2" name="sentimiento" value="mal" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO2">Mal</label><br/>
                        <input type="radio" id="RO3" name="sentimiento" value="regular" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "regular"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO3">Regular</label>
                            <input type="radio" id="RO4" name="sentimiento" value="bien" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO4">Bien</label>
                            <input type="radio" id="RO5" name="sentimiento" value="muy bien" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "muy bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO5">Muy bien</label>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['sentimiento'] != NULL) {
                        echo $arrayErrores['sentimiento']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br> <!---------------------------- LISTA -------------------------------------------->
                    
                    <div>
                        <label>¿Como se presentan las vaciones de navidad?: </label><br><br>
                        <select name="vacaciones">
                            <option value="ni idea" <?php if(isset($_POST['vacaciones'])){if($arrayErrores['vacaciones'] == NULL && $_POST['vacaciones'] == "ni idea"){ echo "selected";}} ?>>Ni idea</option>
                            <option value="con la familia" <?php if(isset($_POST['vacaciones'])){if($arrayErrores['vacaciones'] == NULL && $_POST['vacaciones'] == "con la familia"){ echo "selected";}} ?>>Con la familia</option>
                            <option value="de fiesta" <?php if(isset($_POST['vacaciones'])){if($arrayErrores['vacaciones'] == NULL && $_POST['vacaciones'] == "de fiesta"){ echo "selected";}} ?>>De fiesta</option>
                            <option value="trabajando" <?php if(isset($_POST['vacaciones'])){if($arrayErrores['vacaciones'] == NULL && $_POST['vacaciones'] == "trabajando"){ echo "selected";}} ?>>Trabajando</option>
                            <option value="estudiando DWES" <?php if(isset($_POST['vacaciones'])){if($arrayErrores['vacaciones'] == NULL && $_POST['vacaciones'] == "estudiando DWES"){ echo "selected";}} ?>>Estudiando DWES</option>
                        </select>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['vacaciones'] != NULL) {
                        echo $arrayErrores['vacaciones']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    
                    <div>
                        <br><input type = "submit" name = "enviar" value = "Enviar">
                    </div>
                </fieldset>
            </form>
        <?php } ?>
    </body>
</html>