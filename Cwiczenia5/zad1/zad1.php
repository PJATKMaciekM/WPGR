<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane osób</title>
</head>
<body>
<?php $liczba_osob = $_POST['liczba_osob']; ?>
<h1>Dane dla <?= $liczba_osob ?> osoby/osób</h1>
<form action="zad1a.php" method="post">
    <?php for ($i = 1; $i <= $liczba_osob; $i++): ?>
        <fieldset>
            <input type="hidden" name="liczba_osob" required value="<?php echo $_POST["liczba_osob"]?>">
            <legend>Osoba <?= $i ?></legend>
            <label>Imię:</label>
            <input type="text" name="osoby[<?= $i ?>][imie]" required><br><br>

            <label>Nazwisko:</label>
            <input type="text" name="osoby[<?= $i ?>][nazwisko]" required><br><br>

            <label>Nr Karty:</label>
            <input type="text" name="osoby[<?= $i ?>][karta]" required><br><br>
        </fieldset><br>
    <?php endfor; ?>

    <input type="submit" value="Zapisz dane w sesji">
</form>
</body>
</html>
