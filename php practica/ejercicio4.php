<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda Virtual PHP</title>
</head>
<body>
    <h1>Agenda Virtual PHP</h1>
    <h2>Contactos</h2>
    <p>Para guardar presione el boton</p>
    <form action="ejp4.php" method="post">
        <input type="hidden" name="accion" value="guardar">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label>Trabajo:</label>
        <input type="text" name="trabajo"><br><br>
        <label>Telefono:</label>
        <input type="text" name="telefono"><br><br>
        <label>Dirección:</label>
        <input type="text" name="direccion"><br><br>
        <label>Otras:</label>
        <input type="text" name="otras"><br><br>
        <button type="submit">Guardar!</button>
        <button type="reset">Reset</button>
    </form>

    <h2>Mostrar contactos</h2>
    <form action="ejp4.php" method="post">
        <input type="hidden" name="accion" value="listar">
        <button type="submit">Mostrar</button>
    </form>

    <h2>Buscar contacto</h2>
    <form action="ejp4.php" method="post">
        <input type="hidden" name="accion" value="buscar">
        <label>Nombre a buscar:</label>
        <input type="text" name="buscado"><br><br>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>