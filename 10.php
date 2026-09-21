<?php
$a = (float)readline("Podaj pierwszą liczbę: ");
$operator = readline("Podaj operator (+, -, *, /): ");
$b = (float)readline("Podaj drugą liczbę: ");

switch ($operator) {
    case "+":
        $wynik = $a + $b;
        break;
    case "-":
        $wynik = $a - $b;
        break;
    case "*":
        $wynik = $a * $b;
        break;
    case "/":
        if ($b == 0) {
            exit("Nie można dzielić przez zero.");
        }
        $wynik = $a / $b;
        break;
    default:
        exit("Nieprawidłowy operator.");
}

echo "Wynik: " . $wynik;
?>