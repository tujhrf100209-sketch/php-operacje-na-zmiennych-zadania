<?php
$n = 100;
$pierwszy = 5;
$roznica = 10;
$suma = 0;

for ($i = 0; $i < $n; $i++) {
    $suma += $pierwszy + $i * $roznica;
}

echo "Suma: " . $suma;
?>