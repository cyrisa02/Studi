<?php

//La visibilité protégée permet d'interdire l'utilisation d'une méthode ou d'une propriété en dehors de notre classe ou de ses classes filles. C'est-à-dire que n'importe quel objet instancié à l'extérieur de notre classe ne pourra pas les utiliser. En d’autres termes, cela signifie que les éléments protégés ne seront accessibles que depuis la variable $this.
class User
{
    protected string $username; // Cette propriété est protégée

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    protected function getName(): string // Cette méthode est protégée
    {
        return $this->username;
    }
}

class Admin extends User
{
    public function getAdministratorName(): string // Cette méthode est publique
    {
        return 'Administrateur '.$this->getName(); // La classe Admin a accès a la méthode getName car elle est protégée
    }
}

$john = new Admin('John');

$john->username = 'Johnny'; // Retourne une erreur car la propriété est protégée
echo $john->username.PHP_EOL; // Retourne une erreur car la propriété est protégée
echo $john->getName(); // Retourne une erreur car la méthode est protégée
echo $john->getAdministratorName(); // On peut appeler cette méthode parce qu'elle est publique, même si elle fait appel à des éléments protégés
