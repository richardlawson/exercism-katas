<?php

function findFewestCoins(array $coins, int $amount): array
{
    $change = [];
    $coins = array_reverse($coins);
    
    foreach ($coins as $coin) {
        if ($coin > $amount) {
            continue;
        }
        
        $numberOfCoins = floor($amount / $coin);
        addCoinsToChange($coin, $numberOfCoins, $change);
        $amount = $amount % $coin;
    }
    
    return array_reverse($change);
}

function addCoinsToChange(int $coin, int $number, array &$change) 
{
    for ($i = 0; $i < $number; $i++) {
       $change[] = $coin; 
    }
}



