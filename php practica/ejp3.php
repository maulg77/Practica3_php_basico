<?php
$nombre = trim($_POST['nombre']);
$telefono = trim($_POST['telefono']);
$ensenanza = $_POST['ensenanza'];
$mostrar = $_POST['mostrar'];

if (isset($_POST['matriculado'])) {
    $mensaje = "El alumno $nombre, con teléfono $telefono, está matriculado en $ensenanza";
} else {
    $mensaje = "El alumno $nombre, con teléfono $telefono, no está matriculado";
}

if ($mostrar == "pantalla") {
    echo $mensaje;
} else {
    file_put_contents("datos.txt", $mensaje . "\n", FILE_APPEND);
    echo "Datos guardados correctamente.<br>";
    echo "<a href='mostrardatos.php'>mostrar archivo</a>";
}
?>