<?php

namespace App;

class School
{
    protected $grades = [];

    public function addGrade($grade)
    {
        $this->grades[] = $grade;

        return $this;
    }

    /**
     * @return array
     */
    public function getGrades()
    {
        return $this->grades;
    }
}