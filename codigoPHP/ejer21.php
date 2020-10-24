<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form name="datos" action="Tratamiento.php" method="post">
            <label for="nombre" value="Pedro">Nombre:</label>
            <input type="text" name="nombre" id="nombre" size="25">

            <label for="nombre_mascota">Nombre mascota</label>
            <input type="text" name="nombre_mascota" id="nombre_mascota" title="Introduce los dos apellidos" >
            <datalist id="mascotas">
                <option value="Gato">Gato</option>
                <option value="Loro">Loro</option>
                <option value="Mono">Mono</option>
                <option value="Perro">Perro</option>
                <option value="Iguana">Iguana</option>
            </datalist>
            <label for="lista_mascotas">Lista mascotas</label>
            <input list="mascotas" name="lista_mascotas" id="lista_mascotas" value="Gato">
            <input type="submit" value="enviar" name="enviar">
        </form>
    </body>
</html>