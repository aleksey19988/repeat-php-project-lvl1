<?php

namespace Brain\Games\UtilsForBrainProgression;

function fillProgressionRandomNum($lengthOfProgression)
{
    $step = rand(1, 20);
    $result = [$step];
    for ($i = 0; $i < $lengthOfProgression - 1; $i++) {
        $result[] = $result[$i] + $step;
    }
    return $result;
}
function hideElemInProgression($progression)
{
    $positionElem = rand(0, count($progression) - 1);
    $element = $progression[$positionElem];
    $progression[$positionElem] = '..';
    return [
      'element' => $element,
      'progression' => $progression,
    ];
}
function getElem($data)
{
    return $data['element'];
}
function getProgression($data)
{
    return $data['progression'];
}
