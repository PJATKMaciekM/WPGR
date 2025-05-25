<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$servername = "localhost:3312";
$username = "root";
$password = "Mar10ram";
$dbname = "wprg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['make'], $_POST['model'], $_POST['price'], $_POST['year'], $_POST['description'])) {
    $make = $conn->real_escape_string($_POST['make']);
    $model = $conn->real_escape_string($_POST['model']);
    $price = (int)$_POST['price'];
    $year = (int)$_POST['year'];
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO cars (make, model, price, year, description) 
            VALUES ('$make', '$model', $price, $year, '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New car record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "All fields are required.";
}
$conn->close();
?>
</body>
</html>
