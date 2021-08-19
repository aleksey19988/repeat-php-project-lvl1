<?php

namespace Brain\Games\BrainGcd;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;
use function Brain\Games\Utils\gcd;

function brainGcdGameProcess()
{
    $userName = welcome();
    line("Find the greatest common divisor of given numbers.");
    $countGames = 3;
    $isUserWin = true;
    for ($i = 0; $i < $countGames; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $correctAnswer = gcd($num1, $num2);
        line("correct answer: $correctAnswer");
        line("Question: $num1 $num2");
        $userAnswer = prompt('Your answer');

        if ((string) $correctAnswer === $userAnswer) {
            line('Correct!');
        } else {
            line(
                "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\nLet's try again, $userName!"
            );
            $isUserWin = false;
            return;
        }
    }
    if ($isUserWin) {
        line("Congratulations, {$userName}!");
    }
}
