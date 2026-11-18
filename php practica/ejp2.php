<?php
$jugador1 = array();
$jugador2 = array();
$suma1 = 0;
$suma2 = 0;

for ($i = 0; $i < 5; $i++) {
    $jugador1[$i] = rand(1, 6);
    $jugador2[$i] = rand(1, 6);
    $suma1 += $jugador1[$i];
    $suma2 += $jugador2[$i];
}

echo "<h3>Jugador 1</h3>";
foreach ($jugador1 as $dado) {
    echo "<img src='$dado.jpg' width='100'>";
}

echo "<h3>Jugador 2</h3>";
foreach ($jugador2 as $dado) {
    echo "<img src='$dado.jpg' width='100'>";
}

echo "<h3>Resultado</h3>";
if ($suma1 > $suma2) {
    echo "En conjunto, ha ganado el jugador 1.";
} elseif ($suma2 > $suma1) {
    echo "En conjunto, ha ganado el jugador 2.";
} else {
    echo "Empate.";
}
?>