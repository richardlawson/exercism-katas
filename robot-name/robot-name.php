<?php
class Robot
{
    private static $usedNames = [];
    private $name;
    
    public function getName(): string
    {
        if (!empty($this->name)) {
           return $this->name; 
        }
            
        $name = $this->getRandomLetters() . $this->getRandomNumber();
        
        if(in_array($name, static::$usedNames)) {
            $name = $this->getName();
        }
        
        static::$usedNames[] = $name;
        $this->name = $name;
        
        return $this->name;
    }
    
    public function reset(): string 
    {
        $this->name = null;
        $this->name = $this->getName();
        return $this->name;
    }
    
    private function getRandomNumber(): string
    {
        $numberString = '';
        
        for ($i=0; $i<3; $i++) {
            $numberString .= rand(0,9);
        }
        
        return $numberString;
    }
    
    private function getRandomLetters(): string
    {
        $letterString = '';
        
        $alphaChars = range('A', 'Z');
        
        for ($i=0; $i<2; $i++) {
            shuffle($alphaChars);
            $letterString .= $alphaChars[0];
        }
        
        return $letterString;
    }
}