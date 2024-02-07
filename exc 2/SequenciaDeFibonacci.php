<?php
function verifyFibonacci($number) : void
{
    $a = 0;
    $b = 1;

    while ($b < $number) {
        $temp = $a;
        $a = $b;
        $b = $temp + $a;
    }

    if ($b == $number) {
        echo "$number pertence à sequência de Fibonacci.\n";
    } else {
        echo "$number não pertence à sequência de Fibonacci.\n";
    }
}

// Exemplo de uso da função
$numberBelonging = 21;
$numberNotBelonging = 22;
verifyFibonacci($numberBelonging);
verifyFibonacci($numberNotBelonging);