<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<header>
    <table>
        <tr>
            <td><a href="main.php">Strona Główna</a></td>
            <td><a href="allcars.php">Wszystkie Samochody</a></td>
            <td><a href="add.php">Dodaj Samochód</a></td>
        </tr>
    </table>
    <form action="addcar.php" method="post">
        <label>Producent:</label>
        <input type="text" name="make" required><br><br>

        <label>Model:</label>
        <input type="text" name="model" required><br><br>

        <label>Cena:</label>
        <input type="number" name="price" required><br><br>

        <label>Rok:</label>
        <input type="number" name="year" required><br><br>

        <label>Opis:</label>
        <input type="text" name="description" required ><br><br>

        <input type="submit" value="Dodaj samochód">
    </form>
</header>

</body>
</html>