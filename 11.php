<?php
$n = (int)readline("Podaj liczbę elementów N: ");
$x = (float)readline("Podaj pierwszy element X: ");
$y = (float)readline("Podaj różnicę Y: ");

for ($i = 0; $i < $n; $i++) {
    echo ($x + $i * $y) . " ";
}
?>