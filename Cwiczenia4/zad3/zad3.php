<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$name = 'links.txt';
$arr = array();
$file = fopen($name, 'r');
while (!feof($file)) {
    $line = fgets($file);
    array_push($arr, $line);
}
fclose($file);
$arr1 = array();
foreach ($arr as $value) {
    $temp = explode(";", $value);
    array_push($arr1, $temp[0]);
    array_push($arr1, $temp[1]);
}
$map = array();
foreach (array_chunk($arr1, 2) as $chunk) {
    if (count($chunk) === 2) {
        $map[$chunk[0]] = $chunk[1];
    }
}
echo("<table>");
echo("<tr><td>Link:</td><td>Opis: </td></tr>");
foreach ($map as $key => $value) {
    echo("<tr><td><a href='$key'>$key</td><td>$value</td></tr>");
}
echo("</table>");
?>
</body>
</html>