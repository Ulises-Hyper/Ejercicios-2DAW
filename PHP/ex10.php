<?php 

$blanco="___";
$negro="███";

echo "<h1>Tablero de Ajedrez en PHP<h1>";
echo "<table border=4px>";

for($i = 1; $i <= 4; $i++){
    echo "<tr>";
    for ($a = 1; $a <= 4; $a++){
        echo "<td>$blanco</td>";
        echo "<td>$negro</td>";
    }
    echo "<tr>";
    for($a = 1; $a <= 4; $a++){
        echo "<td>$negro</td>";
        echo "<td>$blanco</td>";
    }
}

echo "</table>";
