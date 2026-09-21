<?php
$suma = 0;

for ($i = 10; $i >= 1; $i--) {
    $suma += $i * $i;
}

echo "Liczba cegieł: " . $suma;
?>