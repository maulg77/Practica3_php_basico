<?php
if (!file_exists("datos.txt")) {
    echo "El fichero no existe";
} else {
    $lineas = file("datos.txt");
    foreach ($lineas as $linea) {
        echo trim($linea) . "<br>";
    }
}
?>