<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
function req($num,$sol,$it)
{
    if($num < $it){
        return $sol;
    }else{
        $sol = $it * $sol;
        $it++;
        return req($num,$sol,$it);
    }
}
function normal($num)
{
    $sol = 1;
    for($i=1;$i<=$num;$i++){
        $sol = $sol * $i;
    }
    return $sol;
}
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $num = $_GET['num'];
    echo "<p> <strong>Numer: " . $num ." </strong> </p>";
    echo "<p> <strong>Funkcja rekurencyjna: </strong></p>";
    $time1 = microtime(true);
    echo "<p> <strong>Wynik: " .req($num,1,1). "</strong></p>";
    $time2 = microtime(true);
    $tr = $time2 - $time1;
    echo "<p> <strong>Czas: " .round($time2 - $time1, 10). "</strong></p>";
    echo "<p> <strong>Funkcja iteracyjna: </strong></p>";
    $time3 = microtime(true);
    echo "<p> <strong>Wynik: " .normal($num). "</strong></p>";
    $time4 = microtime(true);
    $ti = $time4 - $time3;
    echo "<p> <strong>Czas: " .round($time4 - $time3, 10) . "</strong></p>";
    if($ti < $tr) {
        echo "<p> <strong>Funkcja iteracyjna jest szybsza o: " . round($tr - $ti, 10) ." </strong> </p>";
    }elseif ($ti > $tr) {
        echo "<p> <strong>Funkcja rekurencyjna jest szybsza o: " . round($ti - $tr, 10) ." </strong> </p>";
    }else{
        echo "<p> <strong>Funkcja są tak samo szybkie </strong></p>";
    }
}
?>
</body>
</html>