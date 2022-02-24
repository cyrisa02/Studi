<?php

session_start();

class User
{
    // Depuis PHP 7.4, il est possible de typer les propriétés d'une classe
    public string $name;

    public int $age;

    public string $defaultRole;

    public array $favoritePages = [];

    // Les paramètres d'entrée d'une fonction peuvent être typés avec les types string / int depuis PHP 7.0
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        // Depuis PHP 7.0, ce nouvel opérateur permet d'éviter la répétition dont nous disposions auparavant 
        $this->defaultRole = $_SESSION['DEFAULT_ROLE'] ?? 'ROLE_DEFAULT';
    }

    // Les paramètres de sortie d'une fonction peuvent être typés depuis PHP 7.0
    public function addToFavorites(string $link): bool
    {

        if (filter_var($link, FILTER_VALIDATE_URL) && !in_array($link, $this->favoritePages)) {
            array_push($this->favoritePages, $link);

            return true;
        }

        return false;
    }

    public function removeFromFavorites(string $link): bool
    {
        if (filter_var($link, FILTER_VALIDATE_URL) && in_array($link, $this->favoritePages)) {
            unset($this->favoritePages[array_search($link, $this->favoritePages)]);

            return true;
        }

        return false;
    }
}

$user = new User('Eric', 45);

// true
echo $user->addToFavorites('https://www.google.com/');
// false
echo $user->addToFavorites('https://www.google.com/');

// true
echo $user->removeFromFavorites('https://www.google.com/');

// ROLE_DEFAULT
echo $user->defaultRole;

$_SESSION['DEFAULT_ROLE'] = 'ROLE_USER';
$user2 = new User('Marie', 40);

// ROLE_USER
echo $user2->defaultRole;

unset($_SESSION['DEFAULT_ROLE']);


// version 7.2



session_start();

class User
{
    public $name;

    public $age;

    public $defaultRole;

    public $favoritePages = [];

    // Les paramètres d'entrée d'une fonction peuvent être typés avec les types string / int depuis PHP 7.0
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        // Depuis PHP 7.0 ce nouvel opérateur permet d'éviter la répétition dont nous disposions auparavant :
        $this->defaultRole = $_SESSION['DEFAULT_ROLE'] ?? 'ROLE_DEFAULT';
    }

    // Les paramètres de sortie d'une fonction peuvent être typés depuis PHP 7.0
    public function addToFavorites(string $link): bool
    {

        if (filter_var($link, FILTER_VALIDATE_URL) && !in_array($link, $this->favoritePages)) {
            array_push($this->favoritePages, $link);

            return true;
        }

        return false;
    }

    public function removeFromFavorites(string $link): bool
    {
        if (filter_var($link, FILTER_VALIDATE_URL) && in_array($link, $this->favoritePages)) {
            unset($this->favoritePages[array_search($link, $this->favoritePages)]);

            return true;
        }

        return false;
    }
}

$user = new User('Eric', 45);

// true
echo $user->addToFavorites('https://www.google.com/');
// false
echo $user->addToFavorites('https://www.google.com/');

// true
echo $user->removeFromFavorites('https://www.google.com/');

// ROLE_DEFAULT
echo $user->defaultRole;

$_SESSION['DEFAULT_ROLE'] = 'ROLE_USER';
$user2 = new User('Marie', 40);

// ROLE_USER
echo $user2->defaultRole;

unset($_SESSION['DEFAULT_ROLE']);
