<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['visited'])) {
    if(isSet($_COOKIE['ctr'])) {
        $ctr = $_COOKIE['ctr'] + 1;
    }else{
        $ctr = 1;
    }
    setcookie('ctr', $ctr, time() + (3600 * 24 * 30));
    $_SESSION['visited'] = true;
} else {
    $ctr = $_COOKIE['ctr'] ?? 1;
}

echo "<p> Number of visits: " . $ctr . "</p>";

if($ctr > 5) {
    echo "<p> Congratulations! </p>";
}
?>
</body>
</html>