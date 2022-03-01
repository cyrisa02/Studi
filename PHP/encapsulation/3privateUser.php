<?php

//Enfin, la visibilité privée permet d'interdire l'utilisation d'une méthode ou d'une propriété strictement en dehors de notre classe. Même les classes filles n'auront pas accès à ces éléments.
class User
{
    private string $username; // Cette propriété est privée

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    private function getName(): string // Cette méthode est privée
    {
        return $this->username;
    }
}

class Admin extends User
{
    public function getAdministratorName(): string // Cette méthode est publique
    {
        return 'Administrateur '.$this->getName(); // La classe Admin n'a pas accès a la méthode getName car elle est privée
    }
}

$john = new Admin('John');

$john->username = 'Johnny'; // Retourne une erreur car la propriété est privée
echo $john->username.PHP_EOL; // Retourne une erreur car la propriété est privée
echo $john->getName(); // Retourne une erreur car la méthode est privée
echo $john->getAdministratorName(); // Retourne une erreur car la méthode est buguée
