<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $edad = $_POST['edad'];
            if ($edad >= 18) {
                echo "<p>Nombre: " . $nombre . ", Apellidos: " . $apellidos . " , mayor de edad ".$edad." años</p>";
            } else {
                echo "<p>Nombre: " . $nombre . ", Apellidos:" . $apellidos . ", no mayor de edad ".$edad." años</p>";
            }
        } else {
            ?><form name="datos" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="nombre" value="Pedro">Nombre:</label>
                <input type="text" name="nombre" id="nombre" size="25" required>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" title="Introduce los dos apellidos" >
                <label for="edad">Introduce tu edad</label>
                <input type="number" id="edad" name="edad" min="1" max="129">
                <input type="submit" value="enviar" name="enviar">
            <?php } ?>
        </form>
    </body>
</html>