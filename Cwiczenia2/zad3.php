<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane osób</title>
</head>
<body>
<?php $liczba_osob = $_POST['liczba_osob']; ?>
<h1>Dane dla <?= $liczba_osob ?> osoby/osób</h1>
<form action="zad3a.php" method="post">
    <input type="hidden" name="imie" required value="<?php echo $_POST["imie"]?>">
    <input type="hidden" name="nazwisko" required value="<?php echo $_POST["nazwisko"]?>">
    <input type="hidden" name="adres" required value="<?php echo $_POST["adres"]?>">
    <input type="hidden" name="email" required value="<?php echo $_POST["email"]?>">
    <input type="hidden" name="data_pobytu" required value="<?php echo $_POST["data_pobytu"]?>">
    <input type="hidden" name="godzina_przyjazdu" required value="<?php echo $_POST["godzina_przyjazdu"]?>">
    <input type="hidden" name="liczba_osob" required value="<?php echo $_POST["liczba_osob"]?>">
    <input type="hidden" name="udogodnienia[]" required value="<?php echo implode(", ", array_map('htmlspecialchars', $_POST["udogodnienia"]))?>">
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
