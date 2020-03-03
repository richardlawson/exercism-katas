<?php

function wordCount(string $sentence): array
{
    $output = [];
    $words = explode(' ', strtolower(removePunctation($sentence)));
    
    foreach ($words as $word) {
        if (!array_key_exists($word, $output)) {
            $output[$word] = 1;
            continue;
        }
        
        $output[$word] += 1;
    }
    
    return $output;
}

function removePunctation(string $sentence): string
{
    return trim(preg_replace('/[^a-z0-9]+/i', ' ', $sentence)); 
}
