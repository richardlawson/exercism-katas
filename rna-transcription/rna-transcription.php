<?php

function toRna($sequence): string
{
    $transformedSequence = '';
    
    for ($i = 0; $i < strlen($sequence); $i++) {
        $transformedSequence .= doConversion($sequence[$i]);
    }
    
    return $transformedSequence;
}

function doConversion(string $char): string
{
    switch ($char) {
        case 'C':
            return 'G';
        case 'G':
            return 'C';
        case 'T':
            return 'A';
        case 'A':
            return 'U';
    }
}