<?php
$suma = 0;

for ($i = 0; $i < 10; $i++) {
    $liczba = rand(50, 100);
    echo $liczba . " ";
    $suma += $liczba;
}

$srednia = $suma / 10;

echo "<br>Suma: " . $suma;
echo "<br>Średnia: " . $srednia;
?>