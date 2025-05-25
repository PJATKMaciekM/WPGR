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
</header>
<?php
if(!$db_link = mysqli_connect("localhost:3312", "root", "Mar10ram")){
    echo "Error while connecting to the database!";
    exit;
}
if(!mysqli_select_db($db_link, "wprg")){
    mysqli_close($db_link);
    echo "Error while selecting the database!";
    exit;
}
$query = 'select * from `cars` order by `price` limit 5';
if(!$result = mysqli_query($db_link, $query)){
    mysqli_close($db_link);
    echo "Error while running query: $query";
    exit;
}
?>
<table>
    <tr>
        <td>Id</td>
        <td>Producent</td>
        <td>Model</td>
        <td>Cena</td>
        <td>Rok</td>
        <td>Opis</td>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['carid'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>