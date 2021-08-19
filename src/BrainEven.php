<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;
use function Brain\Games\Utils\isEvenNum;

$countGames = 3;
function brainEvenGameProcess()
{
    $userName = welcome();
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $countGames = 3;
    $isUserWin = true;
    for($i = 0; $i < $countGames; $i++) {
        $randomNum = rand(1, 100);
        $correctAnswer = (isEvenNum($randomNum)) ? 'yes' : 'no';
        line("Quesion: {$randomNum}");
        $userAnswer = prompt('Your answer');

        if ($correctAnswer === $userAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$userName}!");
            $isUserWin = false;
            return;
        }
    }
    if ($isUserWin) {
        line("Congratulations, {$userName}!");
    }
}