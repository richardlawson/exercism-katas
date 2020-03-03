<?php


function sieve(int $number): array
{
    if($number < 2) {
        return [];
    }
    
    $numbers = range(2, $number);
    $primes = [];
    
    foreach ($numbers as $number) {
        if(isPrime($number)){
            $primes[] = $number;
        }
    }
    
    return $primes;
}

function isPrime(int $number): bool
{
    if($number === 2) {
        return true;  
    }
    
    $dividers = range(2, ($number - 1));
    
    foreach ($dividers as $divider) {
        if($number % $divider === 0){
            return false;
        }
    }
    
    return true;
}