<?php

// fichier fille 1

require_once '17Person.php';
require_once '17Course.php';

class Student extends Person
{
    public array $courses;

    public function __construct(string $firstName, string $lastName, array $courses)
    {
        parent::__construct($firstName, $lastName);
        $this->courses = $courses;
    }

    public function getDescription(): string
    {
        $coursesName = [];
        foreach ($this->courses as $course) {
            $coursesName[] = $course->title;
        }

        return 'Etudie'.implode(', ', $coursesName);
    }
}
