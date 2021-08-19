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
