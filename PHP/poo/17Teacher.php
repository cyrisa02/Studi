<?php

// fichier fille 1

require_once '17Person.php';
require_once '17Course.php';

class Teacher extends Person
{
    public Course $courses; // vu qu'il y a une seule matière ce n'est plus un array

    public function __construct(string $firstName, string $lastName, Course $course)
    {
        parent::__construct($firstName, $lastName);
        $this->course = $course;
    }

    public function getFullName()
    {
        return 'Professeur'.parent::getFullName();
    }

    public function getDescription(): string
    {
        return 'Enseigne'.$this->course->title;
    }
}
