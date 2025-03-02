<?php
function makeFibonacci($n, &$fib) {
    $fib[$n] = $fib[$n-1] + $fib[$n-2];
}
function fillFib($a, &$fib) {
    for ($i = 2; $i <= $a; $i++) {
        if($fib[$i-1] >= $a) {
            return;
        }
        makeFibonacci($i, $fib);
    }
}
function printfib($a, $fib) {
    $temp = 0;
    for ($i = 0; $i <= count($fib); $i++) {
        if(($fib[$i] % 2 != 0) && ($fib[$i] <= $a)) {
            echo $temp ." ". $fib[$i] . "\n";
            $temp++;
        }
    }
}
$fib = array(1,1);
$a = (int)readline("Podaj liczbe: ");
fillFib($a, $fib);
printfib($a, $fib);
?>