<?php
function invertString($string) : void
{
    $size = strlen($string);
    $inverted = '';

    for ($i = $size - 1; $i >= 0; $i--) {
        $inverted .= $string[$i];
    }

    echo "String original: $string\n";
    echo "String inverted: $inverted\n";
}

// Exemplo de uso da função
$stringInformed = "Hello, World!";
invertString($stringInformed);