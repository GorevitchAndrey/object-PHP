<?php

namespace App;

class Grade
{
    protected $students = [];

    public function addStudent($student)
    {
        $this->students[] = $student;

        return $this;
    }
}
