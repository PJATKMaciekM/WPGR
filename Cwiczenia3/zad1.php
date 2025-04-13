<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
function years($date): int
{
    $y1 = date("Y", $date);
    $m1 = date("m", $date);
    $d1 = date("d", $date);
    $date2 = strtotime("now");
    $y2 = date("Y", $date2);
    $m2 = date("m", $date2);
    $d2 = date("d", $date2);
    if($m1 < $m2){
        return abs($y2 - $y1);
    }elseif ($m1 > $m2){
        return abs($y2 - $y1 - 1);
    }elseif ($m1 == $m2){
        if($d1 < $d2){
            return abs($y1 - $y2);
        }else{
            return abs($y2 - $y1 - 1);
        }
    }
    return 0;
}
function days($date): int
{
    $y1 = date("Y", $date);
    $m1 = date("m", $date);
    $d1 = date("d", $date);
    $date2 = strtotime("now");
    $y2 = date("Y", $date2);
    $m2 = date("m", $date2);
    $d2 = date("d", $date2);
    $t1 = mktime(0, 0, 0, $m1, $d1, $y1);
    $t2 = mktime(0, 0, 0, $m2, $d2, $y2);
    if($y1 > $y2){
        echo "<strong>Błędna data urodzin</strong>";
        return 0;
    }elseif ($y1 == $y2){
        if($m1 > $m2){
            echo "<strong>Błędna data urodzin</strong>";
            return 0;
        }elseif ($m1 == $m1){
            if($d1 > $d2){
                echo "<strong>Błędna data urodzin</strong>";
                return 0;
            }else{
                return 365 - abs(ceil(($t1 - $t2)/86400));
            }
        }else{
            return 365 - abs(ceil(($t1 - $t2)/86400));
        }
    }else{
        return 365 - abs(ceil(($t1 - $t2)/86400));
    }
    return 0;
}
setlocale(LC_ALL, 'pl_PL');
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $date = $_GET["date"];
    $fdate = date("d-m-y", strtotime($date));
    echo "<p> <strong>Data Urodzenia " .date("d-m-y", strtotime($date)) ." </strong> </p>";
    echo "<p> <strong>Dzień tygodnia w którym się urodziłeś: " .date("D", strtotime($date)) ." </strong> </p>";
    echo "<p> <strong>Ilość skończonych lat: " . years(date("U", strtotime($date))) ." </strong> </p>";
    echo "<p> <strong>Dni do następnych urodzin: " . days(date("U", strtotime($date))) ." </strong> </p>";
}
?>
</body>
</html>