<?php

class School{
    private $grades = [];
    
    public function add(string $student, int $grade): void
    {
        $this->grades[$grade][] = $student;
    }
    
    public function grade(int $grade): array
    {
        if (!array_key_exists($grade, $this->grades)) {
            return [];
        }
        
        return $this->grades[$grade];
    }
    
    public function studentsByGradeAlphabetical(): array
    {
        asort($this->grades);
        
        // not sure this is the most elgant soulution, but it works.
        foreach($this->grades as $grade => $students) {
            sort($students);
            $this->grades[$grade] = $students;
        }
        
        return $this->grades;
    }
    
}