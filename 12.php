<?php
do {
    $a = (float)readline("Podaj pierwszą liczbę: ");
    $b = (float)readline("Podaj drugą liczbę: ");

    $suma = $a + $b;
    echo "Suma: " . $suma . PHP_EOL;
} while ($suma != 0);
?>