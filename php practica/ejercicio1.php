<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Formulario</h1>
    <p>Escriba el alto y ancho (0 &lt; números &le; 100) y mostraré un rectángulo de estrellas de ese tamaño.</p>
    <form action="ej1p.php" method="post">
        <label>Ancho:</label>
        <input type="number" name="ancho"><br><br>
        <label>Alto:</label>
        <input type="number" name="alto"><br><br>
        <button type="submit">Dibujar</button>
        <button type="reset">Borrar</button>
    </form>
</body>
</html>