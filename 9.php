<?php
$x = (int)readline("Podaj długość pierwszego rzędu X: ");
$y = (int)readline("Podaj liczbę rzędów Y: ");
$z = (int)readline("Podaj, o ile cegieł skraca się każdy kolejny rząd Z: ");
$k = (float)readline("Podaj wagę jednej cegły K w kg: ");

$liczbaCegiel = 0;
$dlugosc = $x;

for ($i = 0; $i < $y && $dlugosc > 0; $i++) {
    $liczbaCegiel += $dlugosc;
    $dlugosc -= $z;
}

echo "Liczba cegieł: " . $liczbaCegiel . "<br>";
echo "Waga ściany: " . ($liczbaCegiel * $k) . " kg";
?>