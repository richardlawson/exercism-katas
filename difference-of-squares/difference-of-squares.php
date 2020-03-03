<?php


function squareOfSum(int $to): int
{
    $numbers = range(1, $to);
    $sum = array_sum($numbers);
    return $sum * $sum;
}

function sumOfSquares(int $to): int
{
    $numbers = range(1, $to);
    $squaredNumbers = array_map(function($number) {
        return $number * $number;
    }, $numbers);
    
    return array_sum($squaredNumbers);
}

function difference(int $to): int
{
    return squareOfSum($to) - sumOfSquares($to);
}