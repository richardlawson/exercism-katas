<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/

function distance(string $strandA, string $strandB) : int
{
    if (!stringsAreSameLength($strandA, $strandB)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    
    $distance = 0;
    
    for ($i = 0; $i < strlen($strandA); $i++) {
        if ($strandA[$i] !== $strandB[$i]) {
            $distance++;
        }
    }
    
    return $distance;
}

function stringsAreSameLength($stringA, $stringB) : bool
{
    return strlen($stringA) === strlen($stringB);
}
