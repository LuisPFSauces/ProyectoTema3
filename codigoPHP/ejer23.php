<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        /*
         * @author Luis Puente Fernandez
         */
        if (isset($_REQUEST['enviar'])) {
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $telefono = $_REQUEST['telefono'];
            if (empty($nombre) || empty($apellido) || empty($telefono) || preg_match("/([9|7|6][0-9]{2})[-]([0-9]{2})[-]([0-9]{2})[-]([0-9]{2})/", $telefono) == 0) {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="nombre">Introduce tu nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br>
                    <?php
                    if (empty($nombre)) {
                        echo"<p class=\"error\">Introduce un nombe</p>";
                    }
                    ?>
                    <label for="apellido">Introduce tu primer apellido</label>
                    <input type="text" id="apellido" name="apellido"><br>
                    <?php
                    if (empty($apellido)) {
                        echo"<p class=\"error\">Introduce un apellido</p>";
                    }
                    ?>
                    <label for="telefono">Introduce tu telefono: </label>
                    <input type="tel" name="telefono" id="telefono" placeholder="6??-??-??-??"><br>
                    <?php
                    if (empty($telefono) || preg_match("/([9|7|6][0-9]{2})[-]([0-9]{2})[-]([0-9]{2})[-]([0-9]{2})/", $telefono) == 0) {
                        echo"<p class=\"error\">Introduce un telefono correcto 6??-??-??-??</p>";
                    }
                    ?>
                    <input type="submit" value="Enviar" name="enviar">
                </form>
            <?php } else {
                    echo "Nombre: ".$nombre."<br>Apellido: ".$apellido."<br>Telefono: ".$telefono;
                }?>
            <?php
        } else {
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="nombre">Introduce tu nombre:</label>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="apellido">Introduce tu primer apellido</label>
                <input type="text" id="apellido" name="apellido"><br>
                <label for="telefono">Introduce tu telefono: </label>
                <input type="tel" name="telefono" id="telefono" placeholder="6??-??-??-??"><br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        <?php } ?>
    </body>
</html>
