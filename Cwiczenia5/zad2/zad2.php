<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if(isSet($_COOKIE['ctr']) && $_COOKIE['ctr'] > 5) {
    echo ("Gratulacje!<br>");
}
if(!isSet($_COOKIE['name'])) {
    setcookie('name', 'user', time() + 3600);
    setcookie('ctr', 0, time() + 3600);
}
if(isSet($_COOKIE['name']) && $_COOKIE['name'] == 'user') {
    $ctr = $_COOKIE['ctr'];
    $ctr++;
    setcookie('ctr', $ctr, time() + 3600);
    echo ($ctr);

}
?>
</body>
</html>