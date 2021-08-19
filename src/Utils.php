<?php

namespace Brain\Games\Utils;

function isEvenNum(int $num): bool
{
    return $num % 2 === 0;
}
function gcd(int $a, int $b): int
{
    return $b ? gcd($b, $a % $b) : $a;
}
function isPrime(int $num): bool
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

//Utils for brain-progression
function fillProgressionRandomNum(int $lengthOfProgression): array
{
    $step = rand(1, 20);
    $result = [$step];
    for ($i = 0; $i < $lengthOfProgression - 1; $i++) {
        $result[] = $result[$i] + $step;
    }
    return $result;
}
function hideElemInProgression(array $progression): array
{
    $positionElem = rand(0, count($progression) - 1);
    $element = $progression[$positionElem];
    $progression[$positionElem] = '..';
    return [
      'element' => $element,
      'progression' => $progression,
    ];
}
function getElem(array $data): int
{
    return $data['element'];
}
function getProgression(array $data): array
{
    return $data['progression'];
}
//end of utils for brain-progression

function getGameRules(string $gameName): string
{
    switch ($gameName) {
        case 'brain-even':
            return "Answer \"yes\" if the number is even, otherwise answer \"no\".";
            break;
        case 'brain-calc':
            return "What is the result of the expression?";
            break;
        case 'brain-gcd':
            return "Find the greatest common divisor of given numbers.";
            break;
        case 'brain-progression':
            return "What number is missing in the progression?";
            break;
        case 'brain-prime':
            return "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
            break;
        default:
            return "rules for this game undefined";
    }
}
