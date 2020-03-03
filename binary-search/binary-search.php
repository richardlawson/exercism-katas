<?php


function find(int $search, array $dictionary): int
{
    $lower = 0;
    $upper = count($dictionary)  -1;

    while ($upper >= $lower) {
        $middle = floor($upper + $lower / 2);

        if ($search > $dictionary[$middle]) {
            $lower = $middle + 1;
        } elseif ($search < $dictionary[$middle]) {
            $upper = $middle -1;
        } else {
            return $middle;
        }
    }

    return -1;
}
