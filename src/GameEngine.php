<?php

namespace Brain\Games\GameEngine;

use function Brain\Games\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startGame($rules, $round, $countRounds = 3)
{
    $userName = welcome();
    $isUserWin = true;
    line($rules);
    for ($i = 0; $i < $countRounds; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $round();
        line("$question");
        $userAnswer = prompt("Your answer");
        if ((string) $correctAnswer === $userAnswer) {
            line("Correct!");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer is '$correctAnswer'.\nLet's try again, $userName");
            $isUserWin = false;
            return;
        }
    }
    if ($isUserWin) {
        line("Congratulations, {$userName}!");
    }
}
