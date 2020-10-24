<?php
$nombre = $_POST['nombre'];
$nombre_mascota = $_POST['nombre_mascota'];
$tipo_mascota = $_POST['lista_mascotas'];
$razas = array('mono', 'loro', 'gato', 'iguana', 'perro');

if (empty($nombre) || empty($nombre_mascota) || empty($tipo_mascota) || !in_array(strtolower($tipo_mascota), $razas)) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Formulario</title>
            <meta charset="UTF-8">
        </head>
        <body>
            <form name="datos" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" size="25" value="<?php echo $_POST['nombre']; ?>">
                <?php
                    if(isset($_POST['enviar']) && empty($_POST['nombre'])){
                        echo "<p style='color:red;'> Introduce un nombre</p>";
                    }
                ?>
                <label for="nombre_mascota">Nombre mascota</label>
                <input type="text" name="nombre_mascota" id="nombre_mascota" value="<?php echo $_POST['nombre_mascota']; ?>">
                <?php
                    if(isset($_POST['enviar']) && empty($_POST['nombre_mascota'])){
                        echo "<p style='color:red;'> Introduce un nombre para tu mascota</p>";
                    }
                ?>
                <datalist id="mascotas">
                    <option value="Gato">Gato</option>
                    <option value="Loro">Loro</option>
                    <option value="Mono">Mono</option>
                    <option value="Perro">Perro</option>
                    <option value="Iguana">Iguana</option>
                </datalist>
                <label for="lista_mascotas">Lista mascotas</label>
                <input list="mascotas" name="lista_mascotas" id="lista_mascotas" value="<?php echo $_POST['lista_mascotas']; ?>" >
                <?php
                    if(isset($_POST['enviar']) && (empty($_POST['lista_mascotas']) || !in_array(strtolower($tipo_mascota), $razas, false))){
                        echo "<p style='color:red;'> Introduce un nombre para una raza correcta</p>";
                    }
                ?>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </body>
    </html>
<?php
}
else{
    echo "Dueño: $nombre, <br>Nombre mascota: $nombre_mascota<br>Raza: $tipo_mascota"; 
}

