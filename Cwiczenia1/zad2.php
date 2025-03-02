<?php
function isPrime($n)
{
    if ($n <= 1){
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function printPrime($n)
{
    for ($i = 2; $i <= $n; $i++)
    {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
$a = (int)readline("Podaj liczbe: ");
printPrime($a);
?>