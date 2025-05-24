<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
<h1>Podsumowanie rezerwacji</h1>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Osoby:</strong><br>";
    $liczba_osob = $_SESSION["liczba_osob"];
    for ($i = 1; $i <= $liczba_osob; $i++) {
        echo "<p><strong>Osoba " .$i . " </strong> </p>";
        echo "<p><strong>Imię:</strong> " . htmlspecialchars($_SESSION["osoby"][$i]["imie"]) . "</p>";
        echo "<p><strong>Nazwisko:</strong> " . htmlspecialchars($_SESSION["osoby"][$i]["nazwisko"]) . "</p>";
        echo "<p><strong>Numer Karty:</strong> " . htmlspecialchars($_SESSION["osoby"][$i]["karta"]) . "</p>";
    }

} else {
    echo "<p>Nieprawidłowe żądanie.</p>";
}
session_destroy();
?>
</body>
</html>
