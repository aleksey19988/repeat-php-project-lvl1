<?php

namespace Brain\Games\BrainPrime;

use function Brain\Games\GameEngine\startGame;
use function Brain\Games\Utils\isPrime;

function brainPrimeGame()
{
    $rules = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $round = function () {
        $num = rand(1, 100);
        if (isPrime($num)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $question = "Question: $num";
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
    startGame($rules, $round);
}
