<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;
use function Brain\Games\Utils\isEvenNum;

function brainEvenGameProcess($rules, $countRounds, $userName)
{
    line($rules);
    $isUserWin = true;
    for ($i = 0; $i < $countRounds; $i++) {
        $randomNum = rand(1, 100);
        $correctAnswer = (isEvenNum($randomNum)) ? 'yes' : 'no';
        line("Quesion: {$randomNum}");
        $userAnswer = prompt('Your answer');

        if ($correctAnswer === $userAnswer) {
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
