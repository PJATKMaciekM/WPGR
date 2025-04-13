<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
//$ip = '1.1.1.1';
echo($ip);
$name = "ip.txt";
$list = file_get_contents($name);
if (str_contains($list, $ip)) {
    include "onlist.html";
}else{
    include "offlist.html";
}
?>
</body>
</html>