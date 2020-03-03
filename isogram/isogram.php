<?php

function isIsogram(string $word): bool
{
    $word = strtolower($word);
    $letters = [];
    $specialCharcters = ['-', ' '];

    for ($i = 0; $i < strlen($word); $i++) {
        if (!in_array($word[$i], $specialCharcters, true) && array_key_exists($word[$i], $letters)) {
            return false;
        }

        $letters[$word[$i]] = 1;
    }

    return true;
}
