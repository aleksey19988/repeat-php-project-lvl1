<?php

namespace Brain\Games\BrainCalc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;

function brainCalcGameProcess()
{
    $userName = welcome();
    line("What is the result of the expression?");
    $countGames = 3;
    $isUserWin = true;
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < $countGames; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(2, 100);
        $operation = $operations[array_rand($operations)];
        switch ($operation) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
                break;
        }
        line("Question: {$num1} {$operation} {$num2}");
        $userAnswer = prompt("Your answer");

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
