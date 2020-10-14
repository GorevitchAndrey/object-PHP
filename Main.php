<?php

require_once 'vendor/autoload.php';

use App\Grade;
use App\School;
use App\Student;
use App\Test\Teacher ;


$teacher = new Teacher();

$school = new School();
$school->addGrade(new Grade())->addGrade(new Grade());

$school->getGrades()[0]->addStudent(new Student('Ivan', 'GG'));
$school->getGrades()[0]->addStudent(new Student('Ivan', 'DD'));

$school->getGrades()[1]->addStudent(new Student('Ivan', 'BB'));
$school->getGrades()[1]->addStudent(new Student('Ivan', 'CC'));

print_r($school);