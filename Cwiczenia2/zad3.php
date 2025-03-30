<?php
//$imie = $_POST["imie"];
//$nazwisko = $_POST["nazwisko"];
//$adres = $_POST["adres"];
//$email = $_POST["email"];
//$date = $_POST["data_pobytu"];
//$hour = $_POST["godzina_przyjazdu"];
//$udg = $_POST["udogodnienia"];
$liczba_osob = $_POST['liczba_osob'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane osób</title>
</head>
<body>
<h1>Dane dla <?= $liczba_osob ?> osoby/osób</h1>
<form action="zad3a.php" method="post">
    <input type="hidden" name="imie" required value="<?php $_POST["imie"]?>">
    <input type="hidden" name="nazwisko" required value=$nazwisko>
    <input type="hidden" name="adres" required>
    <input type="hidden" name="email" required>
    <input type="hidden" name="data_pobytu" required>
    <input type="hidden" name="godzina_przyjazdu" required >
    <input type="hidden" name="liczba_osob" required>
    <?php for ($i = 1; $i <= $liczba_osob; $i++): ?>
        <fieldset>
            <legend>Osoba <?= $i ?></legend>
            <label>Imię:</label>
            <input type="text" name="osoby[<?= $i ?>][imie]" required><br><br>

            <label>Nazwisko:</label>
            <input type="text" name="osoby[<?= $i ?>][nazwisko]" required><br><br>
        </fieldset><br>
    <?php endfor; ?>

    <input type="submit" value="Zakończ rezerwację">
</form>
</body>
</html>
