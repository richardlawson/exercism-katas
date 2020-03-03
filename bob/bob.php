<?php

class Bob
{ 
    public function respondTo(string $command): string
    {
        $command = trim($command);

        if ($this->isYellingQuestion($command)) {
            return 'Calm down, I know what I\'m doing!';
        }

        if ($this->isQuestion($command)) {
            return 'Sure.';
        }

        if ($this->isYell($command)) {
            return 'Whoa, chill out!';
        }

        if ($this->isEmpty($command)) {
            return 'Fine. Be that way!';
        }

        return 'Whatever.';
    }

    public function isYellingQuestion($command): bool
    {
        return $this->isQuestion($command) && $this->isYell($command);
    }

    public function isQuestion(string $command): bool
    {
        return substr($command, -1) === '?';
    }

    public function isYell(string $command): bool
    {
        preg_match("/[a-zA-Z]+/", $command, $match);

        return !empty($match) && $command === strtoupper($command);
    }

    public function isEmpty(string $command): bool
    {
        return $command === '';
    }
}
