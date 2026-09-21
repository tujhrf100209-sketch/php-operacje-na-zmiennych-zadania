<?php
$x = (int)readline("Podaj liczbę miesięcy X: ");
$y = (float)readline("Podaj miesięczną kwotę Y: ");

$kwota = 0;

for ($i = 1; $i <= $x; $i++) {
    $kwota += $y;
    $kwota *= 1.08;
}

echo "Zgromadzona kwota: " . number_format($kwota, 2, '.', '') . " zł";
?>