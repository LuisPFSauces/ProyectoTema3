<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario HTML</title>
        <style>
            form{
                display: inline;
            }
            .error{
                color: red;
            }
            .obligatorio{
                background-color: #DCDCDC;
            }
        </style>
    </head>
    <body>
        <?php
        /*
         * @author Luis Puente Fernandez <luis.puefer@educa.jcyl.es>
         */
        require_once '../core/201020libreriaValidacion.php';
        define("OBLIGATORIO", 1);
        $entradaOK = true;

        $errores = array(
            "nombre" => null,
            "apellido" => null,
            "dni" => null,
            "telefono" => null
        );

        $formulario = array(
            "nombre" => null,
            "apellido" => null,
            "dni" => null,
            "telefono" => null
        );


        if (isset($_REQUEST['enviar'])) {
            $errores['nombre'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 20, 2, OBLIGATORIO);
            $errores['apellido'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['apellido'], 20, 2);
            $errores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], OBLIGATORIO);
            $errores['telefono'] = validacionFormularios::validaTelefono($_REQUEST['telefono']);

            foreach ($errores as $error) {
                if ($error != null) {
                    $entradaOK = false;
                }
            }
        } else {
            $entradaOK = false;
        }

        if ($entradaOK) {
            $formulario['nombre'] = $_REQUEST['nombre'];
            $formulario['apellido'] = $_REQUEST['apellido'];
            $formulario['dni'] = $_REQUEST['dni'];
            $formulario['telefono'] = $_REQUEST['telefono'];

            echo "Hola " . $formulario['nombre'] . " " . $formulario['apellido'] . "<br>";
            echo "Dni: " . $formulario['dni'] . "<br>";
            if(!empty($formulario['telefono'])){
                echo "Telefono " . $formulario['telefono'] . "<br>";
            }
        } else {
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="nombre">Introduce tu nombre</label>
                <input class="obligatorio" type="text" name="nombre" id="nombre" value="<?php
                if (isset($_REQUEST['nombre']) && $errores['nombre'] == null) {
                    echo $_REQUEST['nombre'];
                }
                ?>">
                       <?php
                       if (!empty($errores['nombre'])) {
                           echo '<span class="error">' . $errores['nombre'] . "</span>";
                       }
                       ?><br>
                <label for="apellido">Introduce tu apellido</label>
                <input type="text" name="apellido" id="apellido" value="<?php
                if (isset($_REQUEST['apellido']) && $errores['apellido'] == null) {
                    echo $_REQUEST['apellido'];
                }
                ?>">
                       <?php
                       if (!empty($errores['apellido'])) {
                           echo '<span class="error">' . $errores['apellido'] . "</span>";
                       }
                       ?><br>
                <label for="dni">Introduce tu dni: </label>
                <input class="obligatorio" type="text" name="dni" id="dni" value="<?php
                if (isset($_REQUEST['dni']) && $errores['dni'] == null) {
                    echo $_REQUEST['dni'];
                }
                ?>">
                       <?php
                       if (!empty($errores['dni'])) {
                           echo '<span class="error">' . $errores['dni'] . "</span>";
                       }
                       ?><br>
                <label for="telefono">Introduce tu telefono: </label>
                <input type="text" name="telefono" id="telefono" value="<?php
                       if (isset($_REQUEST['telefono']) && $errores['telefono'] == null) {
                           echo $_REQUEST['telefono'];
                       }
                       ?>">
                       <?php
                       if (!empty($errores['telefono'])) {
                           echo '<span class="error">' . $errores['telefono'] . "</span>";
                       }
                       ?><br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        <?php } ?>
    </body>
</html>
