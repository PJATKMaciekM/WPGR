<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['file'];
    $file = fopen($name, "r");
    $arr = array();
    while (!feof($file)) {
        $line = fgets($file);
        array_push($arr, $line);
    }
    $arr1 = array_reverse($arr);
    fclose($file);
    $file1 = fopen($name, "w+");
    foreach ($arr1 as $line) {
        fwrite($file1, $line);
    }
    fclose($file1);
    echo("file reversed");
}
?>
</body>
</html>