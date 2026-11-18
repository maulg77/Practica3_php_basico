<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del alumno</title>
</head>
<body>
    <h1>Datos del alumno</h1>
    <form action="ejp3.php" method="post">
        <label>Introduzca su nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label>Introduzca su teléfono:</label>
        <input type="text" name="telefono"><br><br>
        <label>Matriculado</label>
        <input type="checkbox" name="matriculado"><br><br>
        <label>Enseñanza:</label><br>
        <input type="radio" name="ensenanza" value="secundaria" required> Secundaria
        <input type="radio" name="ensenanza" value="bachillerato"> Bachillerato
        <input type="radio" name="ensenanza" value="un ciclo medio"> Ciclo Medio
        <input type="radio" name="ensenanza" value="un ciclo superior"> Ciclo Superior<br><br>
        <label>Mostrar datos:</label>
        <select name="mostrar">
            <option value="pantalla">Por Pantalla</option>
            <option value="archivo">En Archivo datos.txt</option>
        </select><br><br>
        <button type="submit">Enviar datos</button>
    </form>
</body>
</html>