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