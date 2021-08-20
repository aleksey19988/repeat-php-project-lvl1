<?php

namespace Brain\Games\BrainProgression;

use function Brain\Games\GameEngine\startGame;
use function Brain\Games\Utils\fillProgressionRandomNum;
use function Brain\Games\Utils\hideElemInProgression;
use function Brain\Games\Utils\getElem;
use function Brain\Games\Utils\getProgression;

function brainProgressionGame()
{
    $rules = "What number is missing in the progression?";
    $round = function () {
        $lengthOfProgression = rand(5, 15);
        $progressionWithAllElem = fillProgressionRandomNum($lengthOfProgression);
        $finalProgressionAndElem = hideElemInProgression($progressionWithAllElem);
        $progressionWithHideElem = implode(', ', getProgression($finalProgressionAndElem));
        $question = "Question: $progressionWithHideElem";
        $correctAnswer = getElem($finalProgressionAndElem);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
    startGame($rules, $round);
}
