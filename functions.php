<?php
/**
 * Created by PhpStorm.
 * User: nicalexander
 * Date: 1/4/19
 * Time: 10:47 AM
 */
function printArray($numbers)
{
    echo implode($numbers, ", ");
}

function largest($numbers)
{
    $number = $numbers[0];
    foreach($numbers as $num)
    {
        if ($num > $number)
        {
            $number = $num;

        }
    }
    return $number;
}
function average($numbers)
{
    $sum = 0;
    foreach($numbers as $num)
    {
        $sum += $num;
    }
    return $sum/sizeof($numbers);
}
function removeDups($numbers)
{
    return array_unique($numbers);
}
function distribution($numbers)
{
    $result = sort($numbers);
    $result = array_count_values($numbers);
    return $result;
}