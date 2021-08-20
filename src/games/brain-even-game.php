<?php

namespace Brain\Games\BrainEven;

use function Brain\Games\Utils\isEvenNum;
use function Brain\Games\GameEngine\startGame;

function brainEvenGame()
{
    $rules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $round = function () {
        $randomNum = rand(1, 100);
        $question = "Quesion: {$randomNum}";
        $correctAnswer = (isEvenNum($randomNum)) ? 'yes' : 'no';
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
    startGame($rules, $round);
}
