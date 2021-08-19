<?php

namespace Brain\Games\GameEngine;

use function Brain\Games\BrainEven\brainEvenGameProcess;
use function Brain\Games\BrainCalc\brainCalcGameProcess;
use function Brain\Games\BrainGcd\brainGcdGameProcess;
use function Brain\Games\BrainProgression\brainProgressionGameProcess;
use function Brain\Games\BrainPrime\brainPrimeGameProcess;
use function Brain\Games\Utils\getGameRules;
use function Brain\Games\Cli\welcome;

function startGame($gameName)
{
    $countRounds = 3;
    $userName = welcome();
    $rules = getGameRules($gameName);
    switch ($gameName) {
        case 'brain-even':
            brainEvenGameProcess($rules, $countRounds, $userName);
            break;
        case 'brain-calc':
            brainCalcGameProcess($rules, $countRounds, $userName);
            break;
        case 'brain-gcd':
            brainGcdGameProcess($rules, $countRounds, $userName);
            break;
        case 'brain-progression':
            brainProgressionGameProcess($rules, $countRounds, $userName);
            break;
        case 'brain-prime':
            brainPrimeGameProcess($rules, $countRounds, $userName);
            break;
        default:
            echo "I didn't find such a game, $userName!\n";
    }
}
