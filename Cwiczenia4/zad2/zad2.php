<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$name = 'cnt.txt';
$ctr = 0;
if (!file_exists($name)) {
    $ctr = 1;
    $file = fopen($name, 'w');
    fwrite($file, $ctr);
    echo("Visit counter: ".$ctr);
}else{
    $file = fopen($name, 'r+');
    $line = fgets($file);
    $num = intval($line);
    $num++;
    file_put_contents($name, $num);
    echo("Visit counter: ".$num);
}
fclose($file);
?>
</body>
</html>