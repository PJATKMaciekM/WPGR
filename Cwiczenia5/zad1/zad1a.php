<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane osób</title>
</head>
<body>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba_osob = $_POST["liczba_osob"];
    for ($i = 1; $i <= $liczba_osob; $i++) {
        $_SESSION["osoby"][$i]["imie"] = $_POST["osoby"][$i]["imie"];
        $_SESSION["osoby"][$i]["nazwisko"] = $_POST["osoby"][$i]["nazwisko"];
        $_SESSION["osoby"][$i]["karta"] = $_POST["osoby"][$i]["karta"];
        $_SESSION["liczba_osob"] = $liczba_osob;
    }
}
?>
<form action="zad1b.php" method="post">
    <input type="submit" value="Zakończ rezerwację">
</form>
</body>
</html>
