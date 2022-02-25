<?php
// Fichier User.php

require_once '13interTooltipable.php';//Etape 5

class User implements Tooltipable
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getTitle(): string//Etape 5
    {
        return $this->firstName.' '.$this->lastName;
    }

    public function getDescription(): string//Etape 5

    {
        return $this->getTitle().' est un utilisateur de notre site';
    }
}

//Modif index.php Etape 6


