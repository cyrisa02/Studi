<?php

// Fichier User.php
class User
{
    public string $name;
    public string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getDisplayedName(): string
    {
        return $this->name.' '.$this->surname;
    }
}

