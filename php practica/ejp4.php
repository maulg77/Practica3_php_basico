<?php
$accion = $_POST['accion'];

if ($accion == "guardar") {
    $nombre = trim($_POST['nombre']);
    $trabajo = trim($_POST['trabajo']);
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $otras = trim($_POST['otras']);

    $linea = "$nombre:$trabajo:$telefono:$direccion:$otras\n";
    file_put_contents("agenda.txt", $linea, FILE_APPEND);

    echo "Contacto guardado correctamente.<br>";
} elseif ($accion == "listar") {
    if (!file_exists("agenda.txt")) {
        echo "El fichero no existe";
    } else {
        $lineas = file("agenda.txt");
        if (count($lineas) == 0) {
            echo "No hay contactos todavia.";
        } else {
            foreach ($lineas as $linea) {
                $campos = explode(":", trim($linea));
                echo "Contacto: $campos[0] $campos[1] $campos[2] $campos[3] $campos[4]<br>";
            }
        }
    }
} elseif ($accion == "buscar") {
    $buscado = trim($_POST['buscado']);
    echo "<h3>Resultados para: '$buscado'</h3>";
    if (!file_exists("agenda.txt")) {
        echo "No existe el archivo.";
    } else {
        $lineas = file("agenda.txt");
        $encontrados = 0;
        foreach ($lineas as $linea) {
            $campos = explode(":", trim($linea));
            if (strtolower($campos[0]) == strtolower($buscado)) {
                echo "Nombre: $campos[0]<br>";
                echo "Trabajo: $campos[1]<br>";
                echo "Telefono: $campos[2]<br>";
                echo "Dirección: $campos[3]<br>";
                echo "Otras: $campos[4]<br><br>";
                $encontrados++;
            }
        }
        if ($encontrados == 0) {
            echo "No se ha encontrado a nadie con ese nombre.";
        } else {
            echo "Total encontrados: $encontrados";
        }
    }
}
echo "<br><a href='ejercicio4.php'>Volver</a>";
?>