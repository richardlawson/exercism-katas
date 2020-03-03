<?php

function from(DateTimeImmutable $date) : DateTime
{
    $timeStamp = $date->getTimestamp() + 1000000000;
    $date = new DateTime();
    $date->setTimestamp($timeStamp);
    return $date;
}


User::whereHas($query, f)
