<?php

namespace Brain\Games\BrainCalc;

use function Brain\Games\GameEngine\startGame;

function brainCalcGame()
{
    $rules = "What is the result of the expression?";
    $operations = ['+', '-', '*'];
    $round = function () use ($operations) {
        $num1 = rand(1, 100);
        $num2 = rand(2, 100);
        $operation = $operations[array_rand($operations)];
        $question = "$num1 $operation $num2";
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
            default:
                throw new Exception("Не найден знак операции!\n");
        }
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
    startGame($rules, $round);
}
