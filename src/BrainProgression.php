<?php

namespace Brain\Games\BrainProgression;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcome;
use function Brain\Games\UtilsForBrainProgression\fillProgressionRandomNum;
use function Brain\Games\UtilsForBrainProgression\hideElemInProgression;
use function Brain\Games\UtilsForBrainProgression\getElem;
use function Brain\Games\UtilsForBrainProgression\getProgression;

function brainProgressionGameProcess()
{
    $userName = welcome();
    line("What number is missing in the progression?");
    $countGames = 3;
    $isUserWin = true;
    for ($i = 0; $i < $countGames; $i++) {
        $lengthOfProgression = rand(5, 15);
        $progressionWithAllElem = fillProgressionRandomNum($lengthOfProgression);
        $finalProgressionAndElem = hideElemInProgression($progressionWithAllElem);

        $correctAnswer = getElem($finalProgressionAndElem);
        $question = implode(', ', getProgression($finalProgressionAndElem));
        line("Question: $question");
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
