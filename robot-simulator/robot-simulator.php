<?php

class Robot
{
    const DIRECTION_NORTH = 1;
    const DIRECTION_EAST = 2;
    const DIRECTION_SOUTH = 3;
    const DIRECTION_WEST = 4;
    
    public $position;
    public $direction;
    
    private $validInstructions = ['A','B','C'];
    
    public function __construct(array $position, int $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }
    
    public function turnRight(): Robot
    {
        if ($this->direction === static::DIRECTION_WEST) {
            $this->direction = 1;
        } else {
            $this->direction++;
        }
        
        return $this;
    }
    
    public function turnLeft(): Robot
    {
        if ($this->direction === static::DIRECTION_NORTH) {
            $this->direction = 4;
        } else {
            $this->direction--;
        }
        
        return $this;
    }
    
    public function advance(): Robot
    {
        switch ($this->direction) {
            case static::DIRECTION_NORTH :
                $this->position[1] = $this->position[1] + 1;
                break;
            case static::DIRECTION_EAST :
                $this->position[0] = $this->position[0] + 1;
                break;
            case static::DIRECTION_SOUTH :
                $this->position[1] = $this->position[1] - 1;
                break;
            case static::DIRECTION_WEST :
                $this->position[0] = $this->position[0] -1;
                break;    
        }
        
        return $this;
    }
    
    public function instructions(string $instructions): void
    {
        for ($i = 0; $i < strlen($instructions); $i++) {
            $this->doMovement($instructions[$i]);
        }
    }
    
    public function doMovement(string $instruction): void 
    {
        switch ($instruction) {
            case 'A' :
                $this->advance();
                break;
            case 'L' :
                $this->turnLeft();
                break;
            case 'R' :
                $this->turnRight();
                break;
            default:
                throw new InvalidArgumentException();
        }
    }
}