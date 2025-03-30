<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
<h1>Podsumowanie rezerwacji</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Liczba osób:</strong> " . htmlspecialchars($_POST["liczba_osob"]) . "</p>";
    echo "<p><strong>Imię:</strong> " . htmlspecialchars($_POST["imie"]) . "</p>";
    echo "<p><strong>Nazwisko:</strong> " . htmlspecialchars($_POST["nazwisko"]) . "</p>";
    echo "<p><strong>Adres:</strong> " . htmlspecialchars($_POST["adres"]) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
    echo "<p><strong>Data pobytu:</strong> " . htmlspecialchars($_POST["data_pobytu"]) . "</p>";
    echo "<p><strong>Godzina przyjazdu:</strong> " . htmlspecialchars($_POST["godzina_przyjazdu"]) . "</p>";


    if (!empty($_POST["udogodnienia"])) {
        echo "<p><strong>Udogodnienia:</strong> " . implode(", ", array_map('htmlspecialchars', $_POST["udogodnienia"])) . "</p>";
    } else {
        echo "<p><strong>Udogodnienia:</strong> Brak</p>";
    }
} else {
    echo "<p>Nieprawidłowe żądanie.</p>";
}
?>
</body>
</html>
