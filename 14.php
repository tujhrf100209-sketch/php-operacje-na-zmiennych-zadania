<?php
$n = (int)readline("Podaj liczbę elementów n: ");
$wartosc = (float)readline("Podaj pierwszą liczbę: ");

for ($i = 0; $i < $n; $i++) {
    echo $wartosc . " ";
    $wartosc = $wartosc * $wartosc;
}
?>