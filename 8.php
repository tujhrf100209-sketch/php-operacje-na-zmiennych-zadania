<?php
$x = (int)readline("Podaj długość pierwszego rzędu X: ");
$y = (int)readline("Podaj liczbę rzędów Y: ");
$z = (int)readline("Podaj, o ile cegieł skraca się każdy kolejny rząd Z: ");

$suma = 0;
$dlugosc = $x;

for ($i = 0; $i < $y && $dlugosc > 0; $i++) {
    $suma += $dlugosc;
    $dlugosc -= $z;
}

echo "Liczba cegieł: " . $suma;
?>