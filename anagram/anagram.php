<?php

function detectAnagrams(string $word, array $wordsToCheck): array
{
    $anagrams = [];

    foreach ($wordsToCheck as $wordToCheck) {
        if(isAnagram($word, $wordToCheck)) {
            $anagrams[] = $wordToCheck;
        }
    }

    return $anagrams;
}

function isAnagram(string $word, string $wordToCheck): bool 
{
    if (strtolower($word) !== strtolower($wordToCheck) 
        && getSortedWord($word) === getSortedWord($wordToCheck)) {
        return true;
    }
    
    return false;
}

function getSortedWord(string $word): string 
{
    $wordLetters = [];
    
    for ($i = 0; $i < strlen($word); $i++) {
        $wordLetters[] = strtolower($word[$i]);
    }
    
    sort($wordLetters);
    
    return implode($wordLetters);
}

