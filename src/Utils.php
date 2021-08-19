<?php

namespace Brain\Games\Utils;

function isEvenNum($num)
{
    return $num % 2 === 0;
}
function gcd($a, $b)
{
    return $b ? gcd($b, $a % $b) : $a;
}
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < floor($num / 2); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
