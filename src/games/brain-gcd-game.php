<?php

namespace Brain\Games\BrainGcd;

use function Brain\Games\GameEngine\startGame;
use function Brain\Games\Utils\gcd;

function BrainGcdGame()
{
    $rules = "Find the greatest common divisor of given numbers.";
    $round = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "Question: $num1 $num2";
        $correctAnswer = gcd($num1, $num2);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
    startGame($rules, $round);
}
