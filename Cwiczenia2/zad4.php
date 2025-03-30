<?php
function czyPierwsza($n, &$licznikIteracji) {
    if ($n < 2) return false;
    if ($n == 2) return true;

    if ($n % 2 == 0) {
        $licznikIteracji = 1;
        return false;
    }

    $licznikIteracji = 0;
    $granica = floor(sqrt($n));

    for ($i = 3; $i <= $granica; $i += 2) {
        $licznikIteracji++;
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba = $_POST["liczba"];

    if (!is_numeric($liczba) || $liczba <= 0 || intval($liczba) != $liczba) {
        echo "<p>Błąd: podaj poprawną liczbę całkowitą dodatnią.</p>";
        exit;
    }

    $liczba = intval($liczba);
    $iteracje = 0;
    $wynik = czyPierwsza($liczba, $iteracje);

    echo "<h2>Wynik</h2>";
    echo "<p>Liczba <strong>$liczba</strong> " . ($wynik ? "jest" : "nie jest") . " liczbą pierwszą.</p>";
    echo "<p>Liczba iteracji: $iteracje</p>";
} else {
    echo "<p>Nieprawidłowe żądanie.</p>";
}
?>
