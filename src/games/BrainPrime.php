<?php

namespace Brain\Games\BrainPrime;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;
use function Brain\Games\Utils\gcd;
use function Brain\Games\Utils\isPrime;

function brainPrimeGameProcess($rules, $countRounds, $userName)
{
    line($rules);
    $isUserWin = true;
    for ($i = 0; $i < $countRounds; $i++) {
        $num = rand(1, 100);
        if (isPrime($num)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        line("Question: $num");
        $userAnswer = prompt("Your answer");

        if ($correctAnswer === $userAnswer) {
            line("Correct!");
        } else {
            line(
                "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\nLet's try again, $userName!"
            );
            $isUserWin = false;
            return;
        }
    }
    if ($isUserWin) {
        line("Congratulations, $userName!");
    }
}
