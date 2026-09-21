<?php
$n = (int)readline("Podaj liczbę: ");

if ($n < 0) {
    exit("Silnia jest określona dla liczb całkowitych nieujemnych.");
}

$silnia = 1;

for ($i = 2; $i <= $n; $i++) {
    $silnia *= $i;
}

echo $n . "! = " . $silnia;
?>