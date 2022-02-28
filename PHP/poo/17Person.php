<?php

//fichier mère

require_once '17Descriptable.php';

abstract class Person implements Descriptable
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }

    public function getTitle(): string
    {
        return $this->getFullName();
    }
}

// J'avais un souci avec getTitle, la fonction était différente dans Course (1 champ= title) et dans ce fichier deux champs (lastName et firstName), du coup création d'une autre fonction et mise à jour de getTitle avec un champ
